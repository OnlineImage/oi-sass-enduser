					<footer class="footer" role="contentinfo">

						<div id="inner-footer" class="row">

							<div class="large-12 medium-12 columns">

								<nav role="navigation">

		    						<?php joints_footer_links(); ?>

		    					</nav>

		    				</div>

		    				<?php 

			    				switch (get_theme_mod( 'footer_format' )) {

			    					case '3-widget': // Footer Format Widgetized 3x selected in customizer ?>

			    					<div class="large-4 medium-4 columns">
			    						<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
											<?php dynamic_sidebar( 'footer-left' ); ?>
										<?php endif; ?>
			    					</div>
			    					<div class="large-4 medium-4 columns">
			    						<?php if ( is_active_sidebar( 'footer-middle' ) ) : ?>
											<?php dynamic_sidebar( 'footer-middle' ); ?>
										<?php endif; ?>
			    					</div>
			    					<div class="large-4 medium-4 columns">
			    						<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
											<?php dynamic_sidebar( 'footer-right' ); ?>
										<?php endif; ?>
			    					</div>

			    					<?php break;

			    					case '4-widget': // Footer Format Widgetized 4x selected in customizer ?>

			    					<div class="large-3 medium-3 columns">
			    						<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
											<?php dynamic_sidebar( 'footer-left' ); ?>
										<?php endif; ?>
			    					</div>
			    					<div class="large-3 medium-3 columns">
			    						<?php if ( is_active_sidebar( 'footer-middle-left' ) ) : ?>
											<?php dynamic_sidebar( 'footer-middle-left' ); ?>
										<?php endif; ?>
			    					</div>
			    					<div class="large-3 medium-3 columns">
			    						<?php if ( is_active_sidebar( 'footer-middle-right' ) ) : ?>
											<?php dynamic_sidebar( 'footer-middle-right' ); ?>
										<?php endif; ?>
			    					</div>
			    					<div class="large-3 medium-3 columns">
			    						<?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
											<?php dynamic_sidebar( 'footer-right' ); ?>
										<?php endif; ?>
			    					</div>

			    					<?php break;
			    					
			    					default: // Footer Format selected is only for copyright info text alignment. No widgets ?>

			    					<div class="large-12 medium-12 columns foot-copy">


										<?php if ( get_theme_mod( 'footerels_copyright' ) ) : ?>

											<p class="source-org copyright"><?php echo get_theme_mod( 'footerels_copyright' ); ?></p>

										<?php else: ?>

											<p class="source-org copyright">Proudly Powered by WordPress | &copy; <?php echo date('Y'); ?> OnlineImage</p>

										<?php endif; ?>

									</div>

			    					<?php break;
			    				}
		    				?>

						</div> <!-- end #inner-footer -->

					</footer> <!-- end .footer -->

				</div>  <!-- end .main-content -->

			</div> <!-- end .off-canvas-wrapper-inner -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->