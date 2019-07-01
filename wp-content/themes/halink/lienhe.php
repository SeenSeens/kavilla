<?php
/**
 * Template Name: Liên hệ
 */
get_header();
?>
<div class="container-fluid" style="background: url(images/bg_lh.png) center center;">
    <div class="container">
        <div class="row" style="background-image: url('<?php bloginfo( 'template_directory' ) ?>/images/bg_bg.png'); margin: 40px; repeat;">
            <?php if(is_active_sidebar('contact')) { dynamic_sidebar( 'contact' ); } ?>
            <?php while(have_posts()) : the_post() ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        <!-- </div> -->
        </div>
    </div>
</div>
<?php
get_footer();
