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

    <!-- Header start -->
    <header class="multipage">
        <nav style="background-color: black" class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg fixed-black-nav center-logo">
            <div class="container">
                <a style="" href="javascript:void(0)">
                    <img src="images/logo-white.png" alt="logo" title="Logo">
                </a>
                <div id="menu" class="collapse navbar-collapse d-none d-lg-block mod-menu">
                    <ul class="nav navbar-nav">
                        </ul>
                    <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mega-menu active"> <a href="javascript:void(0)" class="nav-link link">Echipa </a></li>
                        <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Invitati </a></li>
                        <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Blog</a></li>
                        <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Contact </a></li>
                        <li class="nav-item mega-menu active"> <a href="javascript:void(0)" class="nav-link link"><span class="join-us-navbar">Alatura-te</span></a> </li>                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header end -->

    <!-- Page Header -->
   
    <!-- Page Header -->

    <!-- Team start -->
    <?php include 'team.php'?>
    <!-- Team ends -->

<!-- Footer starts -->
<footer class="p-half bg-black2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="footer-icons mb-4">
                    <li><a href="javascript:void(0)" class="wow fadeInUp facebook"><i class="ti ti-facebook"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown twitter"><i class="ti ti-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="wow fadeInUp google"><i class="ti ti-google"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown linkedin"><i class="ti ti-linkedin"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="wow fadeInUp instagram"><i class="ti ti-instagram"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown pinterest"><i class="ti ti-pinterest"></i> </a> </li>
                </ul>
                <p class="copyrights mt-2 mb-2">© 2020 Wixer. Made with love by <a href="javascript:void(0)">themesindustry</a></p>
            </div>
        </div>
    </div>
</footer>
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

<!-- Custom JS File -->
<script src="js/functions.js"></script>
</body>
</html>


