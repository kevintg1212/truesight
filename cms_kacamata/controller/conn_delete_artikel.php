<?php 
include 'conn.php';

    $stmt3 = $db2->prepare("DELETE from `artikel` where id_article = ? ");
    $stmt3->bind_param("s",  $id_artikel);

    $id_artikel = $_POST['id_artikel'];
    echo "cc = ".$id_artikel;

    $stmt3->execute();
    $stmt3->close();

    header("location:../artikel.php?");





?>