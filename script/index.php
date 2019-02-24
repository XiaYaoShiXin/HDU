<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>杭州电子科技大学教学审核评估网</title>
	
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>

</head>
<body>

	<div class="header">
		<div class="container logo">
			<img src="<?php bloginfo('template_url'); ?>/image/head.png"/>
			<img class="motto hidden-sm hidden-xs" src="<?php bloginfo('template_url'); ?>/image/motto.png"/>
		</div>
		<div class="divider">
			<div class="container">
				<a class="login pull-right"></a>
			</div>
		</div>
	</div>
	<div class="container">
		<ul class="nav nav-pills hidden-xs">
			<li><a href="<?php home_url(“”); ?>/wordpress">首页</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/org">组织机构</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/file">政策文件</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/notice">通知公告</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/assess">评估动态</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/download">资料下载</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/contact">联系我们</a></li>
		</ul>
		<ul class="nav nav-pills nav-stacked visible-xs-block">
			<li><a href="<?php home_url(“”); ?>/wordpress">首页</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/org">组织机构</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/file">政策文件</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/notice">通知公告</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/assess">评估动态</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/download">资料下载</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/contact">联系我们</a></li>
		</ul>
		<div class="banner">

			<div id="banner" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#banner" data-slide-to="0"></li>
    				<li data-target="#banner" data-slide-to="1" class="active"></li>
    				<li data-target="#banner" data-slide-to="2"></li>
  				</ol>

  				<div class="carousel-inner" role="listbox">
    				<div class="item">
      					<img src="<?php bloginfo('template_url'); ?>/image/banner1.jpg" alt="...">
    				</div>
    				<div class="item active">
      					<img src="<?php bloginfo('template_url'); ?>/image/banner2.jpg" alt="...">
    				</div>
    				<div class="item">
      					<img src="<?php bloginfo('template_url'); ?>/image/banner3.jpg" alt="...">
    				</div>
  				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-7 block">
				<div class="block-title">通知公告<a href="<?php home_url(“”); ?>/wordpress/notice" class="block-more">更多>></a></div>
				<ul class="block-list list-unstyled">
		<?php
			$posts = get_posts('numberposts=5&orderby=post_date&category=5');
			foreach($posts as $post) {
				setup_postdata($post);
				echo'<li class="row"><a href="' . get_permalink() . '" " class="col-sm-10 item-title">'.get_the_title().'</a>';
				echo '<span class="item-date col-sm-2">'.mysql2date('Y-m-d', $post->post_date).'</span></li>';
			}
			$post = $posts[0];
		?>
	</ul>              
			</div>
			<div class="col-sm-5 block">
				<div class="block-title">政策文件<a href=" http://localhost/wordpress/file/" class="block-more">更多>></a></div>
				<ul class="block-list list-unstyled">
		<?php
			$posts = get_posts('numberposts=5&orderby=post_date&category=6');
			foreach($posts as $post) {
				setup_postdata($post);
				echo'<li class="row"><a href="' . get_permalink() . '" " class="col-sm-10 item-title">'.get_the_title().'</a>';
				echo '<span class="item-date col-sm-2">'.mysql2date('Y-m-d', $post->post_date).'</span></li>';
			}
			$post = $posts[0];
		?>
	</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7 block">
				<div class="block-title">评估动态<a href="<?php home_url(“”); ?>/wordpress/assess" class="block-more">更多>></a></div>
				<ul class="block-list list-unstyled">
		<?php
			$posts = get_posts('numberposts=5&orderby=post_date&category=7');
			foreach($posts as $post) {
				setup_postdata($post);
				echo'<li class="row"><a href="' . get_permalink() . '" " class="col-sm-10 item-title">'.get_the_title().'</a>';
				echo '<span class="item-date col-sm-2">'.mysql2date('Y-m-d', $post->post_date).'</span></li>';
			}
			$post = $posts[0];
		?>
	</ul>
			</div>
			<div class="col-sm-5 block">
				<div class="block-title">资料下载<a href="<?php home_url(“”); ?>/wordpress/download" class="block-more">更多>></a></div>
		<ul class="block-list list-unstyled">
		<?php
			$posts = get_posts('numberposts=5&orderby=post_date&category=8');
			foreach($posts as $post) {
				setup_postdata($post);
				echo'<li class="row"><a href="' . get_permalink() . '" " class="col-sm-10 item-title">'.get_the_title().'</a>';
				echo '<span class="item-date col-sm-2">'.mysql2date('Y-m-d', $post->post_date).'</span></li>';
			}
			$post = $posts[0];
		?>
	</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>杭州电子科技大学 版权所有</div>
		<div>Copyright© 2010 杭州电子科技大学版权所有 All right reserved </div>
	</div>
</body>
</html>