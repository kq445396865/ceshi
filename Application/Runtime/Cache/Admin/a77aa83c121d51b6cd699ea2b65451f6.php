<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
        <div class="row">
            <div class="col-lg-12">

                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/admin.php?c=menu">菜单管理</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> 编辑
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">

                <form class="form-horizontal" id="singcms-form">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-2 control-label">菜单名:</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" id="inputname" placeholder="请填写菜单名" value="<?php echo ($menu["name"]); ?>">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="inputname" class="col-sm-2 control-label">父类菜单ID:</label>
                        <div class="col-sm-5">
                            <select class="form-control" name="parentid">
                                <option value="0">一级菜单</option>
                                <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parent): $mod = ($i % 2 );++$i;?><option value="<?php echo ($parent["menu_id"]); ?>"><?php echo ($parent["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">菜单类型:</label>
                        <div class="col-sm-5">
                            <input type="radio" name="type" id="optionsRadiosInline1" value="1" <?php if($menu["type"] == 1): ?>checked<?php endif; ?>> 后台菜单
                            <input type="radio" name="type" id="optionsRadiosInline2" value="0" <?php if($menu["type"] == 0): ?>checked<?php endif; ?>> 前端栏目
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">模块名:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="m" id="inputPassword3" placeholder="模块名如admin" value="<?php echo ($menu["m"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">控制器:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="c" id="inputPassword3" placeholder="控制器如index" value="<?php echo ($menu["c"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">方法:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="f" id="inputPassword3" placeholder="方法名如index" value="<?php echo ($menu["f"]); ?>">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">是否为前台菜单:</label>
                        <div class="col-sm-5">
                            <input type="radio" name="type" id="optionsRadiosInline1" value="0" checked> 否
                            <input type="radio" name="type" id="optionsRadiosInline2" value="1"> 是
                        </div>

                    </div>-->

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                        <div class="col-sm-5">
                            <input type="radio" name="status" id="optionsRadiosInline1" value="1" <?php if($menu["status"] == 1): ?>checked<?php endif; ?>> 开启
                            <input type="radio" name="status" id="optionsRadiosInline2" value="0" <?php if($menu["status"] == 0): ?>checked<?php endif; ?>> 关闭
                        </div>

                    </div>
                    <input type="hidden" name="menu_id" value="<?php echo ($menu["menu_id"]); ?>">
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default" id="singcms-button-submit">更新</button>
                        </div>
                    </div>
                </volist>
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
<!-- Morris Charts JavaScript -->
<script>
    var SCOPE = {
        'save_url' : '/admin.php?c=menu&a=add',
        'jump_url' : '/admin.php?c=menu',
    }
</script>
<script type="text/javascript" src="./Public/js/admin/common.js"></script>

  </body>
</html>