<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>webDevShelly's Website</title>
	<?php wp_head(); ?>
</head>
<body>
  <?php $logo = get_field("Logo", "option"); ?>

  <nav class="navbar navbar-default">
  <div class="container-fluid navbar-container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="img-fluid navbar-logo" alt="Brand" src="<?php echo $logo; ?>">
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<?php
      		$menu_items = wp_get_nav_menu_items("Main Navigation");
      		foreach ($menu_items as $mi) {
    				$title = $mi -> title;
    				$url = $mi -> url;
    				echo '<li><a href="' . $url . '#">' . $title . '</a></li>';
      		}
      		//print_r($menu_items);
      	?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




