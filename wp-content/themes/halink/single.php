<?php
get_header();
?>

<div class="container-fluid">
	<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
			// the_post_navigation();
			// If comments are open or we have at least one comment, load up the comment template.
		endwhile; // End of the loop.
		?>
	</div>	<!-- .container -->
</div> <!-- .container-fluid -->
<?php
get_footer();
