<div class="top-header">
	<div class="top-header-left">
		<a href="https://www.facebook.com/Bennion-Jewelers-114196615265107" class="social-icons"><img src="http://132.148.23.236/~bennionjewelers/wp-content/uploads/2017/04/fb.png" /></a>
		<a href="https://www.instagram.com/bennionjewelers/" class="social-icons"><img src="http://132.148.23.236/~bennionjewelers/wp-content/uploads/2017/04/ig.png" /></a>
	</div>
	<div class="top-header-center address">
		City Creek Center, 15 S Temple #120, Salt Lake City, UT 84101
	</div>
	<div class="top-header-right phone">
		Call Now! (801) 364-3667
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