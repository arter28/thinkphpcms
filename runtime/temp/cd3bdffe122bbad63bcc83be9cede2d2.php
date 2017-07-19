<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:55:"D:\phpStudy\www/application/index\view\index\about.html";i:1499836094;s:44:"./application/index/view/index/page_css.html";i:1499597800;s:47:"./application/index/view/index/page_header.html";i:1499846699;s:45:"./application/index/view/index/page_left.html";i:1499836049;s:47:"./application/index/view/index/page_footer.html";i:1499640704;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <title><?php echo $ThisName; ?>-<?php echo $ComName; ?></title> 
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $Descriptions; ?>">
    <!--== META TAGS ==--> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <!-- GOOGLE FONTS --> 
  <link rel="stylesheet" href="__PUBLIC__/css/google-font.css" /> 
  <!-- FONT-AWESOME ICON CSS --> 
  <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css" /> 
  <!--== ALL CSS FILES ==--> 
  <link rel="stylesheet" href="__PUBLIC__/css/style.css" /> 
  <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.css" /> 
  <link rel="stylesheet" href="__PUBLIC__/css/mob.css" /> 
  <link rel="stylesheet" href="__PUBLIC__/css/animate.css" /> 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
  <!--[if lt IE 9]>
	<script src="__PUBLIC__/js/html5shiv.js"></script>
	<script src="__PUBLIC__/js/respond.min.js"></script>
	<![endif]--> 
 </head> 
<body> 
    <!-- Preloader --> 
  <div id="preloader"> 
   <div id="status">
    &nbsp;
   </div> 
  </div> 
  <!--====== TOP HEADER ==========--> 
  <section> 
   <div class="rows head" data-spy="affix" data-offset-top="120"> 
    <div class="container"> 
     <div> 
      <!--====== BRANDING LOGO ==========--> 
      <div class="col-md-4 col-sm-12 col-xs-12 head_left logofont"> 
       <a href="/">Thinkphp test</a> 
      </div> 
      <!--====== HELP LINE & EMAIL ID ==========--> 
      <div class="col-md-8 col-sm-12 col-xs-12 head_right head_right_all"> 
       <ul> 
        <li><a href="#">咨询电话: <?php echo $telephone; ?></a> </li> 
        <li><a href="#">邮箱: <?php echo $Email; ?></a> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== NAVIGATION MENU ==========--> 
  <section> 
   <div class="rows main_menu"> 
    <div class="container res-menu"> 
     <nav class="navbar navbar-inverse"> 
      <div> 
       <!-- Brand and toggle get grouped for better mobile display(MOBILE MENU) --> 
       <div class="navbar-header"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
        <img src="__PUBLIC__/images/logo.png" alt="" class="mob_logo" /> 
       </div> 
       <!-- NAVIGATION MENU --> 
       <div class="collapse navbar-collapse" id="myNavbar"> 
        <ul class="nav navbar-nav"> 
         <li><a href="/">首页</a></li> 
         <li><a href="/about/2.html">公司简介</a></li> 
         <li><a href="/productlist.html">产品中心</a> </li>
         <li><a href="/newslist.html">新闻中心</a></li> 
         <li><a href="/contact.html">联系我们</a></li> 
        </ul> 
       </div> 
      </div> 
     </nav> 
    </div> 
   </div> 
  </section> 

