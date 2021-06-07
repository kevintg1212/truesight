<?php 
include 'conn.php';

    $id_produk = $_GET['id_produk'];
    $id_varian = $_GET['id_varian'];
    echo "cc = ".$id_produk;
    echo "<br> varian = ".$id_varian;

    if($id_varian == ""){
        echo "tdak ada id varian";
        $stmt3 = $db2->prepare("DELETE from `produk` where id_produk = ? ");
        $stmt3->bind_param("s",  $id_produk);
        
        
        $stmt3->execute();
        $stmt3->close();
        header("location:../produk.php?");
    } else {
        $_SESSION['option']="warning";
        echo "ada varian";
        header("location:../produk.php?");
    }

    
?>