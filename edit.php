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
    <div class="container mx-auto px-4">

        <div class="card w-96 shadow-2xl rounded-lg mx-auto">
            <div class="card-header relative h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-t-lg">
                <h1 class="absolute top-5 left-4 font-extrabold text-4xl right-0 text-white">#<?php echo $user['id']; ?></h1>
                <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="img/no-photo.jpg" alt="No user photo available">
            </div>

            <form action="edit.php?id=<?php echo $id ?>" method="post">
                <div class="card-body px-4 pt-4 pb-2 space-y-4">
                    <input type="hidden" name="id" value="<?php echo $user['id']?>">
                    <div>
                        <label for="name">Name</label>
                        <div class="mt-1">
                            <input type="text" class="w-full rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" name="name" value="<?php echo $user['name']?>">
                        </div>
                    </div>
                    <div>
                        <label for="user-name">User Name</label>
                        <div class="mt-1">
                            <input class="w-full rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="username" value="<?php echo $user['username']?>">
                        </div>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <div class="mt-1">
                            <input class="w-full rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="email" value="<?php echo $user['email']?>">
                        </div>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <div class="mt-1">
                            <input class="w-full rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="phone" value="<?php echo $user['phone']?>">
                        </div>
                    </div>
                    <div>
                        <label for="website">Website</label>
                        <div class="mt-1">
                            <input class="w-full rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" type="text" name="website" value="<?php echo $user['website']?>">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center my-3 pb-4">
                    <div class="inline-flex">
                        <a href="index.php" class="bg-gray-400 text-white hover:bg-gray-400 font-bold py-1 px-6 rounded-l">
                            Back
                        </a>
                        <button type="submit" class="bg-blue-400 text-white hover:bg-gray-400 font-bold py-1 px-4 rounded-r">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</content>
<?php
require './partials/footer.php';
?>