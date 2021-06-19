<?php
require './users/users.php';
require './partials/header.php';
$users =  getUsers();
?>

<content>
    <div class="container">
        <a class="red" href="create.php">Add User</a>
        <table class="table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Phone</th>
                    <th class="px-4 py-2">Website</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr class="bg-gray-100">
                    <td class="px-4 py-2"><?php echo $user['name']; ?></td>
                    <td class="px-4 py-2"><?php echo $user['username']; ?></td>
                    <td class="px-4 py-2"><?php echo $user['email']; ?></td>
                    <td class="px-4 py-2"><?php echo $user['phone']; ?></td>
                    <td class="px-4 py-2"><?php echo $user['website']; ?></td>
                    <td class="px-4 py-2">
                        <div class="inline-flex">
                            <a href="view.php?id=<?php echo $user['id']; ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                View
                            </a>
                            <a href="edit.php?id=<?php echo $user['id']; ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4">
                                Edit
                            </a>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                <button type="submit" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</content>

<?php
require './partials/footer.php';
?>