<html>
<head>
<title>杭州电子科技大学教学审核评估网</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style type="text/css">
	.header{  }
	.logo{padding: 10px 0;position: relative;display: inline-block;  }
	.logo img { width:350px; height:60px; }
	.text{padding:30px 50px 0 20px;float: right;display: inline-block;}
	.guide { list-style:none; margin-top:15px;}
	.guide li { padding:0 15px; float:left; }
	.guide a {  color:black; }
	.guide a:hover { color:#337ab7; text-decoration: none; }
    .divider{border-top:3px solid  #2f75b9;}


    .title1{padding-top: 10px; margin-top:10px;}
    .title2{text-align: center; border-bottom:1px dashed gray; padding-bottom:10px; }
    .main{line-height: 40px; margin:0 100px; margin-top:50px; }



    .footer { padding:20px 0; text-align:center; color:white; background-color:#2f75b9; position:absolute; bottom:0; left:0; right:0; }
</style>

</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/image/head.png"/>
				</div>
				<div class="text">
					<ul class="guide">
			<li><a href="<?php home_url(“”); ?>/wordpress">首页</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/org">组织机构</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/file">政策文件</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/notice">通知公告</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/assess">评估动态</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/download">资料下载</a></li>
			<li><a href="<?php home_url(“”); ?>/wordpress/contact">联系我们</a></li>
					</ul>	
				</div>
			</div>
		</div>

<div class="divider"></div>

<div class="container">
	<div class="title2">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
	<div class="main">
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
	<div class="grid_8">
		<div class="post">
			<?php the_content(); ?>
		</div>
	</div>
<?php else : ?>
<div class="errorbox">
	没有文章！
</div>
<?php endif; ?>
	</div>



</div>

<div class="footer">
		<div>杭州电子科技大学 版权所有</div>
		<div>Copyright© 2010 杭州电子科技大学版权所有 All right reserved </div>
	</div>


	</body>


</html>