<?php
require './users/users.php';
require './partials/header.php';
$id = $_GET['id'];
$user =  getUserByID($id);
// echo '<pre>';
// var_dump($user);
// echo '</pre>';
?>
<content>
    <div class="container">
        <h1>User User</h1>
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

        <!-- Update -->
        <a href="edit.php?id=<?php echo $user['id'] ?>">Edit</a>
        <!-- Delete -->
        <a href="delete.php?id=<?php echo $user['id'] ?>">Delete</a>
        <!-- Back -->
        <a href="index.php">Back</a>
    </div>
</content>
<?php
require './partials/footer.php';
?>