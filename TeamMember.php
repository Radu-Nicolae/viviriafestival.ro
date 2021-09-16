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

        $ioana_barbu = new TeamMember("Ioana Cătălina Barbu", 'membruechipa3.jpeg', "Production Manager", 'Sufletul meu a fost făurit cu stângăcie de homo poetica, iar ochii mei au învățat să distingă poezii doar în penumbră. La vreme de furtună mă ascund sub o pelerină translucidă și strâng creația de mână. Mereu mă iau prin surprindere degetele ei pătate de cerneală și iluzii.');
        $maria_preoteasa = new TeamMember("Maria Preoteasa", 'membruechipa4.jpeg', '', 'Îmi plac norii de aburi care se ridică deasupra muntelui dimineața. Îmi plac poeziile scrise la repezeală, între o stație și alta. Îmi plac oamenii când merg seara pe stradă, cu umbrele întinse pe trotuar.');
        $ioana_barbu_2 = new TeamMember("Ioana Barbu", 'membruechipa5.jpeg', '', 'Creația este nucleul diversității: de la vârfurile munților până la văile însorite, nimic nu este identic. Ești la fel de unic ca natura, iar creativitatea ta nu are limite. Dacă lumea ar fi altfel, probabil m-ai găsi scriind la o altitudine înaltă, undeva printre nori.');
        $diana_maxim = new TeamMember("Diana Maxim", 'membruechipa2.jpeg', '', 'Imi place sa vad frumosul din orice- culorile rasaritului din diminetile mult prea matinale cand ai vrea sa dormi mai mult, zambetele din metrou, fluturii din mijlocul orasului exagerat de aglomerat. Dar cel mai mult imi place sa caut frumosul in oameni, cu povestile, experientele, obiceiurile si defectele lor. Frumosul este peste tot, trebuie doar sa iti pastrezi sufletul deschis, ori pentru a-l cauta, ori pentru a-i permite sa te gaseasca.');


        return array($ioana_barbu, $maria_preoteasa, $ioana_barbu_2, $diana_maxim);
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
                                    <img src="'. $member->getImage() . '" alt="blog">
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