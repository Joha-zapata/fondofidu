			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row pb-4">
					<div class="col-md-4">
						<?php the_field('footer_1','options'); ?>
					</div>
					<div class="col-md-4">
						<?php the_field('footer_2','options'); ?>
					</div>
					<div class="col-md-4">
						<?php the_field('footer_3','options'); ?>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="col-md-12">
					<?php
					if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
                                   /*
                                        Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
                                        Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
                                        !!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
                                   */
                                   wp_nav_menu(
                                        array(
                                             'container'       => 'div',
                                             'container_class' => '',
                                             //'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
                                             'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
                                             'theme_location'  => 'footer-menu',
                                             'items_wrap'      => '<ul class="menu-copy-footer d-flex justify-content-between">%3$s<li><ul class="d-flex justify-content-between redes-sociales"><li class="icon"><a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i></a></li><li class="icon"><a target="_blank" href="#"><i class="fa-brands fa-twitter"></i></a></li><li class="icon"><a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a></li><li class="icon"><a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li></ul></li></ul>',
                                        )
                                   );
                              endif;

					?>
					</div>
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
