<!-- Team start -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> Din creație pentru creație </h5>
                    <h2> Echipa Viviria </h2>
                    <p style="font-size:140%;"> Viviria Festival se conturează în jurul dorinței de a deschide noi orizonturi și de a oferi un spațiu în care tinerii scriitori și jurnaliști aspiranți să primească feedback și să învețe de la persoane experimentate în aceste domenii. Ne dorim ca tinerii pasionați de scris să creeze legături puternice atât cu potențiali mentori, dar și între ei. Ne propunem un dublu schimb cultural: unul cu persoane adulte, care aduc o viziune matură asupra procesului de scriere și publicare, dar și una personală, specifică fiecărui participant asupra creației literare. </p>
                </div>
            </div>
        </div>
        <div class="row text-center align-items-center">
            <div class="team-single owl-carousel owl-theme">

                <?php include 'TeamMember.php';
                    $member = new TeamMember('dsada','dsadas','dsadsa','dsadsa');
                    $member->printCode($member->getMembers());
                ?>

            </div>
        </div>
    </div>
</section>
<!-- Team ends -->


