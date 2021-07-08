<?php
require './users/User.php';
require './partials/header.php';
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
    $isValid = $USER->validateUser($user, $errors);

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
            <div class="card-header relative h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-t-lg">
                <h1 class="absolute top-5 left-4 font-extrabold text-4xl right-0 text-white">#<?php echo $user['id']; ?></h1>
                <?php if(isset($user['extension'])): ?>
                <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="users/images/<?php echo $user['id'].".".$user['extension']?>" alt="No user photo available">
                <?php else: ?>
                <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="img/no-photo.jpg" alt="No user photo available">
                <?php endif; ?>
            </div>
            <?php require_once "_form.php";?>
        </div>
    </div>
</content>
<?php
require './partials/footer.php';
?>