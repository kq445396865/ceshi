<?php if (!defined('THINK_PATH')) exit(); $config = D("Basic")->select(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0051)https://www.fuzhanzhang.com/index.php?qd=baidu#hero -->
<html xmlns="http://www.w3.org/1999/xhtml" class="fp-enabled" style="overflow: hidden; height: 100%;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="zyiis_check_verify" content="063034c021d991610181c1cb54172d9266">

<title><?php echo ($config["title"]); ?></title> 
<meta name="keywords" content="<?php echo ($config["keywords"]); ?>"> 
<meta name="description" content="<?php echo ($config["description"]); ?>"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<link rel="stylesheet" type="text/css" href="./Public/css/home/common.css">
<link rel="stylesheet" type="text/css" href="./Public/css/home/index.css">
<link href="./Public/css/home/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./Public/css/home/layer.css" id="layuicss-layer">

<script src="./Public/js/home/pace.js" type="text/javascript"></script>
</head>
<body id="nv_portal" class="pg_index   pace-done fp-viewing-hero" onkeydown="if(event.keyCode==27) return false;" style="overflow: hidden; height: 100%;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="toptb" class="cl" style="display:none;"></div>
<!--头部-->
<div id="hd" style="background:#FFF; height:90px; border-bottom:1px solid #E6E6E6;">
<div class="clear"></div>
<div id="week_nav">
    <div class="wk_navwp">
    <div class="wk_lonav">
    <div class="wk_logo" style="width:265px;">
    <h1 class="sitename"></h1>
    <h2><a href="https://www.fuzhanzhang.com/" title=""><img src="./手机广告联盟_files/dsp_logo.png" alt="" border="0"></a></h2>
    </div>
    <div class="wk_inav">
        <ul class="nav">
			<li class="a" id="mn_portal"><a href="/" hidefocus="true" title="Portal">联盟首页</a></li>
			<li id="mn_P16" onmouseover="showMenu({&#39;ctrlid&#39;:this.id,&#39;ctrlclass&#39;:&#39;hover&#39;,&#39;duration&#39;:2})"><a href="http://ceshi.com/#services" hidefocus="true">广告服务</a></li>
			<li id="mn_P10" onmouseover="showMenu({&#39;ctrlid&#39;:this.id,&#39;ctrlclass&#39;:&#39;hover&#39;,&#39;duration&#39;:2})"><a href="#cases" hidefocus="true">客户案例</a></li>
			<li id="mn_P1" onmouseover="showMenu({&#39;ctrlid&#39;:this.id,&#39;ctrlclass&#39;:&#39;hover&#39;,&#39;duration&#39;:2})"><a href="#news" hidefocus="true">新闻资讯</a></li>
			<li id="mn_P18" onmouseover="showMenu({&#39;ctrlid&#39;:this.id,&#39;ctrlclass&#39;:&#39;hover&#39;,&#39;duration&#39;:2})"><a href="#about" hidefocus="true">关于我们</a></li>
			<style>#indexuser {padding: 0 3px;}#indexuser a {border: 2px solid #fff;padding: 2px 15px;border-radius: 5px;color: #fff; }</style>
		</ul>
        </div>
        </div>
        <div class="wk_idl" style="display:none;">
        <div class="week-header-log">
        <ul class="week-log">
        <li class="log-dd-trigger" style="display:block;">
        <a>
	<img src="./手机广告联盟_files/login_dsp.png" width="22" height="22" alt="log" style="border-radius:50%;">
        <img class="week-arrow" src="./手机广告联盟_files/log-arrow.png" width="10" height="6">
        </a>
        <div class="u-box" style="display:none;"></div>
 
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>
<link rel="stylesheet" href="./Public/css/home/style.css">
<?php
$vo = $result['news']; ?>
<div class="wbox">
	<div class="bg-box">
		<img src="" alt="">
	</div>
</div>
<div class="wbox">
	<div class="con-box">
		<div class="con-title">
			<?php echo ($vo["title"]); ?>
		</div>
		<div class="con-content">
			<?php echo ($vo["contnet"]); ?>
		</div>
	</div>
</div>
</body>
</html>