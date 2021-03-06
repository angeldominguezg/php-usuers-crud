<?php 

// https://www.youtube.com/watch?v=dQxuYRNbL_M

class User
{
    protected $id, $name, $username, $email, $phone, $website, $extension;

    public function getUserById($id)
    {
        $users = $this->getUsers();

        foreach ($users as $key => $user) {
            if($user['id'] == $id) {
                return $user;
            }
        }

        return null;
    }

    function createUser($data)
    {
        $users = $this->getUsers();
        $data['id'] = rand(1000000, 2000000);
        $users[] = $data;

        $this->putJson($users);

        return $data;
    }

    public function getUsers()
    {
        return json_decode(file_get_contents(__DIR__.'/users.json'), true);
    }

    public function updateUser($data, $id)
    {
        $users = $this->getUsers();
        $updateUser = [];

        foreach($users as $index => $user) {
            if ($user['id'] == $id) {
                $users[$index] = $updateUser = array_merge($user, $data);
            }
        }

        $this->putJson($users);
        return $updateUser;

    }

    function deleteUser($id)
    {
        $users = $this->getUsers();

        foreach($users as $index => $user) {
            if ($user['id'] == $id) {
                array_splice($users, $index, 1);
            }
        }

        $this->putJson($users);
    }

    public function uploadImage($file, $user) 
    {
        if(isset($_FILES['photo']) && $_FILES['photo']['name']){
            if(!is_dir(__DIR__."/images")) {
                mkdir(__DIR__."/images");
            }

            $fileName = $_FILES['photo']['name'];
            $dotPosition = strpos($fileName,  ".");
            $extension = substr($fileName, $dotPosition + 1);

            move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__."/images/${user['id']}.$extension");

            $user['extension'] = $extension;
            $this->updateUser($user, $user['id']);
        }
    }

    private function putJson($users) {
        file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
    }


}

?>