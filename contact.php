<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Loader -->
    <?php include 'loader.php' ?>
    <!-- Loader ends -->

    <!-- Header start -->
    <?php include 'header.php';
        $header = new Header();
        $header->getHeader2();
    ?>
    <!-- Page Header -->
    <section class="page_header pb-0 w-100">
      <div class="container">
          <div class="row">
              <div class="col-md-12 page-content position-relative">
                  <h2 class="text-white mt-5 mb-2">Contact</h2>
                  <p class="text-white">We offer the most creative web designs.</p>
                  <div class="page_nav bg-white d-inline-block">
                      <span>Te aflii aici:</span> <a href="index.php" class="d-inline-block color-white" style="color: white">Home</a> <span class="color-summer-sky"><i class="ti ti-angle-double-right"></i>Contact</span>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- Page Header -->

    <section id="contact" style="background-color: black !important" class="parallax-setting parallaxie parallax5">
    <div style="background-color: black !important" class="bg-overlay bg-black2 opacity-9"></div>
    <div class="container">
        <div class="row pb-half pb-xs-0">
            <div class="col-lg-6 col-md-12 col-sm-12 mb-5 wow fadeInUp" data-wow-delay="400ms">
                <div class="contact-box-shadow">
                    <div class="text-left sm-text-center w-100">
                        <h2 class="color-black font-weight-normal mb-2rem text-capitalize"> Participa la Vivira
                            Festival!</h2>
                        <p class="contact-para-setting">
                            Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor
                            nunc vitae diam eleifend.
                        </p>
                    </div>
                    <div class="contact-info sm-text-center">
                        <div class="icon-box">
                            <i class="ti ti-mobile color-summer-sky"></i>
                            <p class="color-grey"> 0725920491 </p>
                        </div>
                        <div class="icon-box">
                            <i class="ti ti-email color-yellow"></i>
                            <p><a href="mailto:email@website.com" class="color-grey">viviria.festival@gmail.com</a></p>
                        </div>
                        <div class="icon-box">
                            <i class="ti ti-location-pin color-green"></i>
                            <p class="color-grey"> 201 Oak Street Building 27 Manchester, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 mb-5 col-map wow fadeInUp" data-wow-delay="400ms">
                <div id="google-map" class="bg-light-gray map"></div>
            </div>
        </div>


    </div>

</section>



<!-- Footer starts -->
<?php include 'footer.php' ?>
<!-- Footer ends -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS File -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Appear JS File -->
<script src="js/jquery.appear.js"></script>
    <!-- Megamenu Js File -->
    <script src="js/megamenu.js"></script>
<!-- Isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- Morphtext JS File -->
<script src="js/morphext.min.js"></script>
<!-- Flip JS File -->
<script src="js/jquery.flip.min.js"></script>
<!-- Cube Portfolio JS File -->
<script src="js/jquery.cubeportfolio.min.js"></script>
<!-- Equal Height JS File -->
<script src="js/jquery.matchHeight-min.js"></script>
<!--Parallax Background-->
<script src="js/parallaxie.min.js"></script>
<!-- Fancy Box JS File -->
<script src="js/jquery.fancybox.min.js"></script>
<!-- Swiper JS File -->
<script src="js/swiper.min.js"></script>
<!-- Owl Carousel JS File -->
<script src="js/owl.carousel.js"></script>
<!-- Wow JS File -->
<script src="js/wow.js"></script>
<!-- Headroom Nav File -->
<script src="js/headroom.js"></script>

    <!--Revolution Slider-->
<script src="js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.contdown.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/extensions/revolution.extension.video.min.js"></script>

<!-- Google Map Api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="js/maps.min.js"></script>

<!-- Custom JS File -->
<script src="js/functions.js"></script>
</body>
</html>


