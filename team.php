<!-- Team start -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> A passionate team </h5>
                    <h2> Our Experts </h2>
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc
                        vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor
                        justo sed mi finibus, vel tristique risus faucibus. </p>
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


