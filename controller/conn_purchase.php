<?php
include 'conn.php';

$id_produk = $_GET['id_produk'];
 
$varian = mysqli_query($db2,"select * from `varian` where id_produk = '$id_produk'");
$rowcount=mysqli_num_rows($varian);
$result_head = mysqli_query($db2,"select * from `produk` where id_produk = '$id_produk'");
while($d_head = mysqli_fetch_array($result_head)){
$nama = $d_head['nama'];
$deskripsi = $d_head['deskripsi'];
$discount = $d_head['discount'];
$harga = $d_head['harga'];
$gambar = $d_head['gambar'];
$tags = $d_head['tags'];
$view = $d_head['view'];
$harga_diskon = 0;

if($discount != 0) {
    $harga_diskon = $harga - ($harga * $d_head['discount'] / 100);
};

$deskripsi_singkat = $d_head['deskripsi_singkat'];
}

$contact = mysqli_query($db2,"select * from `contact_us`");
while($d_head = mysqli_fetch_array($contact)){
    $phone = $d_head['phone'];
    $x = explode(" ", $phone);
    $phone_number = str_replace("-", "", $x[1]); }

?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $nama; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/icon.png">



	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122244079-2">
	</script>
	
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122244079-2');
	</script>
	
		<script>
    gtag('event', 'conversion', {
    "value": <?php echo $harga; ?>,
    "currency": "IDR",
    "items": [
    {
      "item_id": "<?php echo $id_produk; ?>",
      "item_name": "<?php echo $nama; ?>",
      "item_brand": "Truesight",
      "quantity": 1,
	  "currency": "IDR",
      "price": <?php echo $harga; ?>,
	  "discount": <?php echo $discount; ?>
    }
    ]
    });
    </script>
	
	<script>
	gtag("event", "add_to_cart", {
  "value": <?php echo $harga; ?>,
    "currency": "IDR",
    "items": [
    {
      "item_id": "<?php echo $id_produk; ?>",
      "item_name": "<?php echo $nama; ?>",
      "item_brand": "Truesight",
      "quantity": 1,
	  "currency": "IDR",
      "price": <?php echo $harga; ?>,
	  "discount": <?php echo $discount; ?>
    }
    ]
    });
	</script>
		

	
	<script>
	gtag("event", "begin_checkout", {
  "value": <?php echo $harga; ?>,
    "currency": "IDR",
    "items": [
    {
      "item_id": "<?php echo $id_produk; ?>",
      "item_name": "<?php echo $nama; ?>",
      "item_brand": "Truesight",
      "quantity": 1,
	  "currency": "IDR",
      "price": <?php echo $harga; ?>,
	  "discount": <?php echo $discount; ?>
    }
    ]
    });
	</script>
	
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-122244079-2');
	gtag('event', 'purchase', 
	{
	"transaction_id":"<?php echo $id_produk; ?>",
	"affiliation":"<?php echo $nama; ?>",
	"value":"<?php echo $harga; ?>",
	"currency":"IDR",
	"tax":0,
	"shipping":"0.0000",
	"items":[{
		"id":"<?php echo $id_produk; ?>",
		"name":"<?php echo $nama; ?>",
		"list_name":"<?php echo $nama; ?>",
		"brand":"","category":"",
		"variant":"",
		"list_position":1,
		"quantity":"1",
		"price":"<?php echo $harga; ?>"}]
		});
    </script>

	<script>
	window.location.replace("https://api.whatsapp.com/send?phone=62<?php echo $phone_number ?>&text=Hallo%20True%20Sight.%20Saya%20mau%20beli%20kacamata%20<?php echo $nama; ?>%20direspond%20cepat%20yah.");
	</script>
	</head>


<body>
      "item_id": "<?php echo $id_produk; ?>",
      "item_name": "<?php echo $nama; ?>",
      "item_brand": "Truesight",
      "quantity": 1,
	  "currency": "IDR",
      "price": <?php echo $harga; ?>,
	  "discount": <?php echo $discount; ?>
   
</body>

</html>