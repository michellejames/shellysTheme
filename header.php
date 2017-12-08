<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>webDevShelly's Website</title>
	<?php wp_head(); ?>
</head>
<body>
	<?php 
		$logo = get_field("Logo", "option");
	 ?>

	<header>
		<div class="logo" style="background-image: url(<?php the_field("Logo"); ?>)"></div>
		<ul class="navigation">
			<?php
				$menu_items = wp_get_nav_menu_items("Main Navigation");
				foreach ($menu_items as $mi) {
					$title = $mi -> title;
					$url = $mi -> url;
					echo '<li><a href="' . $url . '#">' . $title . '</a></li>';
				}
			?>
		</ul>
	</header>






