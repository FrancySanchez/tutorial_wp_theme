<html>
<head>
	<title>Tutorial theme</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Mi CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-md-4"><h1>Wanderlust</h1></div>
			<div class="col-md-8">
				<?php
				$defaults = array(

					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-pills">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
					);
					wp_nav_menu( $defaults );?>
				</div>
			</div>
		</div>