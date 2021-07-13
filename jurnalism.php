<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Loader -->
<?php include 'loader.php' ?>
<!-- Loader ends -->

<?php include 'header.php';
$header = new Header();
$header->getHeader2();
?>

<!-- Blog starts -->
<section class="bg-light-gray text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog List Inner -->
                <div class="blog-listing-inner heading-space">
                    <div class="image hover-effect">
                        <img src="images/jurnalism-blog.jpeg" alt="blog-img">
                    </div>
                </div>
            </div>

            <!-- Blog Left Listing -->
            <div style="width: 100%">
                <div class=" heading-space m-md-0">
                    <!-- Blog List Inner -->
                    <div class="blog-listing-inner news_item largerIndexBlogContainer">
                        <div class="news_desc indexDescription">
                            <h1>
                                Jurnalism
                            </h1>

                            <div>
                                <p>
                                    Poate tu ești genul care observă cum se întâmplă lucrurile în jurul tău, îți e ușor să le pui oamenilor întrebări și să scrii din perspective diferite. Cea mai potrivită pentru tine pare secțiunea de jurnalism.

                                </p>
                            </div>

                            <?php include 'join-us-button.php' ?>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Widgets -->
            <div class="col-lg-4 col-md-5">
                <div class="text-left">
                    <!-- Search Box -->

                    <!-- Recent Post -->

                    <!-- Categories -->

                    <!-- Tags -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog ends -->

<!-- Footer starts -->
<?php include 'footer.php' ?>
<!-- Footer ends -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS File -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Morphtext JS File -->
<script src="js/morphext.min.js"></script>
<!-- Flip JS File -->
<script src="js/jquery.flip.min.js"></script>
<!-- Appear JS File -->
<script src="js/jquery.appear.js"></script>
<!-- Megamenu Js File -->
<script src="js/megamenu.js"></script>
<!-- Isotop gallery -->
<script src="js/isotope.pkgd.min.js"></script>
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

<!-- Custom JS File -->
<script src="js/functions.js"></script>
</body>
</html>


