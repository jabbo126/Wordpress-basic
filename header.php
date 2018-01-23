<!DOCTYPE html>
<html lang="cs">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- HEAD -->
<head>

    <!-- charset -->
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />
    <!-- charset konec -->

    <!-- titulek -->
    <title><?php bloginfo ('name'); ?> <?php wp_title(); ?></title>
    <!-- titulek konec -->

    <!-- meta informace -->
    <meta name="description" content="Zkušební Wordpress šablona - responzivní web">
    <meta name="keywords" content="wordpress, responsive" />
    <!-- meta informace konec-->

    <!-- odkazy -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pinback_url'); ?>" />
    <link rel="alternate" type="aplication/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <!-- odkazy konec -->

    <!-- Volání WP Headeru -->
    <?php wp_head(); ?>
    <!-- Volání WP Headeru konec -->

</head>
<!-- HEAD KONEC -->

<body>
<!-- DIV pro flexibilní footer ZAČÁTEK -->
<div class="wrapper">
<!-- DIV pro flexibilní footer ZAČÁTEK -->

<p>Začínáme</p>
