<?php get_header(); ?>

<div class="work-pieces-parent work-pieces-single-parent">
	
	<?php
	$args = array (
		"post_type" => "portfolio",
		"post_per_page" => -1,
		"post_status" => "publish",

	);
	// The Query
	$the_query = new WP_Query( $args );


	// The Loop
	if ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
			  <div class="work-pieces">
			    <a href="<?php the_permalink(); ?>">
			      <div style="background-image: url(<?php the_field("image"); ?>)"></div>
			      <p><?php echo the_field("description"); ?></p>
			    </a>
			    <p class="work-pieces-single-text"><?php echo the_field("text"); ?></p>
			  </div>
			<?php
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	?>
</div>

<?php get_footer(); ?>
