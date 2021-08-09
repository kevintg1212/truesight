<?php 
include 'conn.php';
session_start();
$stmt1 = $db2->prepare("INSERT INTO `newsletter` (email, date_news)
VALUES(?, ?)");
$stmt1->bind_param("ss", $email, $date_news);
    
    
    $email = $_POST['email'];
    date_default_timezone_set('Asia/Jakarta');
    $date_news = date("Y-m-d H:i:s");



    $stmt1->execute();
    printf("Error: %s.\n", $stmt1->error);
    $stmt1->close();
    $_SESSION['trues'] = "trues";
    header("location:../index.php");

    



?>