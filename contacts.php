<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>::Contact us - Ultimate Survival Campsite ::</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.921212, 91.833073),
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>

    <body>

        <div id="contact-page">

 
            <!-- site-navigation start -->  
            <?php include 'header.php'
            ?>


            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <div claas="main-content">
                <div class="container">

                    <!-- google map iframe -->
                    <section class="g-map">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="google-map">
                                    <div id="map-canvas"></div>
                                </div>
                            </div>
                        </div>
                    </section> <!-- /.g-map (google-map end) -->



                    <!-- contact adresses section begin -->
                    <section class="contact-address bg-white">
                        <div class="row">

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-map-marker"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Office Address</h3>
                                            <h4>
                                                Village Dohg<br>(Jajwar)
PO Lower Ghallous<br>
Tehsil - Jwala Mukhi<br>
District - Kangra
 <br/>
                                                HImachal Pradesh<br>
Pin - 176031
                                            </h4>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-phone"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Phone Number</h3>
                                            <h3>
                                                +919871824593
                                                <br/>
                                             
                                            </h3>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-envelope-o"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Email Address</h3>
                                            <h5>
                                                rsharma1944@rediffmail.com
                                                <br/>
                                                
                                            </h5>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                        </div>
                    </section> <!-- /.contact-address -->



                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Say Hello! Don't be shy</h2>
                                    <p class="section-sub-title">
                                        If you have any questions or comments, or would just like to say hello, 
                                        <br/>please feel free to contact our friendly team
                                    </p> <!-- /section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->

                        <form method="post" action="contact.php">

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <input name="website" type="url" class="form-control" id="subject" required="required" placeholder="Your Website">
                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                </div>
                            </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-black">send message</button>
                            
                        </form> <!-- form end -->
                    </section> <!-- /.contact-form -->

                </div> <!-- container -->
            </div>
            <!-- main-content end -->

<?php include 'footer.php'
            ?>
        </div> <!-- /#contact-page (page end) -->


    </body>
</html>