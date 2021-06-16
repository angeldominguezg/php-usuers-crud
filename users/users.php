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

    $user = array_filter($users, function($obj) use($id){
            if( $obj['id'] == $id) {
                return true;
            } else {
                return false;
            }
    });
    return $user[0];
}

function createUser($data) 
{
    $users = getUsers();
    $data['id'] = rand(1000000, 2000000);
    $users[] = $data;

    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));

}

function updateUser($data, $id)
{

}

function deleteUser($id)
{

}