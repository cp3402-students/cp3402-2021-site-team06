<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="site-footer-inner col-sm-12">

				<div class="site-info">
					<table style="width:100%"
					<tr>
						<th>
					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'footer',
							'depth'             => 2,
							'container'         => 'nav',
							'container_id'      => 'navbar-collapse',
							'container_class'   => 'collapse navbar-collapse',
							'menu_class' 		=> 'nav navbar-nav',
							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
							'menu_id'			=> 'main-menu',
							'walker' 			=> new wp_bootstrap_navwalker()
						)
					); ?>
				</th>
				<th class="alignright">

					<?php // Social links for the footer ?>
					<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>



				</th>
			</table>
			<?php // To the top link ?>
			<a class="to-the-top alignright" href="#top">
						<span class="to-the-top-long">
							To the top <span class="arrow" aria-hidden="true">↑</span>						</span><!-- .to-the-top-long -->

					</a>
				</div><!-- close .site-info -->

			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
