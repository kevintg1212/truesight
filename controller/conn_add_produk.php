<?php 
include 'conn.php';
    
    $stmt1 = $db2->prepare("UPDATE `produk` set `view`=? where `id_produk` = ?");
    $stmt1->bind_param("ss", $jumlah_view, $id_produk);
    
    
    $id_produk = $_GET['id_produk'];
    $view = $_GET['view'];
    $jumlah_view = $view+1;

    echo 'id_produk: '.$id_produk;

    $stmt1->execute();
    printf("Error: %s.\n", $stmt1->error);
    $stmt1->close();
    
    header("location:../single-product.php?id_produk=$id_produk");

    



?>