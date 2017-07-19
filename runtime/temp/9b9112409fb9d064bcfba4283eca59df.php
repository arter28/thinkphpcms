<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:53:"D:\phpStudy\www/application/admin\view\news\sort.html";i:1500446055;s:51:"./application/admin/view/index/page_googlefont.html";i:1500082899;s:44:"./application/admin/view/index/page_top.html";i:1500451301;s:45:"./application/admin/view/index/page_menu.html";i:1500448750;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Proton - Admin Template</title>

		<!-- Import google fonts - Heading first/ text second -->
<link rel='stylesheet' type='text/css' href='__PUBLIC__/assets/css/google.font.css?family=Open+Sans:400,700|Droid+Sans:400,700' />
<!--[if lt IE 9]>
<link href="__PUBLIC__/assets/css/google.font.css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/google.font.css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/google.font.css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/assets/css/google.font.css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="__PUBLIC__/assets/ico/favicon.ico" type="image/x-icon" />

	    <!-- Css files -->
	    <link href="__PUBLIC__/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/jquery.mmenu.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	    <link href="__PUBLIC__/assets/css/style.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/add-ons.min.css" rel="stylesheet">
	</head>
</head>

<body>
<!-- start: Header -->
<div class="navbar" role="navigation">

    <div class="container-fluid">

        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="badge"><?php echo $messagecount; ?></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>在线留言</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $showgreen; ?>" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only"><?php echo $showgreen; ?>% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <?php if(is_array($mlist) || $mlist instanceof \think\Collection || $mlist instanceof \think\Paginator): $i = 0; $__LIST__ = $mlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="avatar">
                        <a href="/admin/index/messageview/<?php echo $vo['ID']; ?>">
                            <div><?php echo $vo['MesName']; ?></div>
                            <small><?php echo $vo['AddTime']; ?></small>
                            <?php if(($vo['ViewFlagch']==0)): ?>
                            <span class="label label-info">NEW</span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="dropdown-menu-footer text-center">
                        <a href="/admin/index/message/">更多留言</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-avatar" src="__PUBLIC__/assets/img/avatar.jpg" alt="user-mail">系统用户</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>帐户</strong>
                    </li>
                    <li><a href="/admin/index/midpass/"><i class="fa fa-user"></i> 修改密码</a></li>
                    <li><a href="/admin/index/setsite/"><i class="fa fa-wrench"></i> 网站设置</a></li>
                    <li class="divider"></li>
                    <li><a href="/admin/index/loginout/"><i class="fa fa-sign-out"></i> 退出登录</a></li>
                </ul>
            </li>
            <li><a href="/admin/index/loginout/"><i class="fa fa-power-off"></i></a></li>
        </ul>

    </div>

</div>
<!-- end: Header -->

	
	<div class="container-fluid content">
	
		<div class="row">

			<!-- start: Main Menu -->
<div class="sidebar ">

    <div class="sidebar-collapse">
        <div class="sidebar-header t-center">
            <span><img class="text-logo" src="__PUBLIC__/assets/img/logo1.png"><i class="fa fa-space-shuttle fa-3x blue"></i></span>
        </div>
        <div class="sidebar-menu">
            <ul class="nav nav-sidebar">
                <li<?php if(($menuname == '系统概况')): ?> class="active"<?php endif; ?>><a href="/admin/index/index"><i class="fa fa-laptop"></i><span class="text"> 系统概况</span></a></li>
                <li<?php if(($menuname == '网站设置')): ?> class="active"<?php endif; ?>><a href="/admin/index/setsite"><i class="fa fa-cogs"></i><span class="text"> 网站设置</span></a></li>
                <li<?php if(($menuname == '关于我们' OR $menuname == '添加文章')): ?> class="opened"<?php endif; ?>>
                    <a href="#"><i class="fa fa-file-text"></i><span class="text"> 关于我们</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub"<?php if(($menuname == '关于我们' OR $menuname == '添加文章')): ?> style="display:block;"<?php endif; ?>>
                        <li<?php if(($menuname == '关于我们')): ?> class="active"<?php endif; ?>><a href="/admin/index/about"><i class="fa fa-file-text"></i><span class="text"> 文章管理</span></a></li>
                        <li<?php if(($menuname == '添加文章')): ?> class="active"<?php endif; ?>><a href="/admin/index/aboutadd"><i class="fa fa-plus-square-o"></i><span class="text"> 添加文章</span></a></li>
                    </ul>
                </li>
                <li<?php if(($menuname == '产类列' OR $menuname == '产类加' OR $menuname == '产列' OR $menuname == '产加')): ?> class="opened"<?php endif; ?>>
                    <a href="#"><i class="fa fa-th"></i><span class="text"> 产品管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub"<?php if(($menuname == '产类列' OR $menuname == '产类加' OR $menuname == '产列' OR $menuname == '产加')): ?> style="display:block;"<?php endif; ?>>
                        <li<?php if(($menuname == '产类列')): ?> class="active"<?php endif; ?>><a href="/admin/product/sort"><i class="fa fa-sitemap"></i><span class="text"> 分类管理</span></a></li>
                        <li<?php if(($menuname == '产类加')): ?> class="active"<?php endif; ?>><a href="/admin/product/sortadd"><i class="fa fa-plus-square-o"></i><span class="text"> 添加分类</span></a></li>
                        <li<?php if(($menuname == '产列')): ?> class="active"<?php endif; ?>><a href="/admin/product/index"><i class="fa fa-th"></i><span class="text"> 产品管理</span></a></li>
                        <li<?php if(($menuname == '产加')): ?> class="active"<?php endif; ?>><a href="/admin/product/add"><i class="fa fa-plus-square-o"></i><span class="text"> 添加产品</span></a></li>
                    </ul>
                </li>
                <li<?php if(($menuname == '新类列' OR $menuname == '新类加' OR $menuname == '新列' OR $menuname == '新加')): ?> class="opened"<?php endif; ?>>
                    <a href="#"><i class="fa fa-signal"></i><span class="text"> 新闻管理</span> <span class="fa fa-angle-down pull-right"></span></a>
                    <ul class="nav sub"<?php if(($menuname == '新类列' OR $menuname == '新类加' OR $menuname == '新列' OR $menuname == '新加')): ?> style="display:block;"<?php endif; ?>>
                        <li<?php if(($menuname == '新类列')): ?> class="active"<?php endif; ?>><a href="/admin/news/sort"><i class="fa fa-sitemap"></i><span class="text"> 分类管理</span></a></li>
                        <li<?php if(($menuname == '新类加')): ?> class="active"<?php endif; ?>><a href="/admin/news/sortadd"><i class="fa fa-plus-square-o"></i><span class="text"> 添加分类</span></a></li>
                        <li<?php if(($menuname == '新列')): ?> class="active"<?php endif; ?>><a href="/admin/news/index"><i class="fa fa-th"></i><span class="text"> 新闻管理</span></a></li>
                        <li<?php if(($menuname == '新加')): ?> class="active"<?php endif; ?>><a href="/admin/news/add"><i class="fa fa-plus-square-o"></i><span class="text"> 添加新闻</span></a></li>
                    </ul>
                </li>
                <li<?php if(($menuname == '咨询反馈')): ?> class="active"<?php endif; ?>><a href="/admin/index/message"><i class="fa fa-life-bouy"></i><span class="text"> 咨询反馈</span></a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">


        <div class="copyright text-center">
            <small>SunlyNet <i class="fa fa-coffee"></i> from <a href="http://www.sunlynet.cn/" title="新尼网络" target="_blank">新尼网络</a></small>
        </div>
    </div>

