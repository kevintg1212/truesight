<!doctype html>
<html class="no-js" lang="zxx">

<?php 
include 'controller/conn.php';
 
$result_head = mysqli_query($db2,"select * from `contact_us`");
while($d_head = mysqli_fetch_array($result_head)){
$address = $d_head['address'];
$phone = $d_head['phone'];
$email = $d_head['email'];
$address_google = $d_head['address_google'];
}
?>

<?php include "./view/head.html" ?>

<body>

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php include "./view/header.php" ?>
        <!-- End Header Area -->

        <!-- Start Bradcaump area -->
        <div class="bradcaump_area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump_inner text-center">
                            <h2 class="bradcaump-title">Contact Us</h2>
                            <nav class="bradcaump-content">
                                <a class="bradcrumb_item" href="index.html">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

        <!-- Start Contact Area -->
        <div class="contact_area section-ptb-xl">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="gogle_map">
                            <div id="googleMap">

                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row pt--120">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="contact_adress">
                            <div class="ct_address">
                                <h3 class="ct_title">Location & Details</h3>
                                <p>---------------------------------------------</p>
                            </div>

                            <div class="address_wrapper">

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Address:</span>  <?php echo $address; ?> </p>
                                        <p><span>Click me:</span>  <a href="<?php echo $address_google; ?>"> <?php echo $address_google; ?> </a> </p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Email: </span> <?php echo $email; ?> </p>
                                    </div>
                                </div>

                                <div class="address">
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="contact-info-text">
                                        <p><span>Phone:</span> (+62) <?php echo $phone; ?> </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-12 sm-mt--30">

                        <div class="contact_form">
                            <h3 class="ct_title">Send Us a Message</h3>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="name" placeholder="your name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="email" name="email" placeholder="your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="text" name="subject" placeholder="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input_box">
                                            <input type="tel" name="phone" placeholder="phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input_box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" disabled>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->

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
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(-6.957567, 107.5562469), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-6.957567, 107.5562469),
                map: map,
                title: 'googlemap!',
                animation: google.maps.Animation.BOUNCE

            });
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>