<?php

use Core\App;
use Core\Database;


$db = App::container()->resolve(Database::class);


$id = $_GET['id'];
$user_id = 1;


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
