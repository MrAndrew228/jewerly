<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jewerly
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-content">
		<header class="entry-header">
			<div class="wrap-img-branch">
				<span class="img-branch"></span>
			</div>
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :?>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php jewerly_post_thumbnail(); ?>
		<p class="entry-date"> <?php echo date('j F', strtotime(get_the_date())) . ', by ' . get_the_author() ?></p>
		<div class="entry-content">
			<?php
			the_content();
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
