<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bredaserc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
		<nav class="navbar has-shadow is-white">
        <!-- logo / brand -->
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img src="https://www.bredaserugbyclub.nl/wp-content/uploads/2018/01/Logo-BRC-small-copy.png"
                    alt="Bredase Rugby Club - logo">
            </a>
            <a class="navbar-burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="navbar-menu" id="nav-links">
            <div class="navbar-end">
			<?php
            wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => '',     // ignored
                    'container'      => '',     // ignored
                    'menu_class'     => '',     // ignored
                    'items_wrap'     => '%3$s', // NOT ignored
                    'walker'         => new Bulma_Nav_Menu()
                ));
            ?>
            </div>
        </div>
    </nav>
