
<?php get_header(); ?>

<h1 class="title"><?php the_title();?></h1>

<div class="about-section">
	<div class="about__headshot" style="background-image: url(<?php the_field("headshot"); ?>)"></div>
	<h1 class="about__greeting"><?php the_field("greeting"); ?></h1>
	<p class="about__paragraph"><?php the_field("paragraph"); ?></p>
	<p class="about__email"><?php the_field("email"); ?></p>
</div>

<?php get_footer(); ?>

