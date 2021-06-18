<?php
require './users/users.php';
require './partials/header.php';


$id = $_GET['id'];
$user =  getUserByID($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    updateUser($_POST, $id);
}
?>
<content>
    <div class="container">
        <h1>Edit User: <?php echo $user['name']?></h1>
    </div>
    <form action="edit.php?id=<?php echo $id ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id']?>">
            <div>
                <label for="name">Name</label>
                <input class="bg-gray-200" type="text" name="name" value="<?php echo $user['name']?>">
            </div>
            <div>
                <label for="username">User Name</label>
                <input class="bg-gray-200" type="text" name="username" value="<?php echo $user['username']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input class="bg-gray-200" type="text" name="email" value="<?php echo $user['email']?>">
            </div>
            <div>
                <label for="phone">Phone</label>
                <input class="bg-gray-200" type="text" name="phone" value="<?php echo $user['phone']?>">
            </div>
            <div>
                <label for="website">Website</label>
                <input class="bg-gray-200" type="text" name="website" value="<?php echo $user['website']?>">
            </div>
            <button type="submit">Update User</button>
        </form>
</content>
<?php
    require './partials/footer.php';
?>