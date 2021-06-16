<?php
require './users/users.php';
require './partials/header.php';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    createUser($_POST);
}
?>
<content>
    <div class="container">
        <h1>Create User</h1>
        <form action="create.php" method="post">
            <div>
                <label for="name">Name</label>
                <input class="bg-gray-200" type="text" name="name">
            </div>
            <div>
                <label for="username">User Name</label>
                <input class="bg-gray-200" type="text" name="username">
            </div>
            <div>
                <label for="email">Email</label>
                <input class="bg-gray-200" type="text" name="email">
            </div>
            <div>
                <label for="phone">Phone</label>
                <input class="bg-gray-200" type="text" name="phone">
            </div>
            <div>
                <label for="website">Website</label>
                <input class="bg-gray-200" type="text" name="website">
            </div>
            <button type="submit">Add User</button>
        </form>
    </div>
</content>
<?php
require './partials/footer.php';
?>