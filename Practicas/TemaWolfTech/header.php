<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">

	<!-- REVISAR ESTA PARTE ANTES DE GRABAR-->
	<title>
		<?php if (is_home()){
			// Si estamos en la pagina de Inicio obtenemos el nombre del Blog
			echo get_bloginfo('name');
		} else if (is_single()){
			// Si es un post mostramos el titulo
			echo the_title();
		} else {
			// De otra forma obtenemos el titulo del post
			echo get_bloginfo('name');
		}?>
	</title>
<script src="https://kit.fontawesome.com/70c0c8b20d.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-sm-6">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="wolftech Logo"></a>
				</div>
				<div class="redes-sociales col-xs-6">
					<a href="https://www.youtube.com/channel/UCTvEf3K8AVtXbmQFk-k5n8Q" class="youtube"><i class="fa-brands fa-youtube"></i></a>
					<a href="https://www.facebook.com/WolfTechMex" class="facebook"><i class="fa-brands fa-facebook"></i></a>
					<a href="https://twitter.com/CARLOSWOLF5000" class="twitter"><i class="fa-brands fa-twitter"></i></a>
				</div>
			</div>
		</div>

		<nav class="menu">
			<div class="container">
				<div class="row">
					<?php wp_nav_menu(array(
						'container' => false,
						'menu_class' => '',
						'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
						'theme_location' => 'menu-top'
					));	?>
				</div>
			</div>
		</nav>
			
		<div class="ad container hidden-xs">
			<div class="row">
				<div class="col-md-12">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>
				</div>
			</div>
		</div>
	</header>