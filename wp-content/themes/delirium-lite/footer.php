<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Delirium Lite
 */
?>

<div id="footer">
  <?php if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu(
						array(
							'theme_location'  => 'social',
							'container'       => 'div',
							'container_id'    => 'menu-social',
							'container_class' => 'menu',
							'menu_id'         => 'menu-social-items',
							'menu_class'      => 'menu-items',
							'depth'           => 1,
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'fallback_cb'     => '',
						)
					);
					} ?>
                    
                    <?php if ( has_nav_menu( 'footer-menu' ) ) {
    				wp_nav_menu( 
						array( 
							'theme_location' => 'footer-menu', 
							'container_id'   => 'footermenu',
							'menu_class' 	 => 'superfish mainnav',
							'before' 		 => '<span>&#47;</span>',
							'fallback_cb'	 => false
						)
					);
  					} ?>
  <div id="copyinfo">
  	&copy; <?php echo date_i18n(__('Y','delirium-lite')); ?>
    <?php bloginfo('name'); ?>
    . <a href="<?php echo esc_url( esc_html__( 'http://wordpress.org/', 'delirium-lite' ) ); ?>"> <?php printf( esc_html__( 'Powered by %s.', 'delirium-lite' ), 'WordPress' ); ?> </a> <?php printf( esc_html__( 'Theme by %1$s.', 'delirium-lite' ), '<a href="http://www.vivathemes.com/" rel="designer">Viva Themes</a>' ); ?>
  </div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>