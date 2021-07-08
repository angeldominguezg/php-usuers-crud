<div class="card-header relative h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-t-lg">
    <h1 class="absolute top-5 left-4 font-extrabold text-4xl right-0 text-white">#<?php echo $user['id']; ?></h1>
    <?php if(isset($user['extension'])): ?>
    <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="users/images/<?php echo $user['id'].".".$user['extension']?>" alt="No user photo available">
    <?php else: ?>
    <img class="absolute top-4 right-4 w-20 rounded-full border-4 border-green-300" src="img/no-photo.jpg" alt="No user photo available">
    <?php endif; ?>
</div>