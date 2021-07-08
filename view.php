<?php
require './users/User.php';
require './partials/header.php';

$USER = new User();

if(!isset($_GET['id'])) {
    include './partials/not_found.php';
    exit;
}

$id = $_GET['id'];
$user = $USER->getUserById($id);

if(!isset($user)) {
    include './partials/not_found.php';
    exit;
}
?>
<content class="flex-grow">
    <div class="container mx-auto px-4">

        <div class="card w-96 shadow-2xl rounded-lg mx-auto">
            <?php require_once "./partials/card_header.php";?>

            <div class="card-body px-4 pt-4 pb-2 space-y-4">
                <div>
                    <label for="">Name: </label>
                    <em><?php echo $user['name']?></em>
                </div>
                <div>
                    <label for="">User Name: </label>
                    <em><?php echo $user['username']?></em>
                </div>
                <div>
                    <label for="">Email: </label>
                    <em><?php echo $user['email']?></em>
                </div>
                <div>
                    <label for="">Phone: </label>
                    <em><?php echo $user['phone']?></em>
                </div>
                <div>
                    <label for="">Website: </label>
                    <em><?php echo $user['website']?></em>
                </div>
            </div>

            <div class="card-footer text-center my-3 pb-4">
                <div class="inline-flex">
                    <a href="edit.php?id=<?php echo $user['id'] ?>" class="bg-green-400 text-white hover:bg-gray-400 font-bold py-1 px-6 rounded-l">
                        Edit
                    </a>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button type="submit" class="bg-red-400 text-white hover:bg-gray-400 font-bold py-1 px-4 rounded-r">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</content>
<?php
require './partials/footer.php';
?>