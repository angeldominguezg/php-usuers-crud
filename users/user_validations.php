<?php 

function validateUser($user, &$errors){
    $isValid = true;

    if(!$user['name']) {
        $isValid = false;
        $errors['name'] = "The name is mandatory.";
    }

    if(!$user['username'] || strlen($user['username']) < 5 || strlen($user['username']) > 15) {
        $isValid = false;
        $errors['username'] = "The username is required and it must be more than 5 and less then 15 characters.";
    }

    if(!$user['email'] && !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errors['email'] = "This must be a valid email.";
    }

    if(!filter_var($user['phone'], FILTER_VALIDATE_INT)) {
        $isValid = false;
        $errors['phone'] = "Only numbers are allowed.";
    }
    return $isValid;
}

?>