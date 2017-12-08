<?php get_header(); ?>

	<h1 class="title"><?php the_title();?></h1>

	<?php echo do_shortcode( '[wpforms id="65" title="false" description="false"]' ); ?>

<?php get_footer(); ?>
