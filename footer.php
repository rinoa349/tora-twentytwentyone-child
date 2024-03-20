<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<div class="line"></div>

	<footer id="colophon" class="site-footer">
		<div class="footer_container">
			<img  class="footer_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tora_logo.JPG" width="140" height="20"/>

				<ul class="footer_navi_flex">
					<li><a href="<?php echo home_url('/contacts/'); ?>">お問い合わせ</a></li>
					<li><a href="<?php echo home_url('/privacy-policy/'); ?>">プライバシーポリシー</a></li>
					<li><a href="<?php echo home_url('/terms-of-service/'); ?>">利用規約</a></li>
				</ul>
		</div>

		<div class="line"></div>
		
		<div class="my_copyright">
			Copyright © D.L.B All Rights Reserved.
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
