<?php
/**
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?> GRZEGORZ HADAŁA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="http://hadala.pl/favicon.ico" />
	<link rel="icon" type="image/png" href="http://hadala.pl/favpng.png" />
	<!-- halo -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<meta property="og:image" content="http://www.hadala.pl/halo10.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if (is_front_page()) { echo 'id="homepage"'; } else {} ?>>
	<?php if(function_exists('qtrans_generateLanguageSelectCode')){
	echo qtrans_generateLanguageSelectCode('image');
	}
	?>
    <?php
    if (!(is_front_page())) {
    ?>
	<button class="btn btn-xs btn-default scrolltop-button" title="To top"><i class="fa fa-chevron-up"></i></button>
	<header class="visible-xs">
	    <button class="btn btn-default menu-trigger pull-left"><i class="fa fa-bars"></i></button>
	</header>

    <nav>
        <a href="http://www.hadala.pl/portfolio" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/halo10_red.svg" alt=""></a>
        <h4>Portfolio</h4>
        <?php wp_nav_menu( array( 'theme_location' => 'work-menu' ) ); echo '<hr>';?>
        
		<?php 
            $menu = wp_nav_menu( array( 
                'theme_location' => 'main-menu',
                'echo' => FALSE,
                'fallback_cb' => '__return_false' 
                ) );  
            
            if(!empty($menu)) {
                echo $menu;
                echo '<hr>'; 
            }

        ?>
        
        <h4>Contact</h4>
        <div itemscope itemtype="http://schema.org/Person" role="vcard">
            <div class="pull-left contact-info">
            <!--<p itemprop="name">Grzegorz Hadala</p>-->
            <p itemprop="address" itemscope itemtype="http://schema.org/Address">
              <span itemprop="work">Warsaw</span>, 
              <span itemprop="region">PL</span>.
            </p>
            <p itemprop="telephone"><a tabindex="-1" href="tel:48790288812">+48 790 28 88 12</a></p>
            <p itemprop="email"><a tabindex="-1" href="mailto:grzegorz@hadala.pl">grzegorz@hadala.pl</a></p>
            </div>
        </div>
        <hr>
        <ul class="list-unstyled" role="social-icons">
            <li><a href="http://www.linkedin.com/profile/view?id=201215261"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://github.com/halol"><i class="fa fa-github-alt"></i></a></li>
        </ul>

    </nav>
    <?php } ?>
