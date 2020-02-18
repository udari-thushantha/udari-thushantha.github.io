<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Delirium Lite
 */

get_header(); ?>

<div id="contentwrapper">
  <div id="content">
  <h1 class="entry-title">
        <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'delirium-lite' ); ?>
      </h1>
    <?php get_search_form(); ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

