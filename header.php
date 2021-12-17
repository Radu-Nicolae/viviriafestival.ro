<?php

class Header
{

    public function getHeader1()
    {
        echo('<!-- Header start -->
        <style>
            .join-us-navbar {
                color: #d0920e;
                font-weight: 800;
                border: 2px solid #d0920e;
                padding: 15px !important;
                border-radius: 50px;
            }
        
            .join-us-navbar:hover {
                color: white;
                background-color: #d0920e;
                transition: 300ms;
            }
        
            .nav-link:hover {
                color: #d0920e !important;
                transition: 300ms;
            }
        </style>
        
        <header class="multipage">
            <nav class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg bottom-nav box-nav not-full no-animation">
                <div class="container radius nav-box-shadow">
                    <a class="logo link" style="padding-top: 8px !important; padding-left: 20px !important;" href="index.php">
                        <img src="images/logo.png" alt="logo" title="Logo">
                    </a>
                    <div id="menu" class="collapse navbar-collapse d-none d-lg-block mod-menu">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item mega-menu active"><a href="echipa.php" class="nav-link link">Echipă</a>
                            </li>
                            <li class="nav-item mega-menu active"><a href="invitati.php"
                                                                     class="nav-link link">Invitați</a></li>
                            <li class="nav-item mega-menu active"><a href="blog.php" class="nav-link link">Blog </a>
                            </li>
                            <li class="nav-item mega-menu active"><a href="contact.php"
                                                                     class="nav-link link">Contact</a></li>
                            <li class="nav-item mega-menu active"><a href="https://forms.gle/UgCqKNKDCUnoBcRv6" class="nav-link link"><span
                                            class="join-us-navbar">Participă</span></a></li>
                        </ul>
                    </div>
        
                    <!-- side menu open button -->
                    <a class="menu_bars d-inline-block menu-bars-setting menu-inner" id="sidemenu_toggle">
                        <div class="menu-lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </nav>
        
            <!-- Side Menu -->
            <div class="side-menu d-none">
                <div class="inner-wrapper nav-icon">
                    <span class="btn-close link" id="btn_sideNavClose"></span>
                    <nav class="side-nav w-100">
                        <div class="position-relative">
                            <!-- Main Menu -->
                            <div class="navbar-nav side-main-menu">
                                <a class="nav-link link" href="echipa.php">Echipă</a>
                                <a class="nav-link link" href="invitati.php">Invitați</a>
                                <a class="nav-link link" href="blog.php">Blog</a>
                                <a class="nav-link link" href="contact.php">Contact</a>
                                <a class="nav-link link" href="https://forms.gle/UgCqKNKDCUnoBcRv6">Participă</a>
        
        
                                <a class="menu-line"><i class="ti ti-angle-right" aria-hidden="true"></i></a>
                            </div>
        
                        </div>
                    </nav>
                    <div class="side-footer text-white w-100">
                        <ul class="social-icons-simple">
                            <li class="side-menu-icons"><a href="javascript:void(0)"><i class="ti ti-facebook color-white"></i>
                                </a></li>
                            <li><a href="geo:44.472333, 26.076362" target="_blank" class="wow fadeInUp google"><i class="ti ti-map"></i> </a></li>
                            <li class="side-menu-icons"><a href="javascript:void(0)"><i class="ti ti-instagram color-white"></i>
                                </a></li>
                        </ul>
                        <p class="text-white" style="font-weight: 400;">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | Viviria Festival
                        </p>
                        <p class="text-white" style="font-weight: 400;">
                            Website maintenance by <a href="https://radu-nicolae.com"
                                                    style="color: white !important; font-weight: 400 !important;text-decoration: underline !important;">Radu
                                Nicolae</a>
                        </p>
                        <br>
                        <p class="text-white" style="font-weight: 400;">
                            Website developed with &nbsp;<i class="fa fa-heart" style="color: white" aria-hidden="true"></i>&nbsp; by <a href="https://radu-nicolae.com"
                                                    style="color: white !important; font-weight: 400 !important;text-decoration: underline !important;">Radu
                                Nicolae</a> and <a
                                    style="color: white !important; font-weight: 400;text-decoration: underline !important;"
                                    href="https://luanaionica.com">Luana Ionica</a>
                        </p>
                    </div>
                </div>
            </div>
            <a id="close_side_menu" href="javascript:void(0);"></a>
            <!--Side Menu-->
        </header>
        <!-- Header end -->
        ');

    }

    public function getHeader2()
    {
        echo(
        '

            <style>
                .join-us-navbar {
                    color: #d0920e;
                    font-weight: 800;
                    border: 2px solid #d0920e;
                    padding: 15px !important;
                    border-radius: 50px;
                }
            
                .join-us-navbar:hover {
                    color: white;
                    background-color: #d0920e;
                    transition: 300ms;
                }
            
                .nav-link:hover {
                    color: #d0920e !important;
                    transition: 300ms;
                }
            </style>
        
            <!-- Header start -->
    <header class="cursor-light">
        
                    <nav class="navbar navbar-top-default navbar-expand-lg static-nav bg-white2 nav-bottom-line full-nav no-animation">
            <div class="container">
                <a class="logo link" href="index.php">
                        <img src="images/logo.png" alt="logo" title="Logo">
                </a>
                <div class="collapse navbar-collapse d-none d-lg-block">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"> <a href="echipa.php" class=" nav-link link">Team</a>
                        </li>
                        <li class="nav-item"> <a href="invitati.php" class=" nav-link link">Guests</a>
                        </li>
                        <li class="nav-item"> <a href="blog.php" class=" nav-link link">Blog</a>
                        </li>
                        <li class="nav-item"> <a href="contact.php" class=" nav-link link">Contact</a>
                        </li>
                        <li class="nav-item mega-menu active"><a href="javascript:void(0)" class="nav-link link"><span
                                            class="join-us-navbar">coming soon</span></a></li>
                        
                    </ul>
                </div>

                <!-- side menu open button -->
                <a class="menu_bars d-inline-block menu-bars-setting animated-wrap" id="sidemenu_toggle">
                    <div class="menu-lines animated-element">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </nav>

        

        <!-- Side Menu -->
        <div class="side-menu d-none">
            <div class="inner-wrapper nav-icon">
                <span class="btn-close link" id="btn_sideNavClose"></span>
                <nav class="side-nav w-100">
                    <div class="navbar-nav">
                        <a class="nav-link link" href="index.php">Home</a>
                        <a class="nav-link link" href="echipa.php">Echipa</a>
                        <a class="nav-link link" href="invitati.php">Invitati</a>
                        <a class="nav-link link" href="blog.php">Blog</a>
                        <a class="nav-link link" href="contact.php">Contact</a>
                        <span class="menu-line"><i class="ti ti-angle-right" aria-hidden="true"></i></span>
                    </div>
                </nav>

                <div class="side-footer text-white w-100">
                        <ul class="social-icons-simple">
                            <li class="side-menu-icons"><a href="javascript:void(0)"><i class="ti ti-facebook color-white"></i>
                                </a></li>
                            <li class="side-menu-icons"><a href="javascript:void(0)"><i class="ti ti-instagram color-white"></i>
                                </a></li>
                        </ul>
                        <p class="text-white" style="font-weight: 400;">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | Viviria Festival
                        </p>
                        <p class="text-white" style="font-weight: 400;">
                            Website developed by <a href="https://radu-nicolae.com"
                                                    style="color: white !important; font-weight: 400 !important;text-decoration: underline !important;">Radu
                                Nicolae</a> and <a
                                    style="color: white !important; font-weight: 400;text-decoration: underline !important;"
                                    href="https://luanaionica.com">Luana Ionica</a>
                        </p>
                    </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!--Side Menu-->
    </header>
    <!-- Header end -->
          '
        );

        //        echo('
//            <style>
//            .join-us-navbar {
//                color: #d0920e;
//                font-weight: 800;
//                border: 2px solid #d0920e;
//                padding: 15px !important;
//                border-radius: 50px;
//            }
//
//            .join-us-navbar:hover {
//                color: white;
//                background-color: #d0920e;
//                transition: 300ms;
//            }
//
//            .nav-link:hover {
//                color: #d0920e !important;
//                transition: 300ms;
//            }
//
//            img{
//                width: 124px;
//                height: 46px;
//            }
//        </style>
//
//            <!-- Header start -->
//            <header class="multipage">
//                <nav style="background-color: black" class="navbar navbar-top-default navbar-expand-lg static-nav transparent-bg fixed-black-nav center-logo">
//                    <div class="container">
//                        <a style="" href="javascript:void(0)">
//                            <img src="images/logo.png" alt="logo" title="Logo">
//                        </a>
//                        <div id="menu" class="collapse navbar-collapse d-none d-lg-block mod-menu">
//                            <ul class="nav navbar-nav">
//                                </ul>
//                            <ul class="nav navbar-nav ml-auto">
//                            <li class="nav-item mega-menu active"> <a href="javascript:void(0)" class="nav-link link">Echipa </a></li>
//                                <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Invitati </a></li>
//                                <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Blog</a></li>
//                                <li class="nav-item"> <a href="javascript:void(0)" class="nav-link link">Contact </a></li>
//                                <li class="nav-item mega-menu active"> <a href="javascript:void(0)" class="nav-link link"><span class="join-us-navbar">Alatura-te</span></a> </li>
//                            </ul>
//                        </div>
//                    </div>
//                </nav>
//            </header>
//            <!-- Header end -->
//        ');
    }

}