<!--====== HOTELS LIST ==========--> 
  <section class="hot-page2-alp hot-page2-pa-sp-top"> 
   <div class="container"> 
    <div class="row inner_banner bg-none"> 
     <div class="hot-page2-alp-tit"> 
      <h1><?php echo $ThisName; ?></h1>
      <ul>
       <li><a href="/">首页</a></li>
       <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
       <li><a href="#inner-page-title" class="bread-acti"><?php echo $ThisName; ?></a></li>
      </ul> 
      <p><?php echo $Descriptions; ?></p> 
     </div> 
    </div> 
    <div class="row"> 
     <div class="hot-page2-alp-con"> 
      <!--LEFT LISTINGS--> 
      <div class="col-md-3 hot-page2-alp-con-left"> 
       <!--PART 1 : LEFT LISTINGS--> 
       <div class="hot-page2-alp-con-left-1"> 
        <h3>关于我们</h3> 
       </div> 
       <!--PART 2 : LEFT LISTINGS--> 
       <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb"> 
        <ul> 
         <?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
         <li> <a href="/about/<?php echo $vo['ID']; ?>.html"> 
           <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> 
            <img src="__PUBLIC__/images/tick.png" alt="" /> 
           </div> 
           <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2"> 
            <h5><?php echo $vo['AboutNamech']; ?></h5> 
           </div> 
           </a> </li> 
           <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul> 
       </div> 
              <!--PART 4 : LEFT LISTINGS--> 
       <div class="hot-page2-alp-l3 hot-page2-alp-l-com"> 
        <h4><i class="fa fa-map-marker" aria-hidden="true"></i> 最新文章</h4> 
       <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb"> 
          <ul> 
          <?php if(is_array($nlist) || $nlist instanceof \think\Collection || $nlist instanceof \think\Paginator): $i = 0; $__LIST__ = $nlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
         <li> <a href="/news/<?php echo $vo['ID']; ?>"> 
           <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2" style="width:100%;"> 
            <h5><?php echo $vo['NewsNamech']; ?></h5> 
            <span><?php echo $vo['SeoDescriptionch']; ?></span> 
           </div> 
           </a> </li> 
           <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul> 
        </div> 
       </div> 
       <!--END PART 4 : LEFT LISTINGS--> 
       <!--PART 5 : LEFT LISTINGS--> 
       <div class="hot-page2-alp-l3 hot-page2-alp-l-com"> 
        <h4><i class="fa fa-dollar" aria-hidden="true"></i> 推荐产品</h4> 
       <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb leftpro"> 
          <ul> 
          <?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li style="width:48%; <?php if($mod == '0'): ?>float:right;<?php endif; ?> height:155px; border-bottom:none;">
       <div class="v_place_img"> 
        <a href="/product/<?php echo $vo['ID']; ?>"><img src="<?php echo $vo['SmallPic']; ?>" alt="Tour Booking" title="<?php echo $vo['ProductNamech']; ?>" /></a> 
       </div> 
       <!-- TOUR TITLE & ICONS --> 
       <div class="b_pack rows" style="width:100%;"> 
        <!-- TOUR TITLE --> 
        <div> 
         <h4><a href="/product/<?php echo $vo['ID']; ?>" style="font-size:12px;"><?php echo $vo['ProductNamech']; ?></a></h4> 
        </div> 
       </div> 
            </li> 
            <?php endforeach; endif; else: echo "" ;endif; ?> 
          </ul> 
        </div> 
       </div> 

      </div> 
      <!--END LEFT LISTINGS--> 
      <!--RIGHT LISTINGS--> 
      <div class="col-md-9 hot-page2-alp-con-right"> 
       <div class="hot-page2-alp-con-right-1"> 
        <!--LISTINGS--> 
        <div class="row"> 
         <!--LISTINGS START--> 
         <div class="hot-page2-alp-r-list">
         
        <div class="tb-space" style="padding-top:55px;">
                <div class="col-md-6">
                    <span class="to-con-1">Company Profile</span>
                    <h2><?php echo $ThisName; ?></h2>
                    <p><?php echo $Descriptions; ?>
                    </p>
					<span class="to-con-2" style="font-size:24px;">咨询电话: <?php echo $telephone; ?></span>
                    <div class="ho-con-cont">
                        <a href="contact.html" class="to-con-3 link-btn">立即咨询</a>
                    </div>
                </div>
                <div class="col-md-6 ho-vid">
                    <img src="<?php echo $aboutpic; ?>" alt="">
                </div>
                <div class="col-md-12" style="margin-top:30px;">
                <?php echo $content; ?>
                </div>
        </div>
         </div> 
        </div> 
       </div> 
      </div> 
      <!--END RIGHT LISTINGS--> 
     </div> 
    </div> 
   </div> 
  </section> 
    <!--====== FOOTER 2 ==========--> 
  <section> 
   <div class="rows"> 
    <div class="footer tb-space"> 
     <div class="container"> 
      <div class="foot-sec2"> 
       <div> 
        <div class="row"> 
         <div class="col-sm-3 foot-spec foot-com"> 
          <h4>我们的服务</h4> 
          <p>本教程将向您讲解 Bootstrap 框架的基础，通过学习这些内容，您将可以轻松地创建 Web 项目。教程被分为 Bootstrap 基本结构、Bootstrap CSS、Bootstrap 布局组件和 Bootstrap 插件几个部分。</p> 
         </div> 
         <div class="col-sm-3 foot-spec foot-com"> 
          <h4>联系方式</h4> 
          <p>广东省佛山市顺德区</p> 
          <p> <span class="strong">电话: </span> <span class="highlighted"><?php echo $telephone; ?></span> </p> 
         </div> 
         <div class="col-sm-3 col-md-3 foot-spec foot-com"> 
          <h4>网站导航</h4> 
          <ul class="two-columns"> 
           <li> <a href="#">首页</a> </li> 
           <li> <a href="#">公司简介</a> </li> 
           <li> <a href="#">产品中心</a> </li> 
           <li> <a href="#">新闻中心 </a> </li> 
           <li> <a href="#">客户案例</a> </li> 
           <li> <a href="#">在线咨询</a> </li> 
           <li> <a href="#">联系我们</a> </li> 
           <li> <a href="#">网站地图</a> </li> 
          </ul> 
         </div> 
         <div class="col-sm-3 foot-social foot-spec foot-com"> 
          <h4>关注我们</h4> 
          <p>关注我们的社交平台，我们会不定时更新最新产品发布及案例资讯等。</p> 
          <ul> 
           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li> 
           <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li> 
           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li> 
           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li> 
           <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li> 
          </ul> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== FOOTER - COPYRIGHT ==========--> 
  <section> 
   <div class="rows copy"> 
    <div class="container"> 
     <p>Copyrights &copy; 2017 <?php echo $ComName; ?>. All Rights Reserved</p> 
    </div> 
   </div> 
  </section> 
  <section> 
   <div class="icon-float"> 
    <ul> 
     <li><a href="#" class="sh">1k <br /> Share</a> </li> 
     <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li> 
     <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li> 
     <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li> 
     <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li> 
     <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li> 
    </ul> 
   </div> 
  </section> 
  <!--========= Scripts ===========--> 
  <script src="__PUBLIC__/js/jquery-latest.min.js"></script> 
  <script src="__PUBLIC__/js/bootstrap.js"></script> 
  <script src="__PUBLIC__/js/wow.min.js"></script> 
  <script src="__PUBLIC__/js/custom.js"></script>
</body>
</html>