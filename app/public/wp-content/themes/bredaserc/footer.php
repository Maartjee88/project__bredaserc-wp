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
					<?php $logos = get_field('footer_logos', 'options');
                        $size = 'full';
                        if ($logos): ?>
								<?php foreach ($logos as $logo): ?>
									<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" title="<?php echo $logo['title'] ?>">
								<?php endforeach; ?>
						<?php endif; ?>
				</div>
				<div class="column is-4 navbar footer__menu">
					<div class="navbar-brand">
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
				</div>
				<div class="column is-2 has-text-right footer__socials">
					<?php if (have_rows('footer_socials', 'options')):
                        while (have_rows('footer_socials', 'options')) : the_row();

                            $icon = get_sub_field('footer_socials_icon', 'options');
                            $link = get_sub_field('footer_socials_link', 'options'); ?>
								<a href="<?php echo $link; ?>" class="footer__links">
									<i class="fab <?php echo $icon; ?>"></i>
								</a>
						<?php endwhile;
                    endif; ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
