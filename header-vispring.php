<?php ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php 

wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vispring/css/bootstrap.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('animate', get_template_directory_uri() . '/vispring/css/animate.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/vispring/css/owl.carousel.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('owl.theme', get_template_directory_uri() . '/vispring/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vispring/css/font-awesome.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('style-vispring', get_template_directory_uri() . '/vispring/css/style.css', array(), '1.0.0', 'all');

// add the action
add_action('wp_enqueue_scripts', 'remove_default_styles');

function remove_default_styles()
{
	// get all styles data
	global $wp_styles;
	
	$styles_to_keep = array("wp-admin", "admin-bar", "dashicons", "open-sans", "bootstrap", "animate", "owl.carousel", "owl.theme", "font-awesome", "style-vispring");

	// loop over all of the registered scripts
	foreach ($wp_styles->registered as $handle => $data)
	{
		// if we want to keep it, skip it
		if ( in_array($handle, $styles_to_keep) ) continue;
		
		// remove it
		wp_deregister_style($handle);
		wp_dequeue_style($handle);
	}
}

wp_head();



?>

</head>

<body>
    <div class="container">
        <div id="header" class="header">
            <a class="brand" href="/">
                <img class="logo animated slideInDown" src="<?php bloginfo('template_url'); ?>/vispring/img/vispring-logo.png" alt="ViSpring Logo" class="img-responsive">
            </a>
        </div>
        
    </div>
	
	
	
	