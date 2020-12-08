<?php


get_header();
?>

	<main id="primary" class="site-main">
		<div id="page-blog" class="page-blog">
			<div class="articles-wrap page-width">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$params = array(
					'post_type' => '',
					'paged' => $paged,

				);
				$query = query_posts($params);
				while (have_posts()) : the_post(); ?>
					<?php
					$class = '';
					$class_info = 'article-without-img';
					if (!empty(get_the_post_thumbnail_url())) {
						$class = 'mt-12';
						$class_info = '';
					}
					?>
					<article class="blog-article">
						<div class="wrap-img-branch">
							<span class="img-branch"></span>
						</div>
						<?php if (!empty(get_the_post_thumbnail_url())) { ?>
							<div class="wrap-image">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
						<?php } ?>
						<div class="wrap-info <?php echo $class_info ?>">
							<p class="blog-date <?php echo $class ?>"> <?php echo date('j F', strtotime(get_the_date())) . ', by ' . get_the_author() ?></p>
							<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="blog-description"><?php the_excerpt(); ?></p>
							<div class="wrap-btn">
								<a href="<?php the_permalink(); ?>" class="btn btn-green">Read Post</a>
							</div>
							<a href="<?php  the_permalink() ?>/#comments" class="wrap-number-comments">
								<span class="number-comments">
									<?php echo get_comments_number(get_the_ID()) ?>
								</span>
							</a>
						</div>
					</article>
				<?php endwhile; ?>
				<div class="pagination-wrap">
					<?php
					$args = array(
						'next_text' => '>',
						'prev_text' => '<',
					);
					the_posts_pagination($args);
					?>
				</div>
			</div>
			<?php wp_reset_query(); ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
