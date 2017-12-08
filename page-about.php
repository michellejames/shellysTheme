
<?php get_header(); ?>

	<?php 
		$cheese = get_field("Cheese", "option");
		$cat = get_field("Cat", "option");
		$music = get_field("music", "option");
		$harribo = get_field("harribo", "option");
	 ?>

	<h1 class="title"><?php the_title();?></h1>

	<div class="about-section">
		<div class="about__headshot" style="background-image: url(<?php the_field("headshot"); ?>)"></div>
		<h1 class="about__greeting"><?php the_field("greeting"); ?></h1>
		<p class="about__paragraph"><?php the_field("paragraph"); ?></p>
		<h3 class="about__email"><?php the_field("email"); ?></h3>

		<h2>Things I like and can't live without:</h2>
		<div class="things-i-like">
			<div class="cheese" style="background-image: url(<?php echo $cheese; ?>)">
				<span class="name">Cheese</span>
			</div>
			<div class="cat" style="background-image: url(<?php echo $cat; ?>)">
				<span class="name">Cats</span>
			</div>
			<div class="music" style="background-image: url(<?php echo $music; ?>)">
				<span class="name">Music</span>
			</div>
			<div class="harribo" style="background-image: url(<?php echo $harribo; ?>)">
				<span class="name">Harribo</span>
			</div>
		</div>
	</div>




	

<?php get_footer(); ?>

