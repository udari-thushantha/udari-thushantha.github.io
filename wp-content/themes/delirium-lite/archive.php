<?php
/**
 * The template for displaying Archive pages.
 *
 *
 * @package Delirium Lite
 */

get_header(); ?>

<div id="contentwrapper">
    <?php
			the_archive_title( '<h1 class="entry-title archive-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
    <div id="content">
      <?php if ( have_posts() ) : ?>
      <?php
				while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
				endwhile;
				?>
      <?php the_posts_pagination(); ?>
      <?php else : ?>
      <h2 class="center">
        <?php esc_html_e( 'Not Found', 'delirium-lite' ); ?>
      </h2>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>