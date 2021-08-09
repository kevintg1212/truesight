<?php 
include 'conn.php';

$id_links = $_GET['id_links'];

$contact = mysqli_query($db2,"select * from `links` where id_links = $id_links");
    while($d_head = mysqli_fetch_array($contact)){
    $total_click = $d_head['click'];
    $link = $d_head['link'];
}
    $stmt1 = $db2->prepare("UPDATE `links` set `click`=? where `id_links` = ?");
    $stmt1->bind_param("ss", $total_click, $id_links);
    
    $total_click = $total_click+1;


    $stmt1->execute();
    printf("Error: %s.\n", $stmt1->error);
    $stmt1->close();
    
    header("location:$link");

    



?>