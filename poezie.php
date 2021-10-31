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
                        <img src="images/poezie-blog.jpeg" alt="blog-img">
                    </div>
                </div>
            </div>

            <!-- Blog Left Listing -->
            <div style="width: 100%">
                <div class="heading-space m-md-0">
                    <!-- Blog List Inner -->
                    <div class="largerIndexBlogContainer blog-listing-inner news_item">
                        <div class="news_desc indexDescription">
                            <h1>
                                Poezie
                            </h1>

                            <div>
                                <p>
                                    Ideile tale se leagă într-un mod pe care nici tu nu-l bănuiai, se așază ca pisicile
                                    lângă tine și nu mai vor să plece, poate te-ai prins că scrii poezie, poate e doar o
                                    listă de substantive, dar eu zic să te înscrii la secțiunea poezie și să vezi ce
                                    iese după ce te întâlnești cu mentorii.
                                </p>
                            </div>

                            <?php include 'join-us-button.php' ?>


                            <section id="team">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-title wow fadeIn" data-wow-delay="300ms">
                                                <h3 style="color:#d0920e; font-weight: 700">Invitați:</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-md-12 col-sm-12 md-mb-5">
                                                    <div class="image hover-effect team-single-img ml-lg-0">
                                                        <!-- 2 be modified-->
                                                        <img src="elenavladareanu.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Elena Vlădăreanu</h2> <!-- 2 be modified-->
                                                            <p>Elena Vlădăreanu este scriitoare și jurnalistă. A absolvit Facultatea de Litere la Universitatea din București, are studii de master la Centrul de Excelență în Studiul Imaginii (CESI) și în prezent lucrează la o cercetare doctorală, tot la CESI, despre biografii și autobiografii în teatru.  Este realizatoarea emisiunii Scena și ecranul la Radio România Cultural, unde vorbește despre filme. În decembrie 2018 a inițiat proiectul Zilele „Sofia Nădejde“, sub egida căruia s-a desfășurat, în ultimii trei ani, Gala Premiilor „Sofia Nădejde“ pentru Literatură Scrisă de Femei.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br><br>
                                    <div class="item">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-md-12 col-sm-12 md-mb-5">
                                                    <div class="image hover-effect team-single-img ml-lg-0">
                                                        <!-- 2 be modified-->
                                                        <img src="svetlanacarstean.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Svetlana Cârstean</h2> <!-- 2 be modified-->
                                                            <p>Svetlana Cârstean este poetă și traducătoare. A debutat în 1994, în cadrul volumului colectiv Tablou de familie, alături de T.O. Bobe, Răzvan Rădulescu, Mihai Ignat, Sorin Gherguț și Cezar Paul-Bădescu. Volumul de debut individual, Floarea de menghină, a apărut în 2008, iar în 2013 a fost publicat în Suedia la Editura Rámus, în traducerea poetei suedeze Athena Farrokhzad. Poemele sale au fost traduse în numeroase limbi. A lansat în 2015 volumul Gravitație, la Editura Trei. În aprilie 2016, volumul Trado, scris împreună cu Athena Farrokhzad, a fost lansat în Suedia, de Editura Albert Bonnier în colaborare cu Editura Rámus.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </section>

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


