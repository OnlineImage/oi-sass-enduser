<div class="top-header">
	<div class="large-4 medium-4 columns">
		<?php 
		if (the_field('top_bar_left', 'option')) {
			echo the_field('top_bar_left', 'option'); 
		}
		?>
	</div>
	<div class="large-4 medium-4 columns">
		<?php 
		if (the_field('top_bar_center', 'option')) {
			echo the_field('top_bar_center', 'option'); 
		}
		?>
	</div>
	<div class="large-4 medium-4 columns">
		<?php
		if (the_field('top_bar_right', 'option')) {
			echo the_field('top_bar_right', 'option'); 
		} 
		?>
	</div>
</div>
<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left">
		<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
		    <div class="site-logo">
		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"></a>
		    </div>
		<?php else : ?>
		<ul class="menu">
			<li class="menu-text"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
		<?php endif; ?> 
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>