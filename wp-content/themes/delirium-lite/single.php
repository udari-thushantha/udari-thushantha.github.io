<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Delirium Lite
 */

get_header(); ?>

<div id="contentwrapper">
  <div id="content">
    <?php while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1>
      <div class="entry">
        <div class="entry">
        <?php the_content(); ?>
        <?php echo get_the_tag_list('<p class="singletags">',' ','</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>'. esc_html__( 'Pages:', 'delirium-lite' ) .'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        <?php comments_template(); ?>
        <?php the_post_navigation(); ?>
      </div>
      </div>
    </div>
    <?php endwhile; // end of the loop. ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
