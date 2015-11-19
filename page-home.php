<?php
// Template Name: Beliefs Page
?>

<?php get_header(); ?>

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading" style="">The Cross</h1>
                        <h2 class="brand-subtitle">Worship Center</h2>
                        <p class="intro-text">Sundays at 10AM and Wednesdays at 7PM<br>6895 Via Del Oro, San Jose, CA 95119</p>
<!-- style="font-weight: bold; text-shadow: 0px 0px 3px black,  1px 1px #000;" text shadow if needed for letters on lighter backgrounds-->

                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Beliefs Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Beliefs</h2>
                <p>The Cross Worship Center is a ministry that believes in God the Father, God the Son, and God the Holy Spirit. </p>
                <p>The sole basis of our beliefs is contained in God’s written and infallible Word, the Holy Bible.</p>
                <p>Click here to learn more about what we believe.</p>
                <a href="beliefs.html" class="btn btn-contact btn-lg">Visit Beliefs Page</a>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Community</h2>
                    <p>At the Cross Worship Center, we recognize that people have a God-given need for community. Click below to get find a place to get plugged in.</p>
                    <a href="community.html" class="btn btn-default btn-lg">Visit Community Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section id="staff" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Staff</h2>
                <p>The Cross's staff is made up of wonderful, Spirit-filled people who simply love Jesus and love people.</p>
                <p>Click here to meet us!</p>
                <a href="staff.html" class="btn btn-contact btn-lg">Visit Staff Page</a>
            </div>
        </div>
    </section>

   <!--  Outreach Section -->
  <section id="outreach" class="content-section text-center" style="padding-top: 0px;">
        <div class="outreach-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 style="padding-top: 200px;">Outreach</h2>
                    <p>"It is better to give than to receive."</p>
                    <p>Click below to find where you can use your gifts, talents, and skills to help those in need.</p>
                    <a href="outreach.html" class="btn btn-outreach btn-lg">Visit Outreach Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us</h2>
                <p>Questions? Comments? Need prayer? Feel free to get in touch with us, even to just say hello!</p>
                
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-contact btn-lg" data-toggle="modal" data-target="#contact-us">
                  Contact Us
                </button>


                <p></br>And make sure to like the Cross on Facebook!</p>
                <ul class="list-inline banner-social-buttons">
                    <!-- <li>
                        <a href="#" target="_blank" class="btn btn-contact btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li> -->
                    <li>
                        <a href="https://www.facebook.com/TheCrossWorshipCenter" target="_blank" class="btn btn-contact btn-lg"><i class="fa fa-facebook fa-fw"></i><span class="network-name">Facebook</span></a>
                    </li>
                    <!-- <li>
                        <a href="#" class="btn btn-contact btn-lg" target="_blank"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </section>


    <!-- Map Section -->
    <div id="map">

        <iframe width="100%" height="400px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4CM3wDzrihJJkiclqBegxCWb0qi_DgzE&q=6895+Via+Del+Oro,San+Jose,CA+95119"></iframe>

    </div>

<?php get_footer(); ?>