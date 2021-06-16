<?php
require './users/users.php';
require './partials/header.php';
$id = $_GET['id'];
$user =  getUserByID($id);
echo '<pre>';
var_dump($user);
echo '</pre>';
?>
<content>
    <div class="container">
        <h1>User View</h1>
    </div>
</content>
<?php
require './partials/footer.php';
?>