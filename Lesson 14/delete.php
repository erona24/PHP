<?php
include_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE ID = :id";
    $deleteUser = $conn->prepare($sql);
    $deleteUser->bindParam(':id', $id, PDO::PARAM_INT);
    $deleteUser->execute();
}

header('Location: dashboard.php');
exit;
?>
