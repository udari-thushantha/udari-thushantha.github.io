<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Delirium Lite
 */

get_header(); ?>

<div id="contentwrapper">
  <h1 class="entry-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'delirium-lite' ), '<span>' . get_search_query() . '</span>' ); ?>
    	</h1>
  <div id="content">
    <?php if (have_posts()) : ?>
     <?php
				while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
				endwhile;
				?>
   	<?php the_posts_pagination(); ?>
    <?php else : ?>
    <h2 class="center"><?php esc_html_e( 'No Post Found', 'delirium-lite' ); ?></h2>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
