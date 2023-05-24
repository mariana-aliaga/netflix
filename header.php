<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package netflix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'netflix' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div>
				<nav class="navbar navbar-expand-lg nav">
					<div class="container-fluid">
					  	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						 <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item">
								<a class="nav-link text-white" aria-current="page" href="#">Inicio</a>
								</li>
								<li class="nav-item">
								<a class="nav-link text-white" href="#">Series TV</a>
								</li>
								<li class="nav-item">
								<a class="nav-link text-white" href="#">Peliculas</a>
								</li>
								<li class="nav-item">
								<a class="nav-link text-white">Añadidos Recientemente</a>
								</li>
								<li class="nav-item">
								<a class="nav-link text-white">Mi lista</a>
								</li>
							</ul>
						</div>
						<div>
							<div class="container-fluid d-flex">
								<form class="" role="search">
								<input class="form-control me-2 bg-transparent text-white" type="search" placeholder="Buscar..">
								</form>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'netflix' ); ?></button>
			<?php /*
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);*/
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
