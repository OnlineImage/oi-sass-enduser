<div class="top-header">

	<div class="row">

		<div class="large-4 medium-4 columns">

			<?php 

			$top_bar_left = get_theme_mod( 'top_bar_left' );

			if ($top_bar_left) {

				echo $top_bar_left; 

			}

			?>

		</div>

		<div class="large-4 medium-4 columns">

			<?php 

			$top_bar_center = get_theme_mod( 'top_bar_center' );

			if ($top_bar_center) {

				echo $top_bar_center; 

			}

			?>

		</div>

		<div class="large-4 medium-4 columns">

			<?php 

			$top_bar_right = get_theme_mod( 'top_bar_right' );

			if ($top_bar_right) {

				echo $top_bar_right; 

			}

			?>

		</div>

	</div>

</div>

<div class="header-logo-bar">
	<div class="row">
		<div class="large-4 medium-4 columns">
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
		<div class="large-4 medium-4 columns"><div class="tagline"><?php bloginfo('description'); ?></div></div>
		<div class="large-4 medium-4 columns"></div>
	</div>	
</div>
<div class="top-bar">
	<div class="row" id="main-menu">
		<div class="large-12 medium-12 columns show-for-medium">
			<?php joints_top_nav(); ?>	
		</div>
		<div class="top-bar-right float-right show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>