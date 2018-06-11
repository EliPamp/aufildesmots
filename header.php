<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>AuFilDesMots Theme</title>
		<?php wp_head(); ?>
	</head>

	<?php

		if( is_front_page() ):
			$aufildesmots_classes = array('aufildesmots-class','my-class');
		else:
			$aufildesmots_classes = array('no-aufildesmots-class');
		endif;

	?>

	<body <?php  body_class($aufildesmots_classes);?>>

		<?php wp_nav_menu(array('theme_location' => 'primary')); ?>