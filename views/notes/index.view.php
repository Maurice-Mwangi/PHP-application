<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>


    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
           <ul>
            <?php foreach($posts as $post): ?>
                    <li>
                        <a href="/note?id=<?=$post['id']?>" class="text-blue-500  hover:underline">
                            <?= htmlspecialchars($post['body'])?>
                        </a>
                    </li>
                <?php endforeach ?>
           </ul>
           <p class="mt-6">
                <a href="/note/create">Create new Note...</a>
           </p>
        </div>
    </main>
    
<?php require base_path("views/partials/foot.php") ?>