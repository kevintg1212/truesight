<?php 
include 'conn.php';
session_start();
    

$target_dir = "../../img/banner_promo/";
$target_file = $target_dir . basename($_FILES["lampiran"]["name"]);
$name_image1 = basename($_FILES["lampiran"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

$check = getimagesize($_FILES["lampiran"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["lampiran"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["lampiran"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

    $stmt1 = $db2->prepare("INSERT INTO `bannerPromo` (harga, gambar, judul, tanggal_berlaku, status_banner)
                            VALUES(?, ?, ?, ?, ?)");
    $stmt1->bind_param("sssss", $harga, $name_image1, $judul, $tanggal_berlaku, $status_banner);
    
    $harga = mysqli_real_escape_string($db2,$_POST['harga']);
    $judul = mysqli_real_escape_string($db2,$_POST['judul']);
    $tanggal_berlaku = mysqli_real_escape_string($db2,$_POST['tanggal_berlaku']);
    $status_banner = mysqli_real_escape_string($db2,$_POST['status_banner']);

    $b = str_replace( ',', '', $harga );

    if( is_numeric( $b ) ) {
        $harga = $b;
    }

    echo '<br> harga: '.$harga ;
    echo '<br> judul: '.$judul ;
    echo '<br> tanggal_berlaku: '.$tanggal_berlaku ;
    echo '<br> status_banner: '.$status_banner ;
    echo '<br> name_image1: '.$name_image1 ;

    $stmt1->execute();
    $stmt1->close();
    
    header("location:../banner_promo.php");

?>