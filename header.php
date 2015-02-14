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
</head>

<body <?php body_class(); ?>>

<div class="container container-logo">
	<div class="row">
		<div class="col-sm-2">
			<a href="/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="eLearning Pioneers" /></a>	
		</div>
		<div class="col-sm-10">
			<h1 class="tagline">Female Faculty Development Program</h1>
		</div>
	</div>
</div>

<div class="navbar navbar-default">
    <div class="container navbar-container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        
        <div class="navbar-offcanvas offcanvas">
            <ul class="nav navbar-nav">
                
                
            </ul>
        </div>
    </div>
</div>
