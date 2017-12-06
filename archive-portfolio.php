<?php get_header(); ?>

<h1 class="title"><?php the_title();?></h1>
	
	<?php
	$args = array (
		"post_type" => "portfolio",
		"post_per_page" => -1,
		"post_status" => "publish",

	);
	// The Query
	$the_query = new WP_Query( $args );
	?>

	<div class="filter">
		<a class="filter-link show-all" href="#">All</a>
		<?php
			$args = array (
				'taxonomy' => 'Department',
				'hide_empty' => false,
			);
			$terms = get_terms($args);
			//print_r($terms);

			foreach ($terms as $t) { ?>
				<!-- t because first letter of variable term -->
				<a class="filter-link" data-id="<?php echo $t->slug; ?>" href="#">
					<?php echo $t->name; ?>
				</a>
			<?php } ?>
	</div>

	<br/><br/>


	<?php
	// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$post_id = get_the_id();
			$post_terms = get_the_terms($post_id, "taxonomy");
			//print_r($post_terms);

			$class_terms = '';

			if(!empty($post_terms)) {
				foreach ($post_terms as $pt) {
					$class_terms .= $pt->slug.' ';
					//print_r($class_terms) ;
				}
			} 			

			$the_query->the_post(); ?>
		<!-- 	<div class="work-pieces"> -->
			  <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-lg-4">
			    <a href="<?php the_permalink(); ?>" class="thumbnail">
			      <img src="<?php the_field("image") ?>" alt="Straner Things - Season 2">
			      <p><?php echo the_field("description"); ?></p>
			    </a>
			  </div>
			<!-- </div> -->
			<?php

		}
		/* Restore original Post Data */
		wp_reset_postdata();
	} else {
		// no posts found
	}

	?>
</div>

<?php get_footer(); ?>