</div>
<!-- end: Main Menu -->

						
		<!-- start: Content -->
			<div class="main sidebar-minified">

				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-table"></i>分类管理</h3>
						<ol class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="/admin/index/index">首页</a></li>
							<li><i class="fa fa-th"></i>新闻管理</li>
							<li><i class="fa fa-sitemap"></i>分类管理</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2><i class="fa fa-table red"></i><span class="break"></span><strong>所有分类</strong></h2>
								<div class="panel-actions">
									<a href="/admin/news/sortadd"><i class="fa fa-plus"></i></a>
								</div>
							</div>
							<div class="panel-body">news
								<table class="table">
									<thead>
									<tr>
										<th>ID</th>
										<th>排序</th>
										<th>标题</th>
										<th>时间</th>
										<th>操作</th>
									</tr>
									</thead>
									<tbody>
									<?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<tr>
										<td><?php echo $vo['ID']; ?></td>
										<td><?php echo $vo['Sequence']; ?></td>
										<td style="text-indent:<?php echo $vo['Count']*20; ?>px;"><?php if($vo['Count'] != '1'): ?>| -- <?php endif; ?><?php echo $vo['SortNamech']; ?></td>
										<td><?php echo $vo['AddTime']; ?></td>
										<td>
											<a href="/admin/news/sortedit/<?php echo $vo['ID']; ?>"><span class="label label-success">修改</span></a>
											<a href="/admin/news/sortdel/<?php echo $vo['ID']; ?>" onclick='return confirm("真的要删除?不可恢复!");'><span class="label label-danger">删除</span></a>
										</td>
									</tr>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div><!--/col-->
				</div><!--/row-->
			</div>
		<!-- end: Content -->
		<br><br><br>
		
		
		

	</div><!--/container-->
		
	

	<div class="clearfix"></div>
	
		
	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="__PUBLIC__/assets/js/jquery-2.1.1.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="__PUBLIC__/assets/js/jquery-1.11.1.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='__PUBLIC__/assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="__PUBLIC__/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="__PUBLIC__/assets/js/bootstrap.min.js"></script>
	
	
	<!-- page scripts -->
	<script src="__PUBLIC__/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	<script src="__PUBLIC__/assets/plugins/chosen/js/chosen.jquery.min.js"></script>
	<script src="__PUBLIC__/assets/plugins/autosize/jquery.autosize.min.js"></script>
	<script src="__PUBLIC__/assets/plugins/placeholder/jquery.placeholder.min.js"></script>
	<script src="__PUBLIC__/assets/plugins/wizard/jquery.bootstrap.wizard.min.js"></script>
	<script src="__PUBLIC__/assets/plugins/maskedinput/jquery.maskedinput.min.js"></script>
	
	<!-- theme scripts -->
	<script src="__PUBLIC__/assets/js/SmoothScroll.js"></script>
	<script src="__PUBLIC__/assets/js/jquery.mmenu.min.js"></script>
	<script src="__PUBLIC__/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="__PUBLIC__/assets/js/pages/form-wizard.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>