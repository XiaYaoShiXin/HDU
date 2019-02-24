
<html>
<head>
	<title>杭州电子科技大学教学审核评估网</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>/gongtong4.css" type="text/css" media="screen" />
	<link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>

<style type="text/css" href="<?php bloginfo('stylesheet_url'); ?>/gongtong4.css">

    .header {}

    .logo {
        padding: 10px 0;
        position: relative;
        overflow: hidden;
    }

    .motto {
        position: absolute;
        right: 20%;
        bottom: 30%;
    }

    .divider {
        border-top: 3px solid #2f93cf;
    }

    .login {
        color: gray;
        display: inline-block;
        background-color: white;
        margin-top: -10px;
        padding: 0 10px;
    }

    .login:hover {
        color: #2f93cf;
        text-decoration: none;
    }


    .guide {
        list-style: none;
        margin-top: 15px;
        margin-left: 50px;
    }

    .guide li {
        padding: 0 30px;
        float: left;
        line-height: 10px;
    }

    .guide a {
        color: black;
    }

    .guide a:hover {
        color: #337ab7;
        text-decoration: none;
    }


    .divider2 {
        border-top: 10px solid #f3f3f3;
        margin-top: 30px;
    }

    .sign {
        color: #2f93cf;
        display: inline-block;
        background-color: white;
        margin-top: -15px;
        padding: 0 10px;
        margin-left: 30px;
    }

    .main {
        list-style: none;
        margin-top: 20px;
        min-height: 516px;
    }

    .main a {
        color: black;
    }

    .main a:hover {
        color: #337ab7;
    }
    .main ul{
		list-style:none;
	}
    .item {
        border-bottom: 1px dashed gray;
        padding: 20px 0;
    }

    .item-title {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .item-title a {
        color: black;
    }

    .item-title a:hover {
        color: #2f93cf;
    }

    .item-date {
        color: gray;
        white-space: nowrap;
        text-align: right;
    }

    .footer {
        margin-top: 10px;
        padding: 20px 0;
        text-align: center;
        color: white;
        background-color: #2f75b9;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
   .page{
	   text-align:center;
   }
   .wp-pagenavi {
    margin: 30px 0;
    font-size: 12px;
}
.wp-pagenavi{
    text-align: center;
    line-height: 24px;
}
.wp-pagenavi{
    width: 100%;
}
.wp-pagenavi > span,
.wp-pagenavi > a{
    margin: 4px 6px 4px 0;
    padding: 2px 10px;
    text-decoration: none;
    background-color: #eee;
    color: #666;
    display: inline-block;
}
.wp-pagenavi a:hover,
.wp-pagenavi > .current{
    background-color: #2f75b9;
    color: #fff !important;
}


</style>
 

</head>
<body>
<div class="header">
	<div class="container logo">
       <img src="<?php bloginfo('template_url'); ?>/image/head.png"/>
       <img class="motto hidden-sm hidden-xs" src="<?php bloginfo('template_url'); ?>/image/motto.png"/>
    </div>
    <div class="divider">
		<div class="container">
				<a href="login.html" class="login pull-right"></a>
		</div>
	</div>

<div class="container">
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
<div class=" container divider2">
	<div class="sign pull-left">通知公告</div>
</div>
<?php
$order_by = 'date'; 
$order = 'DESC';
$posts_per_page = 5;
$cat =5;
$show_content = true;
global $post;
$post_title = $post->post_title;
if( $show_content || $paged == 1  ) $post_content = apply_filters('the_content', $post->post_content);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_list = new WP_Query(
	"posts_per_page=" . $posts_per_page .
	"&orderby=" . $order_by .
	"&order=" . $order .
	"&cat=" . $cat .
	"&paged=" . $paged
);

?>
<div class="container">
            <ul class="main">
		<div id="primary">
			<div id="content" role="main">
				<?php if( $show_content || $paged == 1  ) : ?>
				<div class="entry-content">
					<?php echo $post_content; ?>				
				</div>
				<?php endif; ?>
			<?php if ( $post_list->have_posts() ) : ?>
				<div class="entry-content">
					<ul class="article-list">
					<?php while ( $post_list->have_posts() ) : $post_list->the_post(); ?>
						
						<?php
						$title =  preg_replace("'[\n\r\s\t]'","",strip_tags( get_the_content() )); 
						$title = mb_strimwidth( $title, 0, 160, ' ...');
						?>			
				    <li class="row item">
                    <div class="col-xs-10 item-title">
								<a href="<?php the_permalink() ?>" title="<?php echo $title; ?>" target="_blank"><?php the_title(); ?></a>
                    </div>
                    <span class="col-xs-2 item-date">2016-10-02</span>
                    </li>

						
					<?php endwhile; ?>
					</ul>				
				</div>				
				<?php endif; ?>			
			</div>
		</div>
		            </ul>
</div>

<br><br>
<br><br>
<br><br><br><br>
<div class="page"><?php if ( function_exists('wp_pagenavi') ) wp_pagenavi( array('query' => $post_list) );  ?></div><br>
<div class="footer">
		<div>杭州电子科技大学 版权所有</div>
		<div>Copyright© 2010 杭州电子科技大学版权所有 All right reserved </div>
	</div>
</body>
</html>