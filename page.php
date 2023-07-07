<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<div class="p-5">
				<div><h1 class="entry-title mb-0"><?php echo get_the_title(); ?></h1></div>
				<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
			</div>

			<div class="pb-5"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/bandera-titulos.jpg" alt="bandera-colombia"></div>
			<?php
				the_content();

				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'fondofidu' ) . '">',
						'after'    => '</nav>',
						'pagelink' => esc_html__( 'Page %', 'fondofidu' ),
					)
				);
				edit_post_link(
					esc_attr__( 'Edit', 'fondofidu' ),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</div><!-- /#post-<?php the_ID(); ?> -->
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	</div><!-- /.col -->
	<?php
		get_sidebar();
	?>
</div><!-- /.row -->
<?php
get_footer();
