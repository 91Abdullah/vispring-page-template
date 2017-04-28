<?php ?>

	<footer>
        
        <div class="footer-content">
            <div class="right">
                <a class="icons" href=""><i class="fa fa-facebook fa-2x"></i></a>
                <a class="icons" href=""><i class="fa fa-instagram fa-2x"></i></a>
            </div>
            <a class="brand" href="/">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/vispring/img/vispring-logo.png" alt="ViSpring Logo" class="img-responsive">
            </a>
            <p class="center-block"><span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2017 by Intercoil Int. Co. LLC.</p>
        </div>

		
		<?php
		
			wp_enqueue_script('jqueryNew', get_template_directory_uri() . '/vispring/js/jquery.js', array(), null, true);
			wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vispring/js/bootstrap.min.js', array(), null, true);
			wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/vispring/js/owl.carousel.min.js', array(), null, true);
			wp_enqueue_script('jquery.waypoints', get_template_directory_uri() . '/vispring/js/jquery.waypoints.min.js', array(), null, true);
			wp_enqueue_script('inview', get_template_directory_uri() . '/vispring/js/inview.min.js', array(), null, true);
			wp_enqueue_script('script', get_template_directory_uri() . '/vispring/js/script.js', array(), null, true);
			
			wp_footer();
			
		?>
		
    </footer>

</body>
</html>