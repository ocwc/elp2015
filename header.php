<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php get_template_part('partials/_favicons'); ?>
</head>

<body <?php body_class('offcanvas-relative'); ?>>

<div class="container container-white container-logo clearfix hidden-xs">
	<div class="">
		<div class="col-sm-4 text-right">
			<a href="/" class="logo"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo-bilingual.png" alt="eLearning Pioneers" /></a>	
		</div>
		<div class="col-sm-4 text-right pull-right social-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</div>
	</div>
</div>

<div class="navbar container navbar-default">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-offcanvas offcanvas">
      <a class="navbar-brand visible-xs" href="/">eLearning Pioneers</a>
      
		<?php 
		    wp_nav_menu( array(
		        'menu'              => 'primary',
		        'theme_location'    => 'primary',
		        'depth'             => 2,
		        'container'         => false,
		        'menu_class'        => 'nav navbar-nav',
		        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		        'walker'            => new wp_bootstrap_navwalker())
		    );
		?>

    </div>

</div>

<div class="container container-logo-xs visible-xs-block">
	<div class="row">
		<div class="col-sm-12 text-center">
			<a href="/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo-bilingual.png" alt="eLearning Pioneers" /></a>	
		</div>
	</div>
</div>