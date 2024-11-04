<?php
include('connect.php'); 

if (isset($_POST['save'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message (full_name, email, message) VALUES ('Fullame', 'email', 'message')";
    //$sql = "UPDATE `message` SET `full_name` = 'Bealu', `email` = 'Bealu@email.com', `message` = 'This is my messages' WHERE `message`.`id` = 2;";
    //$sql = "DELETE FROM `message` WHERE `message`.`id` = 4";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?status=success');
        exit();
    } else {
        header('Location: index.php?status=error');
        exit();
    }
}