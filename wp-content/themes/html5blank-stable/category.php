<?php get_header(); ?>

	<div class="container">
		<div class="row single-page-wrapper banner">
			<h1>LẬP TRÌNH GIỎI LÀ CHƯA ĐỦ</h1>
			<h2>HÃY ĐỌC NHIỀU HƠN</h2>
		</div>
		<section class="row single-page-wrapper">
			<div class="col-sm-8 col-xs-12 category-list-wrapper">
				<div class="group-title-wrapper">
					<div class="group-title">
						<h4>BÀI VIẾT MỚI NHẤT<?php /*single_cat_title();*/ ?></h4>
					</div>		
				</div>

				<div class=" row category-list">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="col-sm-6 col-xs-12 category-article-item">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
								</a>
							<?php endif; ?>
							<h4>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h4>
							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
						</article>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php get_template_part('pagination'); ?>
				</div>
			</div>
				<?php get_sidebar(); ?>
		</section>
	</div>

<?php get_footer(); ?>
