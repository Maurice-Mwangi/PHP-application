<?php

use Core\Database;

$id = $_GET['id'];
$user_id = 1;

$config = require base_path('config.php');

$db = new Database($config['database']);

$post = $db->query("Select * FROM notes WHERE id = :id", 
[
    'id' => $id,
])->findOrFail();

authorize($post['user_id'] === $user_id);

$db->query("DELETE FROM notes WHERE id = :id", [
    ':id' => $_POST['id']
]);

header("Location: /notes");
exit();
