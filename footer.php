					<?php //Variables
	    				$footerFormat = get_theme_mod( 'footer_format' );
	    				$widget_footerLeft = is_active_sidebar( 'footer-left' );
	    				$widget_footerRight = is_active_sidebar( 'footer-right' );
	    				$widget_footerMiddle = is_active_sidebar( 'footer-middle' );
	    				$widget_footerMiddleLeft = is_active_sidebar( 'footer-middle-left' );
	    				$widget_footerMiddleRight = is_active_sidebar( 'footer-middle-right' );	
					?>
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>	    						    				

			    				<?php if ( $footerFormat == '3-widget' ) : ?>
			    					<!--3-widget-->
			    					<?php if( $widget_footerLeft || $widget_footerMiddle || $widget_footerRight) : ?>
				    					<div class="large-4 medium-4 columns">
				    						<?php if ( $widget_footerLeft ) : ?>
												<?php dynamic_sidebar( 'footer-left' ); ?>
											<?php endif; ?>
				    					</div>
				    					<div class="large-4 medium-4 columns">
				    						<?php if ( $widget_footerMiddle ) : ?>
												<?php dynamic_sidebar( 'footer-middle' ); ?>
											<?php endif; ?>
				    					</div>
				    					<div class="large-4 medium-4 columns">
				    						<?php if ( $widget_footerRight ) : ?>
												<?php dynamic_sidebar( 'footer-right' ); ?>
											<?php endif; ?>
				    					</div>
				    				<?php endif ; ?>
			    				<?php else : ?>
			    					<!--4-widget-->
			    					<?php if( $widget_footerLeft || $widget_footerMiddleLeft || $widget_footerMiddleRight || $widget_footerRight) : ?>
				    					<div class="large-3 medium-3 columns">
				    						<?php if ( $widget_footerLeft ) : ?>
												<?php dynamic_sidebar( 'footer-left' ); ?>
											<?php endif; ?>
				    					</div>
				    					<div class="large-3 medium-3 columns">
				    						<?php if ( $widget_footerMiddleLeft ) : ?>
												<?php dynamic_sidebar( 'footer-middle-left' ); ?>
											<?php endif; ?>
				    					</div>
				    					<div class="large-3 medium-3 columns">
				    						<?php if ( $widget_footerMiddleRight ) : ?>
												<?php dynamic_sidebar( 'footer-middle-right' ); ?>
											<?php endif; ?>
				    					</div>
				    					<div class="large-3 medium-3 columns">
				    						<?php if ( $widget_footerRight ) : ?>
												<?php dynamic_sidebar( 'footer-right' ); ?>
											<?php endif; ?>
				    					</div>
									<?php endif; ?>
								<?php endif; ?>
						</div> <!-- end #inner-footer -->
						<div class="large-12 medium-12 columns foot-copy">
							<?php if ( get_theme_mod( 'footerels_copyright' ) ) : ?>
								<p class="source-org copyright"><?php echo get_theme_mod( 'footerels_copyright' ); ?></p>
							<?php else: ?>
								<p class="source-org copyright">Proudly Powered by WordPress | &copy; <?php echo date('Y'); ?> OnlineImage</p>
							<?php endif; ?>
						</div>
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->