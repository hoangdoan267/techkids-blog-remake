<?php get_header(); ?>

	<div class="container">
		<div class="row single-page-wrapper">
			<div class="col-sm-8 col-xs-12">
				<?php if (have_posts()): while(have_posts()): the_post(); ?>				
				<article>
					<!-- TODO Single Content -->
					<h1><?php the_title(); ?></h1>
					<div>
						<p>
							<?php
								$link = get_category_link( get_the_category(get_the_ID())[0]->term_id );
							?>
							<a href="<?php echo esc_url($link);?>">							
							<?php								
								echo get_the_category(get_the_ID())[0]->name;
							?>
							</a>
							 |
							<?php the_time('j-n-Y g:i a') ?>
						</p>
						<div class="row social-info">
							<div class="col-xs-8 author-detail">
								<span><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></span>
								Được đăng bởi <?php echo get_the_author() ?>
							</div>
							<div class="col-xs-4 social-list">
								<i class="fa fa-twitter lg twitter" aria-hidden="true"></i>
								<i class="fa fa-google-plus-official lg google-plus" aria-hidden="true"></i>
								<i class="fa fa-facebook-official lg facebook" aria-hidden="true"></i>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 article-content">
								<?php the_post_thumbnail('large'); ?>
								<p></p>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</article>
				<?php endwhile; endif; ?>
			</div>
				<?php get_sidebar(); ?>
				<?php /*get_newest_posts(3); */?>
		</div>
	</div>

	<?php get_newest_posts(3); ?>
<?php get_footer(); ?>