<?php


class TeamMember{
    var $name;
    var $image;
    var $position;
    var $shortDescription;

    /**
     * TeamMember constructor.
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
    public function setName($name): void
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
    public function setImage($image): void
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
    public function setPosition($position): void
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
    public function setShortDescription($shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    public function getMembers(){
        $member1 = new TeamMember("name", "image.jpeg", "position", "shortds hadsfjhdsafiu ahdsfiu hsadfu ihdsaf iuhsa");
        $member2 = new TeamMember("name", "image.jpeg", "position", "shortds hadsfjhdsafiu ahdsfiu hsadfu ihdsaf iuhsa");
        $member3 = new TeamMember("name", "image.jpeg", "position", "shortds hadsfjhdsafiu ahdsfiu hsadfu ihdsaf iuhsa");

        return array($member1, $member2, $member3);
    }

    public function printCode($members){
        for ($i = 0; $i < sizeof($members); $i++){
            $member = $members[$i];
            echo('
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12 md-mb-5">
                                <div class="image hover-effect team-single-img ml-lg-0">
                                    <!-- 2 be modified-->
                                    <img src="images/team6.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 mx-auto d-inline-block text-left wow fadeInRight">
                                <div class="skill-box-two">
                                    <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                                        <h5>'. $member->getPosition() .'</h5> <!-- 2 be modified-->
                                        <h2 class="ml-0">' . $member->getName() .'</h2> <!-- 2 be modified-->
                                        <p>' . $member->getShortDescription() . '</p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ');
        }
    }

}