<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\phpStudy\www/application/admin\view\index\login.html";i:1500079640;}*/ ?>
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

		<!-- Favicon and touch icons -->
		<link rel="shortcut icon" href="__PUBLIC__/assets/ico/favicon.ico" type="image/x-icon" />

	    <!-- Css files -->
	    <link href="__PUBLIC__/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/jquery.mmenu.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	    <link href="__PUBLIC__/assets/css/style.min.css" rel="stylesheet">
		<link href="__PUBLIC__/assets/css/add-ons.min.css" rel="stylesheet">
		<style>
			footer {
				display: none;
			}
		</style>

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
</head>

<body>
	<div class="container-fluid content">
		<div class="row">
			<div id="content" class="col-sm-12 full">
				<div class="row">
					<div class="login-box">
					
						<div class="header">
						SunlyNet系统登录
						</div>
						<script>
                            function refreshVerify() {
                                var ts = Date.parse(new Date())/1000;
                                var img = document.getElementById('verify_img');
                                img.src = "/captcha?id="+ts;
                            }
						</script>
						<form class="form-horizontal login" action="<?php echo url('check'); ?>" method="post">
						
							<fieldset class="col-sm-12">
								<div class="form-group">
									<div class="controls row">
										<div class="input-group col-sm-12">	
											<input type="text" class="form-control" name="username" id="username" placeholder="用户名"/>
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>	
									</div>
								</div>
							
								<div class="form-group">
									<div class="controls row">
										<div class="input-group col-sm-12">	
											<input type="password" class="form-control" name="password" id="password" placeholder="密码"/>
											<span class="input-group-addon"><i class="fa fa-key"></i></span>
										</div>	
									</div>
								</div>
								<div class="form-group">
									<div class="controls row">
										<div class="input-group col-sm-12">
											<input type="text" class="form-control" name="code" id="code" placeholder="验证码"/>
											<span class="input-group-addon"><i class="fa fa-key"></i></span>
										</div>
										<div><img id="verify_img" src="<?php echo captcha_src(); ?>" alt="验证码" onclick="refreshVerify()">
											<a href="javascript:refreshVerify()">点击刷新</a></div>
									</div>
								</div>

								<div class="row">
							
									<button type="submit" class="btn btn-lg btn-primary col-xs-12">登录</button>
							
								</div>
								
							</fieldset>	

						</form>

						<div class="clearfix"></div>				
						
					</div>
				</div><!--/row-->
		
			</div>	
			
		</div><!--/row-->		
	
		

	</div><!--/container-->
		
		
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
	
	<!-- theme scripts -->
	<script src="__PUBLIC__/assets/js/SmoothScroll.js"></script>
	<script src="__PUBLIC__/assets/js/jquery.mmenu.min.js"></script>
	<script src="__PUBLIC__/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="__PUBLIC__/assets/js/pages/login.js"></script>
	
	<!-- end: JavaScript-->
	
</body>
</html>