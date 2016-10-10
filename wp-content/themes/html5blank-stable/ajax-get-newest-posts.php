<?php
	require_once('../../../wp-load.php');
	
	$off = (int)$_POST['offset'];
	$input =  array(
		'posts_per_page'   => 6,
		'offset' 			=> $off,
		'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
       );

	$posts = get_posts($input);

	global $post;
	foreach ($posts as $post) {
	 	setup_postdata($post); 
	 	?>

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
	 	<?php
	 }
?>