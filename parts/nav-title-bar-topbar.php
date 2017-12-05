<div class="top-header">

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

<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?php _e( 'Menu', 'jointswp' ); ?></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left show-for-<?php echo $breakpoint ?>">
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
		<?php joints_top_nav(); ?>
	</div>
</div>