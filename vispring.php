<?php /* Template Name: ViSpring */ ?>


<?php get_header('vispring'); ?>


	<div class="owl-container">
        <div class="slider owl-carousel owl-theme">
            <div class="item">
                <img class="owl-lazy" data-src="<?php bloginfo('template_url'); ?>/vispring/img/1.jpg" alt="">
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="<?php bloginfo('template_url'); ?>/vispring/img/2.jpg" alt="">
            </div>
            <div class="item">
                <img class="owl-lazy" data-src="<?php bloginfo('template_url'); ?>/vispring/img/3.jpg" alt="">
            </div>
        </div>
        <a href="javascript:void(0);" class="prev"><i class="fa fa-chevron-left"></i></a>
        <a href="javascript:void(0);" class="next"><i class="fa fa-chevron-right"></i></a>
        <div class="overlay">
            <a href="/" class="logo-small">
                <img src="<?php bloginfo('template_url'); ?>/vispring/img/vispring-logo-small.png" alt="ViSpring Logo Small" class="img-responsive animated zoomIn">
            </a>
            <h2 class="animated slideInDown">ViSpring now in Dubai</h2>
        </div>
    </div>

    
    <div class="margin-100">
        <h1 class="animated slideInDown hero-heading">Handmade beds for a perfect night's sleep</h1>
    </div>

    <div class="container">
        <!--<div class="normal hidden-md hidden-sm hidden-lg">
            <a href="/" class="logo-small">
                <img src="img/vispring-logo-small.png" alt="ViSpring Logo Small" class="img-responsive animated zoomIn">
            </a>
            <h3 class="animated slideInDown">ViSpring now in Dubai</h3>
            <h1 class="animated slideInDown">Handmade beds for a perfect night's sleep</h1>
        </div>-->
        <div class="second-tile">
            <div class="second-tile-images">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="img-animation">
                            <img src="<?php bloginfo('template_url'); ?>/vispring/img/Home_Man_2.png" alt="" class="img-responsive animated-img">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="img-animation">
                            <img src="<?php bloginfo('template_url'); ?>/vispring/img/rsz_prd_8718.png" alt="" class="img-responsive animated-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--<h3 class="animated slideInDown">Hand made luxury mattresses.</h3>-->
            <p class="animated slideInDown">Vispring has unique expertise in the art of combining skilled craftsmanship and natural materials to create the perfect bed.</p>
            <hr>
        </div>
        <div class="new-tile">
            <h2>DISTINCTIVELY VISPRING</h2>
            <div class="new-tile-images">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="img-animation">
                            <img src="<?php bloginfo('template_url'); ?>/vispring/img/rsz_prd_8708-edit.png" alt="" class="img-responsive animated-img">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="img-animation">
                            <img src="<?php bloginfo('template_url'); ?>/vispring/img/rsz_prd_8845.png" alt="" class="img-responsive animated-img">
                        </div>
                    </div>
                </div>
            </div>
            <p class="animated slideInDown">Individually handcrafted to your exact specifications, our beds deliver unique Vispring comfort to satisfy any requirement.</p>
            <hr>
        </div>
        <div class="third-tile">
            <div class="ico-store-locator"></div>
            <h3>Visit our showroom in Dubai</h3>
            <p>Because nothing we say about our beds can compare</p>
            <p>with trying them out for yourself.</p>
            <img src="<?php bloginfo('template_url'); ?>/vispring/img/map.png" alt="Google Map Directions" class="img-responsive">
            <a href="https://goo.gl/maps/wtH9mBFJrz72" target="_blank" class="page-btn">Get Direction</a>
            <a href="tel:043854700" class="hidden-md hidden-lg page-btn">Call</a>
            <hr>
        </div>
        <div class="forth-tile">
            <h3>Request for a Brochure</h3>
            <form action="submit.php" method="POST" class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div class="form-group">
                        <label for="name">First Name *</label>
                        <input class="" type="text" name="first_name" value="" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact">Contact Number *</label>
                        <input class="" type="text" name="contact" value="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input class="" type="text" name="last_name" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input class="" type="email" name="email" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="center-btn margin-5 col-md-12 col-xs-12">
                        <button type="submit" class="page-btn">Request</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<?php get_footer('vispring'); ?>