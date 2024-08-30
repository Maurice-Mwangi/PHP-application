<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<<<<<<< HEAD
    <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?=$heading?></h1>
=======
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">
        <?= isset($_SESSION['name']) ? $_SESSION['name'] : "Guest" ?>
    </h1>
>>>>>>> 5218e1c (User authentication and sessions)
    </div>
</header>