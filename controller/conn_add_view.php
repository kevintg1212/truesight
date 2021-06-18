<?php 
include 'conn.php';
    
    $stmt1 = $db2->prepare("UPDATE `artikel` set `view`=? where `id_article` = ?");
    $stmt1->bind_param("ss", $jumlah_view, $id_artikel);
    
    
    $id_artikel = $_GET['id_article'];
    $view = $_GET['view'];
    $jumlah_view = $view+1;

    echo 'id_artikel: '.$id_artikel;

    $stmt1->execute();
    printf("Error: %s.\n", $stmt1->error);
    $stmt1->close();
    
    header("location:../blog-details.php?id_artikel=$id_artikel");

    



?>