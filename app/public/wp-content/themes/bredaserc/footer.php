<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bredaserc
 */

?>

	<footer id="footer" class="section section--white footer">
		<div class="container">
			<div class="columns is-vcentered">
				<div class="column is-6 footer__sponsors">
					<img src="https://via.placeholder.com/250x100.png" />
					<img src="https://via.placeholder.com/250x100.png" />
				</div>
				<div class="column is-4 footer__menu">
					<?php wp_nav_menu(array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'footer-menu',
                            'menu_class'     => '',     // ignored
                            'container'      => '',     // ignored
                            'menu_class'     => '',     // ignored
                            'items_wrap'     => '%3$s', // NOT ignored
                            'walker'         => new Bulma_Nav_Menu()
                        ));
                    ?>
				</div>
				<div class="column is-2 has-text-right footer__socials">
					<i class="fab fa-linkedin"></i>
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-instagram"></i>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
