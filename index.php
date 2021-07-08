<?php
require './users/User.php';
require './partials/header.php';
$USER = new User();
$users =  $USER->getUsers();
?>

<content class="flex-grow">
    <div class="container mx-auto px-4">

        <!-- Tools row -->
        <div class="text-center m-4">
            <a href="create.php" class="px-2 py-3 border-2 border-blue-900 rounded-lg bg-blue-500 text-white">New fake user</a>
        </div>

        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach($users as $user): ?>
            <div class="card border-2 border-gray-50 shadow-xl rounded-lg px-2 py-2">
                <div class="card-header h-12">
                    <div class="relative">
                        <h1 class="absolute left-0 top-0 font-extrabold text-4xl right-0 text-gray-700">#<?php echo $user['id']; ?></h1>
                        <?php if(!isset($user['extension'])): ?>
                            <img class="absolute top-0 right-0 w-12 rounded-full border-4 border-green-300" src="img/no-photo.jpg" alt="No user photo available">
                        <?php else: ?>
                            <img class="absolute top-0 right-0 w-12 rounded-full border-4 border-green-300" src="users/images/<?php echo $user['id'].".".$user['extension']?>" alt="User photo">
                        <?php endif?>
                    </div>
                </div>
                <div class="card-body mt-2">
                    <p>Name: <span><?php echo $user['name']; ?></span></p>
                    <p>Username: <span><?php echo $user['username']; ?></span></p>
                    <p>Email: <span><?php echo $user['email']; ?></span></p>
                    <p>Phone: <span><?php echo $user['phone']; ?></span></p>
                    <p>Website: <span><?php echo $user['website']; ?></span></p>
                </div>
                <div class="card-footer text-center my-3">
                    <div class="inline-flex">
                        <a href="view.php?id=<?php echo $user['id'] ?>" class="bg-blue-400 text-white hover:bg-gray-400 font-bold py-1 px-4 rounded-l">
                            View
                        </a>
                        <a href="edit.php?id=<?php echo $user['id'] ?>" class="bg-green-400 text-white hover:bg-gray-400 font-bold py-1 px-4">
                            Edit
                        </a>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                            <button type="submit" class="bg-red-400 text-white hover:bg-gray-400 font-bold py-1 px-4 rounded-r">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</content>

<?php
require './partials/footer.php';
?>
