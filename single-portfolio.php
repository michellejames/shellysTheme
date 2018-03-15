<?php get_header(); ?>

<h1 class="title"><?php the_title();?>
	<a href="http://wordpress-shelly.com/portfolio/" class="back-button">
		<span>Back</span>
	</a>
</h1>

<div class="work-pieces-parent work-pieces-single-parent">
	
	<?php
	$args = array (
		"post_type" => "portfolio",
		"post_per_page" => -1,
		"post_status" => "publish",

	);



	  
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>
	
	
		<div class="work-pieces">
		  <a href="<?php the_field("link"); ?>" target="_blank">
		    <div style="background-image: url(<?php the_field("image"); ?>)"></div>
		    <p><?php echo the_field("description"); ?></p>
		  </a>
		  <p class="work-pieces-single-text"><?php the_field("text"); ?></p>
		</div>
	<?php
	
	// End the loop.
	endwhile;










	?>
</div>

<?php get_footer(); ?>
