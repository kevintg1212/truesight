<!doctype html>
<html class="no-js" lang="zxx">
<?php 

include 'controller/conn.php';

$id_artikel = $_GET['id_artikel'];

$result_head = mysqli_query($db2,"select * from `artikel` where id_article= '$id_artikel' ");
while($d_head = mysqli_fetch_array($result_head)){
   $judul = $d_head['judul'];
   $thumbnail = $d_head['thumbnail'];
   $deskripsi = $d_head['deskripsi'];
   $tags = $d_head['tags'];
   $tanggal_posting = $d_head['tanggal_posting'];
   $view = $d_head['view'];
};

$tagsX = explode(", ","$tags");

?>
<!-- Start section HEAD -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Look the right way.</title>
	<meta name="description" content="">
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
	
</head>
<!-- End section HEAD -->

<body>


    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php 
            include 'view/header.php';
        ?>
        <!-- End Header Area -->

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg_image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Artikel</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Artikel Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <div class="blog_area section-ptb-xl bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog_details">
                            <div class="blog_inner">

                                <div class="blog__content">
                                    <ul class="meta">
                                        <li><?php if ($view == null) { echo '0'; } else echo $view ?> Views</li>
                                        <li><?php echo date_format(date_create($tanggal_posting),"d M, Y"); ?></li>
                                    </ul>
                                    <h3><?php echo $judul;?></h3>
                                </div>

                                <div class="thumb">
                                    <img src="img/thumbnail/<?php echo $thumbnail?>" alt="blog img">
                                </div>


                                <div class="bl_details">
                                    <?php echo $deskripsi; ?>
                                </div>

                                <div class="blog_share">
                                    <p>Share</p>

                                    <ul class="user_share">
                                        <li><a target="_blank" href="https://www.facebook.com/"><span class="ti-facebook"></span></a></li>
                                        <li><a target="_blank" href="https://twitter.com/home"><span class="ti-twitter"></span></a></li>
                                        <li><a target="_blank" href="https://id.pinterest.com/"><span class="ti-pinterest"></span></a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/feed/"><span class="ti-linkedin"></span></a></li>
                                    </ul>

                                </div>

                                <!-- <div class="blog_pagenation">
                                    <a href="#"><i class="fa fa-angle-left"></i> prev post</a>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 sm-mt--30 md-mt--30">
                    <div class="shop_sidebar">


                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget recent_post mb--60">
                                <h2 class="sidebar_title">Recent Posts</h2>
                                <ul class="sidebar_post">
                                <?php 
                                    $result_head = mysqli_query($db2,"select * from `artikel` order by tanggal_posting desc limit 3");
                                    while($d_head = mysqli_fetch_array($result_head)){
                                ?>
                                    <li>
                                        <div class="post_img" style="width: 120px;">
                                            <a href="controller/conn_add_view.php?id_article=<?php echo $d_head['id_article'];?>&view=<?php echo $d_head['view'];?>">
                                                <img src="img/thumbnail/<?php echo $d_head['thumbnail']; ?>" alt="post img">
                                            </a>
                                        </div>
                                        <div class="post_text">
                                            <h4>
                                                <a href="blog-detals.html"><?php echo $d_head['judul']; ?></a>
                                            </h4>
                                            <span><?php echo date_format(date_create($d_head['tanggal_posting']),"d M, Y"); ?></span>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                            <!-- End Single Wedget -->


                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_categories mb--60">
                                <h2 class="sidebar_title">Feed Instagram</h2>
                                <div class="sidebar_categories row">
                                    <!-- Place <div> tag where you want the feed to appear -->
                                    <div id="curator-feed-default-feed-layout" class="col-12"></div>
                                    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                                    <script type="text/javascript">
                                    /* curator-feed-default-feed-layout */
                                    (function(){
                                    var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                                    i.src = "https://cdn.curator.io/published/a6bc62a7-5890-43db-97e3-08f462534b46.js";
                                    e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                                    })();
                                    </script>
                                </div>
                            </div>
                            <!-- End Single Wedget -->



                            <!-- Start Single Wedget -->
                            <div class="sidebar_widget widget_tag">
                                <h2 class="sidebar_title">Tags</h2>
                                <ul class="sidebar_tag">
                                    <li>
                                        <a>Kacamata</a>
                                    </li>
                                    <li>
                                        <a>Photochromic</a>
                                    </li>
                                    <li>
                                        <a>kacamatamurah</a>
                                    </li>
                                    <li>
                                        <a>kacamatatrend</a>
                                    </li>
                                    <li>
                                        <a>kacamataminus</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Wedget -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Area -->
        <?php 
		include 'view/footer.php';
		?>
        <!-- End Footer Area -->
    </div>
    <!--// Wrapper -->

    <script>

        function changeSearch() {
            var checkBox = document.getElementById("search").value;

            window.location.replace("blog-three-column.php?search=" + checkBox);

        };
        
    </script>
    <!-- Js Files -->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>