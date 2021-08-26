<?php 
include 'conn.php';
session_start();
    



    $stmt1 = $db2->prepare("INSERT INTO `links` (judul, link, urutan)
                            VALUES(?, ?, ?)");
    $stmt1->bind_param("sss", $judul, $textLink2, $urutan);
    
    $judul = mysqli_real_escape_string($db2,$_POST['inputJudul2']);
    $textLink2 = mysqli_real_escape_string($db2,$_POST['textLink2']);
    $urutan = mysqli_real_escape_string($db2,$_POST['urutan2']);


    $stmt1->execute();
    $stmt1->close();
    
    header("location:../links.php");



	



?>