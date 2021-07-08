<?php
require './users/User.php';
require './partials/header.php';
require './users/user_validations.php';

$USER = new User();

if(!isset($_GET['id'])) {
    include './partials/not_found.php';
    exit;
}

$id = $_GET['id'];
$user =  $USER->getUserByID($id);

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => ""
];


if(!isset($user)) {
    include './partials/not_found.php';
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);

    if($isValid) {
        $user =  $USER->updateUser($_POST, $id);
        $USER->uploadImage($_FILES['photo'], $user);
        header('location: index.php');
    }
}
?>
<content class="flex-grow">
    <div class="container mx-auto px-4">
        <div class="card w-96 shadow-2xl rounded-lg mx-auto">
            <?php require_once "./partials/card_header.php";?>
            <?php require_once "_form.php";?>
        </div>
    </div>
</content>
<?php
require './partials/footer.php';
?>