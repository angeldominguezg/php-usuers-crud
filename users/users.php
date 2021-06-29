<?php 

function getUsers() 
{
    return json_decode(file_get_contents(__DIR__.'/users.json'), true);
    // echo '<pre>';
    // var_dump($users);
    // echo '</pre>';
}

function getUserById($id)
{
    $users = getUsers();

    foreach ($users as $key => $user) {
        if($user['id'] == $id) {
            return $user;
        }
    }

    return null;
}

function createUser($data) 
{
    $users = getUsers();
    $data['id'] = rand(1000000, 2000000);
    $users[] = $data;

    putJson($users);

    return $data;

}

function updateUser($data, $id)
{
    $users = getUsers();
    $updateUser = [];

    foreach($users as $index => $user) {
        if ($user['id'] == $id) {
            $users[$index] = $updateUser = array_merge($user, $data);
        }
    }

    putJson($users);
    return $updateUser;

}

function deleteUser($id)
{
    $users = getUsers();

    foreach($users as $index => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $index, 1);
        }
    }

    putJson($users);
}

function putJson($users) {
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

function uploadImage($file, $user) {

    if(isset($_FILES['photo']) && $_FILES['photo']['name']){

        if(!is_dir(__DIR__."/images")) {
            mkdir(__DIR__."/images");
        }

        $fileName = $file['photo']['name'];
        $dotPosition = strpos($fileName,  ".");
        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['photo']['tmp_name'], __DIR__."/images/${user['id']}.$extension");

        $user['extension'] = $extension;

        updateUser($user, $user['id']);

    }
}