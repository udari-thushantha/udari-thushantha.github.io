<?php
/**
 * The template for displaying posts on index view
 *
 * @package Delirium Lite
 */
?>

<div <?php post_class(); ?>>
	<a href="<?php the_permalink() ?>">
      <?php the_post_thumbnail('delirium-blogthumb') ?>
    </a>
    <div class="postdate">
        <?php the_time(' F jS, Y') ?>
    </div>
    <h2 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
        </a></h2>
      <div class="entry">
        <?php the_excerpt(); ?>
      </div>
    </div>