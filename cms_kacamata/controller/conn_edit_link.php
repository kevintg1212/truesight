<?php 
include 'conn.php';
session_start();




    $stmt1 = $db2->prepare("UPDATE `links` set judul = ?, link=? where id_links = ?");
    $stmt1->bind_param("sss", $judul, $textLink, $idLink);
    
    $judul = mysqli_real_escape_string($db2,$_POST['inputJudul1']);
    $textLink = mysqli_real_escape_string($db2,$_POST['textLink1']);
    $idLink = mysqli_real_escape_string($db2,$_POST['id_link1']);

    $stmt1->execute();
    $stmt1->close();

    header("location:../links.php");

?>