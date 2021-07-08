<?php

class BlogItem
{
    var $title;
    var $description;
    var $date;
    var $imageUrl;

    /**
     * BlogItem constructor.
     * @param $title
     * @param $description
     * @param $date
     * @param $imageUrl
     */
    public function __construct($title, $description, $date, $imageUrl)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function getBlogItems()
    {
        $blogItem1 = new BlogItem("title", "description", "date", "images/blog3.jpg");
        $blogItem2 = new BlogItem("title", "description", "date", "images/blog3.jpg");
        $blogItem3 = new BlogItem("title", "description", "date", "images/blog3.jpg");
        $blogItem4 = new BlogItem("title", "description", "date", "images/blog3.jpg");

        return array($blogItem1, $blogItem2, $blogItem3, $blogItem4);
    }

    public function getBlogCode($blogItems)
    {
        $code = ' ';

        for ($i = 0; $i < sizeof($blogItems); $i++) {
            $blogItem = $blogItems[$i];
            $codePerItem = '
              <div class="blog-box heading-space">
                 <!-- Blog List Inner -->
                 <div class="blog-listing-inner news_item">
                     <div class="image hover-effect">
                         <img src="' . $blogItem->getImageUrl() .'" alt="blog-img">
                     </div>
                     <div class="news_desc">
                         <h3 class="text-capitalize font-weight-500"><a href="blog-detail-dark.html" class="color-black">'. $blogItem->getTitle() .'</a></h3>
                         <ul class="meta-tags mt-20px mb-20px">
                             <li><a href="javascript:void(0)"><i class="ti ti-calendar"></i>' . $blogItem->getDate() . '</a></li>
                         </ul>
                         <p class="mb-35px color-grey line-height-25px">' . $blogItem->getDescription() . '</p>
                         <a href="blog-detail-dark.html" class="btn-setting btn-hvr-setting-main btn-summer-sky">Read More
                            <span class="btn-hvr-setting">
					    	   <span class="btn-hvr-setting-inner">
					    		 <span class="btn-hvr-effect"></span>
                                 <span class="btn-hvr-effect"></span>
                                 <span class="btn-hvr-effect"></span>
                                 <span class="btn-hvr-effect"></span>
                               </span>
                              </span>
                         </a>
                     </div>
                 </div>
             </div>  
            ';

            $code .= $codePerItem;
        }

        echo ($code);
    }
}

?>


<!DOCTYPE html>
<html>

<?php include 'head.php' ?>

<!-- Page Header -->
<section class="page_header pb-0 w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content position-relative">
                <h2 class="text-white mt-5 mb-2">Our Blog</h2>
                <p class="text-white">We offer the most creative web designs.</p>
                <div class="page_nav bg-white d-inline-block">
                    <span>You are here:</span> <a href="index.html" class="d-inline-block color-black">Home</a> <span
                            class="color-summer-sky"><i class="ti ti-angle-double-right"></i>Blog</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Header -->

<!-- Blog starts -->
<section class="bg-light-gray text-left">
    <div class="container">
        <div class="row">
            <!-- Blog Left Listing -->
            <div class="col-lg-8 col-md-7">
                <?php
                    $item = new BlogItem("sdad", "dsada", "dsad", "dasda");
                    $item->getBlogCode($item->getBlogItems());
                ?>
            </div>
            <!-- Blog Widgets -->
            <div class="col-lg-4 col-md-5">
                <div class="text-left">
                    <!-- Search Box -->
                    <div class="widget heading-space wow fadeIn" data-wow-delay="300ms">
                        <form class="search-box">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="search..." required>
                                <button type="submit" class="search-addon"><i class="ti ti-search line-height-35px"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Recent Post -->
                    <div class="widget heading-space wow fadeIn" data-wow-delay="350ms">
                        <h5 class="color-black font-weight-600 text-capitalize mb-4">Recent Posts</h5>
                        <div class="single-post mb-3">
                            <a href="javascript:void(0)" class="post"><img src="images/post1.jpg" alt="image"></a>
                            <div class="text">
                                <a href="javascript:void(0)" class="color-grey">Cooperative Society Management</a>
                                <span>July 15,2018</span>
                            </div>
                        </div>
                        <div class="single-post mb-3">
                            <a href="javascript:void(0)" class="post"><img src="images/post2.jpg" alt="image"></a>
                            <div class="text">
                                <a href="javascript:void(0)" class="color-grey">Board of Directors Conference</a>
                                <span>November 09,2018</span>
                            </div>
                        </div>
                    </div>
                    <!-- Categories -->
                    <div class="widget heading-space wow fadeIn" data-wow-delay="400ms">
                        <h5 class="color-black font-weight-600 text-capitalize">Categories</h5>
                        <div>
                            <div class="categories-name">
                                <a href="javascript:void(0)">
                                    <p class="font-16 color-grey text-capitalize">Business <span>198</span></p>
                                </a>
                            </div>
                            <div class="categories-name">
                                <a href="javascript:void(0)">
                                    <p class="font-16 color-grey text-capitalize">Corporate <span>119</span></p>
                                </a>
                            </div>
                            <div class="categories-name">
                                <a href="javascript:void(0)">
                                    <p class="font-16 color-grey text-capitalize">Creative <span>132</span></p>
                                </a>
                            </div>
                            <div class="categories-name">
                                <a href="javascript:void(0)">
                                    <p class="font-16 color-grey text-capitalize">Finance <span>37</span></p>
                                </a>
                            </div>
                            <div class="categories-name mb-2">
                                <a href="javascript:void(0)">
                                    <p class="font-16 color-grey text-capitalize">Marketing <span>30</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags -->
                    <div class="widget heading-space mb-0 wow fadeIn" data-wow-delay="450ms">
                        <h5 class="color-black font-weight-600 mb-4 text-capitalize">Trending tags</h5>
                        <div>
                            <ul class="tags">
                                <li>
                                    <p class="font-13 text-capitalize">Business</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Corporate</p>
                                </li>
                                <li>
                                    <p class="font-13">SEO</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Creative</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Finance</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Marketing</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Envato</p>
                                </li>
                                <li>
                                    <p class="font-13 text-capitalize">Theme Development</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog ends -->

<!-- Footer starts -->
<footer class="p-half bg-black2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="footer-icons mb-4">
                    <li><a href="javascript:void(0)" class="wow fadeInUp facebook"><i class="ti ti-facebook"></i> </a>
                    </li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown twitter"><i class="ti ti-twitter"></i> </a>
                    </li>
                    <li><a href="javascript:void(0)" class="wow fadeInUp google"><i class="ti ti-google"></i> </a></li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown linkedin"><i class="ti ti-linkedin"></i> </a>
                    </li>
                    <li><a href="javascript:void(0)" class="wow fadeInUp instagram"><i class="ti ti-instagram"></i> </a>
                    </li>
                    <li><a href="javascript:void(0)" class="wow fadeInDown pinterest"><i class="ti ti-pinterest"></i>
                        </a></li>
                </ul>
                <p class="copyrights mt-2 mb-2">© 2020 Wixer. Made with love by <a href="javascript:void(0)">themesindustry</a>
                </p>
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


