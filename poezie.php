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
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Elena Vlădăreanu</h2> <!-- 2 be modified-->
                                                            <p>Elena Vlădăreanu este scriitoare și jurnalistă. A
                                                                absolvit Facultatea de Litere la Universitatea din
                                                                București, are studii de master la Centrul de Excelență
                                                                în Studiul Imaginii (CESI) și în prezent lucrează la o
                                                                cercetare doctorală, tot la CESI, despre biografii și
                                                                autobiografii în teatru. Este realizatoarea emisiunii
                                                                Scena și ecranul la Radio România Cultural, unde
                                                                vorbește despre filme. În decembrie 2018 a inițiat
                                                                proiectul Zilele „Sofia Nădejde“, sub egida căruia s-a
                                                                desfășurat, în ultimii trei ani, Gala Premiilor „Sofia
                                                                Nădejde“ pentru Literatură Scrisă de Femei.</p>
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
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Svetlana Cârstean</h2>
                                                            <!-- 2 be modified-->
                                                            <p>Svetlana Cârstean este poetă și traducătoare. A debutat
                                                                în 1994, în cadrul volumului colectiv Tablou de familie,
                                                                alături de T.O. Bobe, Răzvan Rădulescu, Mihai Ignat,
                                                                Sorin Gherguț și Cezar Paul-Bădescu. Volumul de debut
                                                                individual, Floarea de menghină, a apărut în 2008, iar
                                                                în 2013 a fost publicat în Suedia la Editura Rámus, în
                                                                traducerea poetei suedeze Athena Farrokhzad. Poemele
                                                                sale au fost traduse în numeroase limbi. A lansat în
                                                                2015 volumul Gravitație, la Editura Trei. În aprilie
                                                                2016, volumul Trado, scris împreună cu Athena
                                                                Farrokhzad, a fost lansat în Suedia, de Editura Albert
                                                                Bonnier în colaborare cu Editura Rámus.</p>
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
                                                        <img src="elenazah.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Elena Zah</h2> <!-- 2 be modified-->
                                                            <p>Bună, salutare și heilo! Mă numesc Elena și sunt studentă
                                                                la automatică în Cluj. Stați, stați, mai e ceva de spus
                                                                despre mine. De fapt, e mereu ceva de spus în plus
                                                                despre oricine. Mie îmi plac oamenii. Mult de tot. Ador
                                                                să-i aud și să înțeleg poveștile lor și ghiciți ce, îmi
                                                                mai place și să scriu. Așa că am combinat cele două
                                                                obsesii ale mele și am încercat să fac realitatea la fel
                                                                de interesantă ca în seriale. Jurnalismul le-a combinat
                                                                cel mai bine și în cadrul revistei dedicate tinerilor,
                                                                “Gen, revistă”, am reușit să îmi onorez visul. Așa că,
                                                                pentru oricine e curios și îi pasă de ce se întâmplă în
                                                                jurul nostru și în noi, eu nu pot face nimic altceva
                                                                decât să fiu teribil de entuziasmată să împărtășesc din
                                                                visul meu devenit realitate.</p>
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
                                                        <img src="lenachilari.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Lena Chilari</h2> <!-- 2 be modified-->
                                                            <p> Sunt Lena Chilari, am 26 de ani și scriu poezie. Sunt
                                                                din satul Pepeni, raionul Sîngerei, Republica Moldova,
                                                                iar acum locuiesc la Cluj. Am publicat în Steaua, Vatra,
                                                                Echinox, Timpul, Apostrof și pe O mie de semne. Primul
                                                                meu volum se numește O cană de noviciok la bătrânețe și
                                                                este publicat la editura Tracus Arte, în 2020. Te aștept
                                                                la atelier să facem poezie și s-o citim cu voce
                                                                tare.</p>
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
                                                        <img src="teonaFarmatu.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Teona Farmatu</h2> <!-- 2 be modified-->
                                                            <p> Teona Farmatu (n. 30.07.1999, Piatra-Neamț) este
                                                                masterandă în anul I la secția Studii literare românești
                                                                din cadrul Facultății de Litere, UBB. Scrie poezie și
                                                                cronică literară. A publicat texte în câteva reviste din
                                                                țară: Vatra, Echinox, Metacritic Journal for Comparative
                                                                Studies and Theory, Transilvania, Apostrof, Steaua,
                                                                Dacoromania litteraria, precum și pe blogul DLITE. A
                                                                citit poezie la Institutul Blecher și la Nepotu’ lui
                                                                Thoreau. În prezent, este redactor al revistei Echinox
                                                                și se dedică cercetării literare.</p>
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
                                                        <img src="claudiuIoanMaftei.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Claudiu Ioan Maftei</h2>
                                                            <!-- 2 be modified-->
                                                            <p> Claudiu Ioan Maftei este student la masterul de
                                                                Lingvistică Computațională din Iași. A participat la
                                                                lecturi publice și de performance incluzând Maratonul de
                                                                poezie FILIT și Cozy Poetry Night. A publicat poezii in
                                                                revista Steaua. A fost colaborator la volumul Un om mai
                                                                important decât oamenii (Lucian Brad, OMG, 2020).</p>
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
                                                        <img src="florentinPopa.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Florentin Popa</h2> <!-- 2 be modified-->
                                                            <p> Florentin Popa (n. 1989) face parte din redacția Mafia
                                                                Sonetelor, o revistă independentă poeziei formale. Și-a
                                                                făcut debutul prin lucrarea „Trips, heroes & lovesongs”,
                                                                care a ajuns pe piață în 2014 și căreia i-a urmat
                                                                „Efrafa”. „Florentin Popa a apărut în poezia română ca
                                                                un OZN. A bombardat psihotronic, a plasat cipuri, a
                                                                modificat ADN-ul și subrutinele. Acum este deja un
                                                                clasic. Dar un clasic full de scheme de atac pe care
                                                                оncă nu le-a identificat nimeni.” - Mihai Iovănel</p>
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
                                                        <img src="andreiDobos.jpeg" alt="blog">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                                    <div class="skill-box-two">
                                                        <div class="main-title mb-5 text-lg-left wow fadeIn"
                                                             data-wow-delay="300ms">
                                                            <h5></h5> <!-- 2 be modified-->
                                                            <h2 class="ml-0">Andrei Doboş</h2> <!-- 2 be modified-->
                                                            <p> Andrei Doboş s-a născut la 6 august 1984, în Turda. Este absolvent al Facultăţii de Litere a Universităţii „Babeş-Bolyai” din Cluj-Napoca, iar în prezent urmează studii doctorale la aceeaşi universitate.  În perioada facultăţii a fost redactor la revista Echinox, apoi, între 2009 şi 2014, redactor la Editura Casa Cărţii de Ştiinţă din Cluj-Napoca. A publicat poeme şi articole în revistele România literară, Tribuna, Vatra, Echinox, Steaua etc.  A debutat editorial cu mănăştur story, Editura Vinea, 2007 (Premiul „Iustin Panţa”, 2008, şi nominalizare la Premiul pentru debut al Uniunii Scriitorilor din România, 2008). În 2011 a publicat volumul de versuri Inevitabil (Editura Casa de Pariuri Literare). În 2015 a publicat la Cartea Românească volumul Valea rea.</p>
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


