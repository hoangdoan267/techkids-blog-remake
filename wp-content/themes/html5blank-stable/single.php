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
							<?php 	$post = get_post(); 
									echo get_the_category(get_the_ID())[0]->name;
							?> |
							<?php the_time('j-n-Y g:i a') ?>
						</p>
						<div class="row col-xs-8 col-sm-6 author-detail">
							<span><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></span>
							<span>Được đăng bởi <?php echo get_the_author() ?></span>
						</div>
						<div class="col-xs-4 col-sm-4 social-list">
							<!-- socical icon -->
							<i class="fa fa-twitter lg twitter" aria-hidden="true"></i>
							<i class="fa fa-google-plus-official lg google-plus" aria-hidden="true"></i>
							<i class="fa fa-facebook-official lg facebook" aria-hidden="true"></i>
						</div>
						<div class="col-xs-12 col-sm-10 ">
							<?php the_content(); ?>
						</div>
					</div>
				</article>
				<?php endwhile; endif; ?>
			</div>
				<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>