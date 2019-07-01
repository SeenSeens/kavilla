<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid top">
    <div class="container">
        <div class="visible-xs col-xs-1">
            <div class="menumobile">
                <div class="header">
                    <a href="#menu"></a>
                    <div class="clear"></div>
                </div>
                <nav id="menu">
                <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container' => 'false',
						'menu_class' => '',
					)
				);
				?>
                    <div class="clearfix"></div>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-3 col-sm-2 col-xs-10 col-xss-10 log">
            <div class="row">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full' );
                ?>
                <a href="<?php bloginfo( 'url' ); ?>">
                    <h6 style="font-size: 0;">
                        <img src="<?= esc_url( $custom_logo_url ); ?>" class="img-responsive"/>
                    </h6>
                </a>
                <!-- <a href="index.html">
                    <h6 style="font-size: 0;">Kiến trúc Kavila<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Kiến trúc Kavila" class="img-responsive"/>
                    </h6>
                </a> -->
            </div>
        </div>
        <div class="col-md-8 col-md-push-1 col-sm-9 col-sm-push-1 hidden-xs">
            <div class="row">
            <nav class="navbar navbar-inverse navbar-fix">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container' => 'false',
                        'menu_class' => 'menutop nav navbar-nav',
                        'fallback_cb'	=> 'WP_Bootstrap_Navwalker::fallback',
                        'walker'	=> new WP_Bootstrap_Navwalker(),
					)
				);
                ?>
            </nav>
            </div>
        </div>
        <div class="language">
            <a href="../../index.html"><img src="<?php bloginfo('template_directory'); ?>/images/vn.jpg" alt=""></a>
            <a href="../../en/index.html"><img src="<?php bloginfo('template_directory'); ?>/images/en.jpg" alt=""></a>
        </div>
    </div>
</div>

