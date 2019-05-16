<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
    <title>
	<?php bloginfo('name');  —	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script async="" src="js/analytics.js.download"></script>
    <script type="text/javascript" src="js/jquery.min.js.download"></script>
	<script type="text/javascript" src="js/menu.js.download"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
    <div id="mainContainer" class="container center">
        <header>
            <div id="headerContainer">
                  <h1><a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a></h1>
                <h4><?php bloginfo( 'description' ); // Display the blog description, found in General Settings ?></h4>
            </div> <!-- headerContainer -->
            
            <nav class="menu">
            <div class="menu-main-menu-container" id="main-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) );  ?>
                <a class="toggle-nav" href="#">&#9776;</a>
            </div>	
        </nav>

        </header>
        
    
    </div> <!-- #mainContainer  .container center -->
    
    <main class="main-fluid"><!-- start the page containter -->
        <div id="primary" class="row-fluid">
            <div id="content" role="main" class="span8 offset2">
                