<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">Back to all Notes...</a>
            </p>

           <li><?= htmlspecialchars($post['body']) ?></li>

           <form class="mt-6" action="" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?=$post['id']?>">
                <button class="text-sm text-red-500">Delete</button>
           </form>

        </div>
    </main>
    
<?php require base_path("views/partials/foot.php") ?>