<?php 
include 'conn.php';
session_start();

    $id_produk = $_POST['id_produk'];
    $id_varian = $_POST['id_varian'];
    echo "cc = ".$id_produk;
    echo "<br> varian = ".$id_varian;

    if($id_varian == ""){
        echo "tdak ada id varian";
        $stmt3 = $db2->prepare("DELETE from `produk` where id_produk = ? ");
        $stmt3->bind_param("s",  $id_produk);
        
        
        $stmt3->execute();
        $stmt3->close();

        $_SESSION['deleteProduk']="success";
        header("location:../produk.php?");
    } else {
        $_SESSION['deleteProduk']="warning";
        echo "ada varian";
        header("location:../produk.php?");
    }

    
?>