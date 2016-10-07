<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="<?php echo get_template_directory_uri(); ?>/normalize.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick/slick.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">


		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- 		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script> -->

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navbar-fixed-top">
			        <div class="row hidden-xs black_bg">
			          <div class="col-sm-11 Header">
			              <ul class="nav navbar-nav navbar-right home_header">
			                <li><a href="http://techkids.vn/">TRANG CHỦ</a></li>
			                <li><a href="http://techkids.vn/lien-he">LIÊN HỆ</a></li>
			              </ul>
			           </div>
			        </div>
	            	<nav id="header" class="white_bg">
			    		<div class="row">
			          		<div class="col-sm-offset-1 col-sm-2">
			            		<div class="navbar header_icon">
			              			<button type="button" class="navbar-toggle collapsed glyphicon glyphicon-align-justify" data-toggle="collapse" data-target="#header_nav" aria-expanded="false">
			                			<span class="sr-only">Toggle navigation</span>
			                			<span class="icon-bar"></span>
			                			<span class="icon-bar"></span>
			                			<span class="icon-bar"></span>
			              			</button>
			              			<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive"/></a>
			            		</div>
			          		</div>

			          		<div class="col-sm-8 col-sm-offset-1 header_menu_list nav-right">
			            		<div class="collapse navbar-collapse " id="header_nav">
			                		<ul class="nav navbar-nav">
			                  			<li><a href="http://techkids.vn/ve-chung-toi">Về Chúng Tôi</a></li>
			                  			<li class="dropdown">
			                    			<a href="http://techkids.vn/khoa-hoc" class="dropdown-toggle header_dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Các Khóa Học</a>
			                  			</li>
			                  			<li><a href="http://techkids.vn/chuong-trinh/">Các Sự Kiện</a></li>
			                  			<li><a href="http://techkids.vn/khoa-hoc/Free-Code-Intensive">Free Code Intensive</a></li>
			                		</ul>
			            		</div>
			          		</div>
			      		</div>
			    	</nav>
			    </div>
			</header>
			<!-- /header -->
