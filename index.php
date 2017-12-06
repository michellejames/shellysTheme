<?php get_header(); ?>
	
	<h1><?php the_title();?></h1>		<!-- get == return -->

	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
			the_date();
			echo "<br/>";
			the_time();
			echo "<br/><br/>";
			//
			// Post Content here
			//
		} // end while
	} // end if
	?>
	<a href="<?php the_permalink(); ?>">The Link</a>
	<?php 
	echo "<br/><br/>";
	?>
<?php get_footer(); ?>