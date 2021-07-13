<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
<style>
        .join-us-navbar{
            color: #d0920e;
            font-weight: 800;
            border: 2px solid #d0920e;
            padding: 15px !important;
            border-radius: 50px;
        }
        .join-us-navbar:hover{
            color: white;
            background-color: #d0920e;
            transition: 300ms;
        }

        .nav-link:hover{
            color:#d0920e !important;
            transition: 300ms;
        }
    </style>

    <!-- Loader -->
    <?php include 'loader.php' ?>
    <!-- Loader ends -->

    <?php include 'header.php';
        $header = new Header();
        $header->getHeader2();
    ?>

    <!-- Page Header -->
   
    <!-- Page Header -->

   <!-- Team start -->
<?php include 'team.php' ?>
<!-- Team ends -->

    <?php include 'footer.php' ?>


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

<!-- Custom JS File -->
<script src="js/functions.js"></script>
</body>
</html>


