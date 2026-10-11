<?php
include 'dbcon.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id > 0) {
    $conn->query("DELETE FROM users WHERE id = $id");
}

header("Location: index.php?msg=deleted");
exit;
