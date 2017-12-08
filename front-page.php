
<?php get_header(); ?>

<?php 
	//$hero = get_field("Hero", "option");
	$background = get_field("Background", "option");
	$cheese = get_field("Cheese", "option");
	$cat = get_field("Cat", "option");
	$music = get_field("music", "option");
	$harribo = get_field("harribo", "option");
?>
	<div
		class="background-image"
		style="background-image: url(<?php echo $background; ?>)">	
		<!-- <h1>@webDevShelly</h1> -->
	</div>

	<h2 class="title">About Me</h2>

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


















<!-- <div class="hero">
	<h1>Web Developer, crazy cat lady and cheese gourmet.</h1>
	<div class="cat"></div>
</div> -->

<!-- <div class="skillset">
	<div class="skill skill-1">
		<di class="skill-icon skill-icon1"></di>
		<div class="skill-title skill-title-1">Test</div>
		<div class="skill-description skill-description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dolore officia, magni facilis maxime, perspiciatis illo at unde vel minus tempora reprehenderit quo laudantium quod. Maiores sapiente consequatur, praesentium cum.</div>
		<button type="submit" class="skill-submit skill-submit1">Learn More <span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
</span></button>
	</div>

	<div class="skill skill-1">
		<di class="skill-icon skill-icon1"></di>
		<div class="skill-title skill-title-1">Test</div>
		<div class="skill-description skill-description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dolore officia, magni facilis maxime, perspiciatis illo at unde vel minus tempora reprehenderit quo laudantium quod. Maiores sapiente consequatur, praesentium cum.</div>
		<button type="submit" class="skill-submit skill-submit1">Learn More <span><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
</span></button>
	</div>

	<div class="skill skill-1">
		<di class="skill-icon skill-icon1"></di>
		<div class="skill-title skill-title-1">Test</div>
		<div class="skill-description skill-description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dolore officia, magni facilis maxime, perspiciatis illo at unde vel minus tempora reprehenderit quo laudantium quod. Maiores sapiente consequatur, praesentium cum.</div>
		<button type="submit" class="skill-submit skill-submit1">Learn More
			<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
		</button>
	</div>
</div> -->




<?php get_footer(); ?>