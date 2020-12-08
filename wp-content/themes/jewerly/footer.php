<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewerly
 */
$fields = get_fields('options');
$footer = $fields['footer'];
?>

<footer id="colophon" class="site-footer">
	<div class="menu-width">
		<div class="wrap-info">
			<a href="<?php echo(get_home_url()); ?>" class="logo">
				<img src="<?php echo($footer['logo']['url']); ?>" alt="<?php echo($footer['logo']['alt']); ?>"/>
			</a>
			<div class="links">
				<?php foreach ($footer['links'] as $link) { ?>
					<a href="<?php echo $link['link']['url']?>" target="<?php echo $link['link']['target']?>"><?php echo $link['link']['title']?></a>
				<?php } ?>
			</div>
		</div>
		<div class="wrap-form">
			<?php echo do_shortcode('[contact-form-7 id="96" title="Footer Form"]'); ?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
