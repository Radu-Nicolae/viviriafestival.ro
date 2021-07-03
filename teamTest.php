<?php

class teamMember{
    var $name;
    var $image;
    var $position;
    var $shortDescription;

    /**
     * teamMember constructor.
     * @param $name
     * @param $image
     * @param $position
     * @param $shortDescription
     */
    public function __construct($name, $image, $position, $shortDescription)
    {
        $this->name = $name;
        $this->image = $image;
        $this->position = $position;
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param mixed $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }



}

class teamUtilities{
    public function getTeamMembers(){
        $teamMember1 = new TeamMember("Name", "images/team7.jpg", "position", "this is a short description");

        $teamMembers = array($teamMember1);

        return $teamMembers;
    }

    public function printTeamCode($teamMembers){
        $code = ' ';

        for($i = 0; $i < sizeof($teamMembers); $i++){
            $teamMember = $teamMembers[$i];

            $codePerItem = '
                <div class="item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 col-sm-12 md-mb-5">
                                    <div class="image hover-effect team-single-img ml-lg-0">
                                        <img src="'. $teamMember->getImage() .'" alt="blog">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                    <div class="skill-box-two">
                                        <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                                            <h5>' . $teamMember->getPosition() . '</h5>
                                            <h2 class="ml-0">' .  $teamMember->getName() .'</h2>
                                            <p>'. $teamMember->getDescription()  . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            ';

            $code .= $codePerItem;
        }

        return $code;

    }
}

?>


<!-- Team start -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> A passionate team </h5>
                    <h2> Our Experts </h2>
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.                    </p>
                </div>
            </div>
        </div>
        <div class="row text-center align-items-center">
            <div class="team-single owl-carousel owl-theme">
                <?php $teamUtilities = new TeamUtilities(); ?>
                <?= $teamUtilities->printTeamCode($teamUtilities->getTeamMembers()); ?>
            </div>
        </div>
    </div>
</section>
<!-- Team ends -->