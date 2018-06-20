<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			<!-- </div>#content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<span class = "footer-navigation-wrapper">


					<nav class="footer-navigation" role="navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button> -->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
						<p> Brought to you by <a href="<?php echo esc_url( 'https://redacademy.com/' ); ?>"><?php printf( esc_html( 'RED Academy' )); ?></a> </p> 
						</nav><!-- #site-navigation -->


				</span> <!--footer navigation wrapper --> 


			</footer><!-- #colophon -->
			
		</div><!-- #page -->

		
		<?php wp_footer(); ?>
		
	</body>
</html>
