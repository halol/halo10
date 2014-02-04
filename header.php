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
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- halo -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<button class="btn btn-lg btn-default scrolltop-button" title="To top"><i class="fa fa-chevron-up"></i></button>
<header class="visible-xs">
    <button class="btn btn-default menu-trigger pull-left"><i class="fa fa-bars"></i></button>
    <h4 class="pull-left">Grzegorz Hadala</h4>
</header>
    <nav>
        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_gh3.png" alt=""></a>
        
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		<!--
        <ul class="list-unstyled">
            <li class="active"><a href="">Homepage</a></li>
            <li><a href="">About</a></li>
            <li><a href="">References</a></li>
            <li><a href="">Blog</a></li>
        </ul>-->
        <hr>
        <h4>Work</h4>
        <?php wp_nav_menu( array( 'theme_location' => 'work-menu' ) ); ?>
        <!--
        <ul class="list-unstyled">

            <li><a href="">All</a></li>
            <li><a href="">Webdesign</a></li>
            <li><a href="">Print</a></li>
            <li><a href="">CI</a></li>
            <li><a href="">Other</a></li>
        </ul>
        -->
        <hr>
        <h4>Contact</h4>
        <div itemscope itemtype="http://schema.org/Person" role="vcard">
            <p class="pull-left contact-image" itemprop="image">
                <img class="img-circle hidden-xs hidden-lg hidden-sm hidden-md" src="https://pl.gravatar.com/userimage/15898132/675fc21b6b8f110c804355c80e9f8f5c.jpg?size=50" alt="">
            </p>
            <div class="pull-left contact-info">
            <p itemprop="name">Grzegorz Hadala</p>
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
            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
        </ul>

    </nav>



<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
<?php // get_search_form(); ?>
