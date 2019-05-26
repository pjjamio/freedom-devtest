<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/includes/img/favicon_logo.png" type="image/gif">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">

        <a href="javascript:void();" class="mobile_toggle"><img src="<?php echo get_template_directory_uri(); ?>/includes/img/menu.png" alt=""></a>

        <div class="mobile_menu">
            <div class="col">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/includes/img/mobile_logo.png" alt=""></a>
                <a href="#" class="mobile_toggle"><img src="<?php echo get_template_directory_uri(); ?>/includes/img/close.png" alt=""></a>
            </div>
            <?php if ( has_nav_menu( 'header_menu' ) ) { ?>
                <?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
            <?php } ?>
        </div>
        
        <?php $header_bg = get_field('header_background_image', 'option'); ?>

        <header class="row" id="header" <?php if($header_bg) { ?> style="background: url(<?php echo $header_bg; ?>) no-repeat center center; background-size: cover" <?php } else { ?> style="background: url(../img/hero.svg) no-repeat center center; background-size: cover" <?php } ?>>
            
            <div class="top"><div class="cont"><a href="javascript:void();">Français</a></div></div>
            
            <div class="cont">
            
                <?php $logo = get_field('logo', 'option'); if($logo){ ?>
                    <img src="<?php echo $logo; ?>" alt="" class="logo">
                <?php }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/img/logo.svg" alt="" class="logo">
                <?php } ?>
                
                <?php if ( has_nav_menu( 'header_menu' ) ) { ?>
                <div class="desktop_menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
                </div>
                <?php } ?>

                <?php 
                    $header_headline = get_field('header_headline', 'option');
                    $header_sub_headline = get_field('header_sub_headline', 'option');
                    if($header_headline){ 
                ?>
                    <div class="head">
                        <h2 class="headline"><?php echo $header_headline; ?></h2>
                        <?php if($header_sub_headline) { ?>
                            <p class="sub-headline"><?php echo $header_sub_headline; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
                 
            </div>
        </header>