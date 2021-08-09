<?php 
include 'conn.php';

    $stmt3 = $db2->prepare("DELETE from `links` where id_links = ? ");
    $stmt3->bind_param("s",  $idLink);
    
    $idLink = mysqli_real_escape_string($db2,$_POST['id_link']);

    $stmt3->execute();
    $stmt3->close();
    header("location:../links.php");





?>