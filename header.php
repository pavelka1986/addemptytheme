<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta id="viewport" name="viewport"
          content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title><?php wp_title(' | ', true, 'right'); ?></title>

    <link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link media="all" rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.css"/>
    <link media="all" rel="stylesheet" type="text/css"
          href="<?php echo get_template_directory_uri(); ?>/responsive.css"/>

    <script type="text/javascript">
        <!--
        var url = "<?php echo get_template_directory_uri(); ?>";
        //-->
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="row row-header">
    <header id="header" class="container">

        <div class="col-md-12">
            <div class="col-md-4">
                <a href="<?php bloginfo('url'); ?>" class="toplogo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
                </a>
            </div>

            <div class="col-md-8">
                <div class="menu">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                </div>
            </div>
        </div>
    </header>
</div>