<?php
require './users/users.php';
require './partials/header.php';
$user = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => ""
];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => ""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);

    if($isValid) {
        $user = createUser($_POST);
        uploadImage($_FILES['photo'], $user);
        header('location: index.php');
    }
}
?>
<content>
    <div class="container mx-auto px-4">
        <div class="card w-96 shadow-2xl rounded-lg mx-auto">
            <div class="card-header relative h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-t-lg">
                <h1 class="absolute top-5 left-4 font-extrabold text-4xl right-0 text-white">
                    New User
                </h1>
                <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="img/no-photo.jpg" alt="No user photo available">
            </div>
            <?php require_once "_form.php";?>
        </div>
    </div>
</content>
<?php
require './partials/footer.php';
?>