<!-- sidebar -->
<aside class="sidebar col-sm-4" role="complementary">
	<div class="sidebar-title-group">
		<div class="sidebar-title">
			<h4>CHUYÊN MỤC</h4>
		</div>		
	</div>
	<div class="sidebar-category-list">
		<ul>
		<?php
			$categories = array(
				'orderby' => 'id',
				'exclude' => '1',
      			'hide_empty'=> 0
			); 
			$list = get_categories($categories);
			foreach ($list as $cat):
				$link = get_category_link($cat->term_id);
		?>
			<li><h5><a href="<?php echo esc_url($link);?>"><?php echo $cat->name?></a><h5></li>
		<?php
			endforeach;
		?>
		</ul>
	</div>
	<div class="sidebar-widget-form">
		<div class="sidebar-widget-title">
			<h4>Muốn đọc nhiều hơn nhưng bài viết hay từ Techkids?</h4>
			<h3>Đăng ký theo dõi nhé!</h3>
		</div>
		<form class="sidebar-form">
				<input type="text" name="email" placeholder="Email">
				<button type="submit" class="btn btn-default">Đăng kí</button>
		</form>
	</div>
</aside>
<!-- /sidebar -->
