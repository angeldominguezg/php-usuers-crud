<?php
require './users/users.php';
require './partials/header.php';
$users =  getUsers();
?>
<content>
    <div class="container">
        <h1>Edit View</h1>
    </div>
</content>
<?php
require './partials/footer.php';
?>