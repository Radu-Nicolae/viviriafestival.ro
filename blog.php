<?php

class BlogItem
{
    var $title;
    var $description;
    var $date;
    var $imageUrl;
    var $url;

    /**
     * BlogItem constructor.
     * @param $title
     * @param $description
     * @param $date
     * @param $imageUrl
     * @param $url
     */
    public function __construct($title, $description, $date, $imageUrl, $url)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->imageUrl = $imageUrl;
        $this->url = $url;
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

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }




    public function getBlogItems()
    {
        $blogItem1 = new BlogItem("title", "description", "date", "images/blog3.jpg", 'blog-item.php');
        $blogItem2 = new BlogItem("title", "description", "date", "images/blog3.jpg", 'blog-item.php');
        $blogItem3 = new BlogItem("title", "description", "date", "images/blog3.jpg", 'blog-item.php');
        $blogItem4 = new BlogItem("title", "description", "date", "images/blog3.jpg", 'blog-item.php');

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
                    
                    <a href="'. $blogItem->getUrl().'">
                     <div class="image hover-effect">
                         <img src="' . $blogItem->getImageUrl() .'" alt="blog-img">
                     </div> 
                     </a>
                     <div class="news_desc">
                         <h3 class="text-capitalize font-weight-500"><a href="blog-item.php" class="color-black">'. $blogItem->getTitle() .'</a></h3>
                         <ul class="meta-tags mt-20px mb-20px">
                             <li><a href="' . $blogItem->getUrl() . '"><i class="ti ti-calendar"></i>' . $blogItem->getDate() . '</a></li>
                         </ul>
                         <p class="mb-35px color-grey line-height-25px">' . $blogItem->getDescription() . '</p>
                         <a href="' . $blogItem->getUrl() . '" class="btn-setting btn-hvr-setting-main btn-summer-sky">Read More
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

<?php include 'header.php';
$header = new Header();
$header->getHeader2();
?>

<!-- Page Header -->
<section class="page_header pb-0 w-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content position-relative">
                <h2 class="text-white mt-5 mb-2">Our Blog</h2>
                <p class="text-white">We offer the most creative web designs.</p>
                <div class="page_nav bg-white d-inline-block">
                    <span>You are here:</span> <a href="index.php" class="d-inline-block color-white" style=" color: white;">Home</a> <span
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
                    $item = new BlogItem("just", "for initializing", "this", "object", ":)");
                    $item->getBlogCode($item->getBlogItems());
                ?>
            </div>
            <!-- Blog Widgets -->
            
        </div>
    </div>
</section>
<!-- Blog ends -->

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


