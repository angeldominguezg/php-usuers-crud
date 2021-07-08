<?php
include './partials/header.php';
require __DIR__ . '/users/User.php';

$USER = new User;

if (!isset($_POST['id'])) {
    // TODO Not Found Page
    exit;
}

$userId = $_POST['id'];
$USER->deleteUser($userId);

header("Location: index.php");

?>