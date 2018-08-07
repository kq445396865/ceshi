<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Qicms</title>

    <!-- Bootstrap core CSS -->
    <link href="./Public/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="./Public/css/sb-admin.css" rel="stylesheet">
    <link href="./Public/css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="./Public/font-awesome/css/font-awesome.min.css">
       <link href="/Public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/Public/css/sing/common.css" />
    <link rel="stylesheet" href="/Public/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/party/uploadify.css">
    <!-- Page Specific CSS -->
    <!-- JavaScript -->
    <script src="./Public/js/jquery.js"></script>
    <script src="./Public/js/bootstrap.js"></script>
    <script src="./Public/js/dialog/layer.js"></script>
    <script src="./Public/js/dialog.js"></script>
    <script src="./Public/js/party/jquery.uploadify.min.js"></script>
</head>
<body>
<div id="wrapper">

       <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Qicms</a>
        </div>
        <?php
 $navs = D("Menu")->getAdminMenus(); $index = 'index'; ?>
       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php echo (getActive($index)); ?>><a href="/admin.php?c=index"><i class="fa fa-dashboard"></i>首页</a></li>
           <?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?><li <?php echo (getActive($nav["c"])); ?>><a href="<?php echo (getAdminMenusUrl($nav)); ?>"><i class="fa fa-bar-chart-o"></i><?php echo ($nav["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
           
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="/admin.php?c=Login&a=loginout"><i class="fa fa-power-off"></i>退出</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </nav>

<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-6">

				<form class="form-horizontal" id="singcms-form">
					<div class="form-group">
						<label for="inputname" class="col-sm-2 control-label">站点标题:</label>
						<div class="col-sm-5">
							<input type="text" name="title" value="<?php echo ($vo["title"]); ?>" class="form-control" id="inputname" placeholder="请填写站点标题">
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">站点关键词:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" value="<?php echo ($vo["keywords"]); ?>" name="keywords" id="inputPassword3" placeholder="请填写站点关键词">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">站点描述:</label>
						<div class="col-sm-5">
							<textarea class="form-control" rows="3" name="description"><?php echo ($vo["description"]); ?></textarea>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-default" id="singcms-button-submit">提交</button>
						</div>
					</div>
				</form>


			</div>

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
	var SCOPE = {
		'save_url' : '/admin.php?c=basic&a=add',
		'jump_url' : '/admin.php?c=basic',
	};

</script>
<script type="text/javascript" src="./Public/js/admin/common.js"></script>

  </body>
</html>