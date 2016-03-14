<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
 <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
  
   <nav>
     <!--    NAVIGATION MENU -->
      <div class="navigationBar">
        <!--  LOGO -->
          <a class="logo" href="<?php echo get_home_url(); ?>"></a>
          
         <span class="nav"><?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?></span>

      </div><!--navigationBar ends-->

       <!--  PROGRESS BAR -->
       <div class="progressBar full">
            <progress value="0"></progress> 
       </div>

        <span class="mobile"><?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
        )); ?></span>
    
    </nav>
    
  </div> <!-- /.container -->
</header><!--/.header-->

