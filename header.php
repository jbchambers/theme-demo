<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<meta name = "format-detection" content = "telephone=no">
<?php wp_head(); ?>

</head>
	<body <?php body_class(); ?> >
		
		<header>
            <div class="container-fluid">
                <div class="logo">
                    <!--<img class="img-responsive center-block" src="--><? //= get_stylesheet_directory_uri(); ?><!--/images/logo-sm.png" alt=""/>-->
                    <a href="<?= get_home_url(); ?>">
                        <p>
                            <strong>JUMPING OFF POINT THEME</strong>
                        </p>
                    </a>
                </div>
                <div class="phone">
                    <a href="tel:+15555555555">555.555.5555</a>
                </div>
                <div class="menu-toggle">
                    Menu Toggle
                </div>
                <?php wp_nav_menu(['theme_location' => 'main_menu', 'menu_id' => 'menu-header']); ?>
            </div>

		</header>