<form method="POST" enctype="multipart/form-data" action="">
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
        <div>
            <label for="photo">Avatar</label>
            <div class="mt-1">
                <input class="" type="file" name="photo" value="<?php echo $user['photo']?>">
            </div>
        </div>
    </div>
    <div class="card-footer text-center my-3 pb-4">
        <div class="inline-flex">
            <a href="index.php" class="bg-gray-400 text-white hover:bg-gray-400 font-bold py-1 px-6 rounded-l">
                Back
            </a>
            <button type="submit" class="bg-blue-400 text-white hover:bg-gray-400 font-bold py-1 px-4 rounded-r">Submit</button>
        </div>
    </div>
</form>