<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

//代理IP直接退出
empty($_SERVER['HTTP_VIA']) or exit('Access Denied');
//防止快速刷新
session_start();
$seconds = '60'; //时间段[秒]
$refresh = '10'; //刷新次数
//设置监控变量
$cur_time = time();
if(isset($_SESSION['last_time'])){
        $_SESSION['refresh_times'] += 1;
}else{
        $_SESSION['refresh_times'] = 1;
        $_SESSION['last_time'] = $cur_time;
}
//处理监控结果
if($cur_time - $_SESSION['last_time'] < $seconds){
        if($_SESSION['refresh_times'] >= $refresh){
                //跳转至攻击者服务器地址
                //header(sprintf('Location:%s', 'http://www.baidu.com'));
                exit('访问过于频繁，请稍后再次访问！！！');
        }
}else{
        $_SESSION['refresh_times'] = 0;
        $_SESSION['last_time'] = $cur_time;
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="keyword" content="超有趣,cyouqu,笑话,js,java,jquery,easyui,大理,loadrunner,软件测试,性能测试,loadrunner,qtp">
	<meta name="description" content="超有趣 每天一点有趣，一点开心">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<script>
		(function(){
			var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?40355e52dbadc745130592af2ab800f9":"https://jspassport.ssl.qhimg.com/11.0.1.js?40355e52dbadc745130592af2ab800f9";
			document.write('<script src="' + src + '" id="sozz"><\/script>');
		})();
	</script>

	<!-- 统计 -->
	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?feeb6c6e18bdc3970f3afbb3bb86a481";
			var s = document.getElementsByTagName("script")[0]; 
			s.parentNode.insertBefore(hm, s);
		})();
	</script>

</head>

<body <?php body_class(); ?>>
 
<div class="left_news_xf news_xf" style="display: none;">
<script type="text/javascript">
var sogou_ad_id=931535;
var sogou_ad_height=600;
var sogou_ad_width=160;
</script>
<script type='text/javascript' src='http://images.sohu.com/cs/jsfile/js/c.js'></script>
</div>

<div class="right_news_xf news_xf" style="display: none;">
<script type="text/javascript">
var sogou_ad_id=931537;
var sogou_ad_height=600;
var sogou_ad_width=160;
</script>
<script type='text/javascript' src='http://images.sohu.com/cs/jsfile/js/c.js'></script>
</div>


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="/img/blue_logo.jpg" alt="<?php bloginfo( 'name' ); ?>|cyouqu" />
						</a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="/img/blue_logo.jpg" alt="<?php bloginfo( 'name' ); ?>|cyouqu" />
						</a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>

				<div class="sg_news_header" style="width: 580px !important;">
					<script type="text/javascript">
var sogou_ad_id=931541;
var sogou_ad_height=90;
var sogou_ad_width=580;
</script>
<script type='text/javascript' src='http://images.sohu.com/cs/jsfile/js/c.js'></script>
				</div>

			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">