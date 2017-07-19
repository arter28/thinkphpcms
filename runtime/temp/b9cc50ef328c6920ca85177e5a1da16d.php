<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:52:"D:\phpStudy\www/application/admin\view\news\add.html";i:1500447266;s:51:"./application/admin/view/index/page_googlefont.html";i:1500082899;s:44:"./application/admin/view/index/page_top.html";i:1500083113;s:45:"./application/admin/view/index/page_menu.html";i:1500445347;}*/ ?>
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
		<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
		<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
		<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="badge">5</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>在线留言</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <?php if(is_array($mlist) || $mlist instanceof \think\Collection || $mlist instanceof \think\Paginator): $i = 0; $__LIST__ = $mlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="avatar">
                        <a href="/admin/index/message/<?php echo $vo['ID']; ?>">
                            <div><?php echo $vo['MesName']; ?></div>
                            <small><?php echo $vo['AddTime']; ?></small>
                            <?php if(($vo['ViewFlagch'])): ?>
                            <span class="label label-info">NEW</span>
                            <?php endif; ?>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li class="dropdown-menu-footer text-center">
                        <a href="/admin/index/messagelist/">更多留言</a>
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
                    <ul class="nav sub">
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
		<div class="main ">
		
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-tags"></i>添加新闻</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="/admin/index/index/">首页</a></li>
						<li><i class="fa fa-th"></i><a href="#">新闻管理</a></li>
						<li><i class="fa fa-list-alt"></i><a href="#">添加新闻</a></li>
					</ol>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-tags red"></i><strong>新闻</strong></h2>
						</div>
						<div class="panel-body">
							
							<div id="wizard1" class="wizard-type1">
								<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
								<script>
                                    var app = angular.module('myApp', []);
                                    app.controller('registerCtrl', function($scope) {
                                    });
								</script>
								<div ng-app="myApp" ng-controller="registerCtrl">
								<form class="form-horizontal" name="registerForm" method="post" action="/admin/news/saveadd" novalidate>
								<div class="tab-content">
								    <div class="tab-pane" style="display: block;">
											<div class="form-group">
							                    <label for="NewsNamech">标题</label>
												<input type="text" id="NewsNamech" name="NewsNamech" class="form-control" value="" ng-model="NewsNamech" required>
												<span style="color: red" ng-show="registerForm.NewsNamech.$invalid">
                                            <span ng-show="registerForm.NewsNamech.$error.required">*请输入标题</span>
							                </div>
										<div class="form-group">
											<label for="SeoKeywordsch">关键词</label>
											<input type="text" id="SeoKeywordsch" name="SeoKeywordsch" class="form-control" value="" ng-model="SeoKeywordsch" required>
											<span style="color: red" ng-show="registerForm.SeoKeywordsch.$invalid">
                                            <span ng-show="registerForm.SeoKeywordsch.$error.required">*请输入关键词</span>
										</div>
										<div class="form-group">
											<label for="SeoDescriptionch">描述</label>
											<textarea class="form-control limitTextarea" maxlength="250" rows="3" id="SeoDescriptionch" name="SeoDescriptionch" ng-model="SeoDescriptionch" required></textarea>
											<span style="color: red" ng-show="registerForm.SeoDescriptionch.$invalid">
                                            <span ng-show="registerForm.SeoDescriptionch.$error.required">*请输入描述</span>
										</div>
										<div class="form-group">
											<label for="ParentID">分类</label>
											<select id="ParentID" name="SortID" class="form-control">
												<?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
												<option value="<?php echo $vo['ID']; ?>"><?php if($vo['Count'] == '2'): ?>-- <?php endif; if($vo['Count'] == '3'): ?>---- <?php endif; ?><?php echo $vo['SortNamech']; ?></option>
												<?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</div>
										<div class="form-group">
											<label for="Contentch">内容</label>
											<textarea style="height: 300px;" id="Contentch" name="Contentch"></textarea>
											<script type="text/javascript">
                                                var ue = UE.getEditor('Contentch');
											</script>
										</div>
										<script src="/kindeditor/kindeditor-min.js"></script>
										<script>
                                            KindEditor.ready(function(K) {
                                                var uploadbutton = K.uploadbutton({
                                                    button : K('#uploadButton')[0],
                                                    fieldName : 'imgFile',
                                                    url: '/kindeditor/php/upload_json.php?dir=image',
                                                    afterUpload : function(data) {
                                                        if (data.error === 0) {
                                                            var url = K.formatUrl(data.url, 'absolute');
                                                            K('#SunlyNetPic').val(url);
                                                        } else {
                                                            alert(data.message);
                                                        }
                                                    },
                                                    afterError : function(str) {
                                                        alert('自定义错误信息: ' + str);
                                                    }
                                                });
                                                uploadbutton.fileBox.change(function(e) {
                                                    uploadbutton.submit();
                                                });
                                            });
										</script>
										<style>
											/* inputbox */
											.ke-upload-area {
												position: relative;
												overflow: hidden;
												margin: 0;
												padding: 0;
												*height: 25px;
											}
											.ke-upload-area .ke-button {
												display:table;
												cursor:pointer;
											}
											.ke-upload-area .ke-upload-file {
												position: absolute;
												font-size:inherit;
												top: 0;
												left: 0;
												padding: 0;
												margin: 3 0 0 0;
												z-index: 811212;
												border: 0 none;
											}
										</style>
										<div class="form-group">
											<label for="SunlyNetPic">缩略图</label>
											<input type="text" class="form-control" value="" name="SunlyNetPic" id="SunlyNetPic" placeholder="请上传图片...">
											<input type="button" id="uploadButton" value="上传图片..."/>
										</div>
										<div class="form-group" style="display:none;">
											<label for="Sequence">排序</label>
											<input type="text" class="form-control" value="" name="Sequence" id="Sequence" placeholder="请输入排序号..." ng-model="Sequence" required>
										</div>
								    </div>

								</div>
								
								<div class="actions">
									<input type="button" class="btn btn-default button-previous" name="prev" value="Prev" style="visibility: hidden;"/>
									<input type="submit" class="btn btn-primary button-finish pull-right" name="finish" value="修改" ng-disabled="registerForm.AboutNamech.$invalid || registerForm.SeoKeywordsch.$invalid || registerForm.SeoDescriptionch.$invalid"/>
								</div>
								</form>
								</div>
							</div>

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