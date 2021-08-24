<!doctype html>
<html class="no-js" lang="zxx">

<?php 
include 'controller/conn.php';

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
	

$no = 1;
$contact = mysqli_query($db2,"select * from `contact_us`");
while($d_head = mysqli_fetch_array($contact)){
    $phone = $d_head['phone'];
    $x = explode(" ", $phone);
    $phone_number = str_replace("-", "", $x[1]); }
}
	
$tagsX = explode(";", $tags);
	
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<!-- Start section HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $nama; ?> | Kacamata Profesional</title>
	<meta name="description" content="Layanan kacamata profesional | Lensa kacamata, frame kacamata, dan konsultasi gratis kacamata yang cocok untuk wajah kamu.">
	<Meta name='keywords' content='kacamata, kacamata photocromic, kacamata anti radiasi, kacamata hitam, lensa kacamata, frame kacamata, kacamata rekomendasi, kacata yang cocok untuk wajah' />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/icon.png">

	<!-- Plugins -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">

	<!-- Style Css -->
	<link rel="stylesheet" href="style.css">

	<!-- Custom Styles -->
	<link rel="stylesheet" href="css/custom.css">

	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
      <style>
      .crt-widget-grid .crt-grid-col1 .crt-grid-post{
          max-width: 50% !important;
      }
      </style>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '5676152455791140');
	fbq('track', 'ViewContent');
    fbq('track', 'PageView');
	</script>

	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=5676152455791140&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-M9L45CVHLD"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-M9L45CVHLD');
	</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122244079-2">
	</script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122244079-2');
	</script>
		<script>
	gtag("event", "view_item", {
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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NSN5RNH');</script>
	<!-- End Google Tag Manager -->
	
</head>
<!-- End section HEAD -->

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSN5RNH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php include "./view/header.php" ?>
        <!-- End Header Area -->

        <!-- Start Bradcaump area bg_image--4 -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Single Product</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Single Product</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        
        <!-- Start Single Product -->
        <div class="gm_single_product pt--100 pb--100 bg--white">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="product__details__container">
                            <div class="tab_container big_img_container" style="<?php echo $rowcount>2 ? 'justify-content: space-between !important;' : 'justify-content: flex-start !important;' ?> ">
                                <div class="big_img tab-pane fade show active" id="img1" role="tabpanel">
                                    <img src="img/gambarUtama/<?php echo $gambar ?>" alt="gomes restaurant">
                                </div>
                                <?php 
                                $i = 2;
                                $result_head = mysqli_query($db2,"select * from `varian` where id_produk = '$id_produk'");
                                while($d_head = mysqli_fetch_array($result_head)){
                                ?>
                                <div class="big_img tab-pane fade" id="img<?php echo $i; ?>" role="tabpanel">
                                    <img src="img/varian/<?php echo $d_head['gambar'] ?>" alt="gomes restaurant">
                                </div>
                                <?php $i++; } ?>
                                <!-- <div class="big_img tab-pane fade" id="img3" role="tabpanel">
                                    <img src="img/product/big-img-3.png" alt="gomes restaurant">
                                </div>
                                <div class="big_img tab-pane fade" id="img4" role="tabpanel">
                                    <img src="img/product/big-img.png" alt="gomes restaurant">
                                </div>
                                <div class="big_img tab-pane fade" id="img5" role="tabpanel">
                                    <img src="img/product/big-img-2.png" alt="gomes restaurant">
                                </div> -->
                            </div>
                            <div class="sm_roduct_nav nav nav-tabs" role="tablist">
                                <a class="active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-controls="img1" aria-selected="true">
                                    <img src="img/gambarUtama/<?php echo $gambar ?>" alt="gomes restaurant">
                                </a>
                                <?php 
                                $i = 2;
                                $result_head = mysqli_query($db2,"select * from `varian` where id_produk = '$id_produk'");
                                while($d_head = mysqli_fetch_array($result_head)){
                                ?>
                                <a id="nav-img<?php echo $i; ?>-tab" data-toggle="tab" href="#img<?php echo $i; ?>" role="tab" aria-controls="img<?php echo $i; ?>" aria-selected="false">
                                    <img src="img/varian/<?php echo $d_head['gambar']; ?>" alt="gomes restaurant">
                                </a>
                                <?php $i++; } ?>
                                <!-- <a id="nav-img3-tab" data-toggle="tab" href="#img3" role="tab" aria-controls="img3" aria-selected="false">
                                    <img src="img/product/sm3.png" alt="gomes restaurant">
                                </a>
                                <a id="nav-img4-tab" data-toggle="tab" href="#img4" role="tab" aria-controls="img4" aria-selected="false">
                                    <img src="img/product/sm1.png" alt="gomes restaurant">
                                </a>
                                <a id="nav-img5-tab" data-toggle="tab" href="#img5" role="tab" aria-controls="img5" aria-selected="false">
                                    <img src="img/product/sm2.png" alt="gomes restaurant">
                                </a> -->
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="single_product_inner">
                            <h4> <?php echo $nama; ?> </h4>

                            <div class="price">
                                <?php 
                                    if($harga_diskon != 0) {
                                        echo '<span class="old">Rp'. number_format($harga,2,',','.') .'</br></span>';
                                        echo '<span class="new">Rp'. number_format($harga_diskon,2,',','.') .'</span>';
                                    } else {
                                        echo '<span class="new">Rp'. number_format($harga,2,',','.') .'</span>';
                                    };
                                ?>
                                <!-- <span class="new">Rp
                                <?php echo number_format($harga,2,',','.'); ?>
                                </span> -->
                                <!-- <span class="old">$31</span> -->
                            </div>

                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="off">
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>

                            <div class="pro_dtl">
                                <p><?php echo $deskripsi_singkat; ?></p>
                            </div>
                            
                            <div class="product_cart_action">
                                <div class="add_to_cart">
                                    <ul class="cart_list">
                                        <li class="shopping_basket">
                                            <a target="_blank" href="controller/conn_purchase.php?id_produk=<?php echo $id_produk; ?>">
                                                <i class="fab fa-whatsapp"></i> Buy now</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_share">
									<li>
                                        <?php
                                        echo '<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$actual_link.'&layout=button&size=large&width=91&height=28&appId" width="91" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>';
                                         ?>
                                    </li>
                                    <li>
                                        <a class="instagram" href="https://www.instagram.com/truesight_eyewear/">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product_review">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="description_nav nav nav-tabs d-block" role="tablist">
                                <a class="active" id="descrip-tab" data-toggle="tab" href="#descrip" role="tab" aria-controls="descrip" aria-selected="true">Product Description</a>
                                <!-- <a id="nav-review" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a> -->
                                <a id="nav-product-tag" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Product Tags</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab_container">
                        <div class="single_review_content tab-pane fade show active" id="descrip" role="tabpanel">
                            <div class="content">
                                <?php echo $deskripsi; ?>
                            </div>
                        </div>
                        <!-- <div class="single_review_content tab-pane fade" id="review" role="tabpanel">
                            <div class="classs__review__inner">
                                <h4>Add A review</h4>
                                <p>Your E-mail Address Will not be published. Required field are marked *</p>
                                <span>Your rating</span>
                                <ul class="rating">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <form action="#">
                                    <div class="input__box">
                                        <span>Your Review *</span>
                                        <textarea name="message"></textarea>
                                    </div>
                                    <div class="input__box">
                                        <span>Name*</span>
                                        <input type="text">
                                    </div>
                                    <div class="input__box">
                                        <span>E-mail*</span>
                                        <input type="email">
                                    </div>
                                    <div class="submit__btn">
                                        <a href="#">Submit Now</a>
                                    </div>
                                </form>
                            </div>
                        </div> -->
                        <div class="single_review_content tab-pane fade" id="product" role="tabpanel">
                            <div class="content">
                                <p>
                                    <?php
                                    $i = 0;
                                    foreach($tagsX as $row) {
                                        echo $row." ";
                                    }; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product -->

        <!-- Start Footer Area -->
        <?php 
		include 'view/footer.php';
		?>
        <!-- End Footer Area -->
    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>