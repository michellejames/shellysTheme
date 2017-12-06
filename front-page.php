
<?php get_header(); ?>

<?php 
	//$hero = get_field("Hero", "option");
	$background = get_field("Background", "option");
?>
	<div class="background-image" style="background-image: url(<?php echo $background; ?>)"></div>

<div class="hero">
	<h1>Web Developer, crazy cat lady and cheese gourmet.</h1>
	<div class="cat"></div>
</div>

<div class="skillset">
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
</div>




<?php get_footer(); ?>