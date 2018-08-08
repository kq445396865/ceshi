<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="./Public/layui/css/layui.css">
<body>
	<div class="wk_body">
<ul>
    <?php if(is_array($result['listNews'])): $i = 0; $__LIST__ = $result['listNews'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="last"><div class="wk_img"><a href="/index.php?c=Detail&id=<?php echo ($vo["news_id"]); ?>"><img src="<?php echo ($vo["thumb"]); ?>" width="290" height="190" alt="<?php echo ($vo["title"]); ?>" title="<?php echo ($vo["title"]); ?>"></a></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
	
</ul><!--首页案例内部调用位置-->


<div><?php echo ($result['pageres']); ?></div>
</div>
</body>
</html>