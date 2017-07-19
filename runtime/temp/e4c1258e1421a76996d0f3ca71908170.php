<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"D:\phpStudy\www/application/index\view\product\view.html";i:1499922303;s:44:"./application/index/view/index/page_css.html";i:1499597800;s:47:"./application/index/view/index/page_header.html";i:1499846699;s:47:"./application/index/view/index/page_footer.html";i:1499640704;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
 <head> 
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

  <section class="hot-page2-alp hot-page2-pa-sp-top"> 
   <div class="container"> 
    <!--====== BANNER ==========--> 
    <section> 
     <div class="rows inner_banner bg-none"> 
      <div class="container"> 
       <h2><?php echo $ThisName; ?></h2>
       <ul>
        <li><a href="/">首页</a></li>
        <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
        <li><a href="/productlist.html" class="bread-acti">产品中心</a></li>
       </ul> 
       <p><?php echo $Descriptions; ?></p> 
      </div> 
     </div> 
    </section>

    <section> 
     <div class="form-spac rows" style="padding-top:55px; padding-bottom:55px; background:#fff;"> 
      <div class="container" style="width:100%;"> 
       <!-- TITLE & DESCRIPTION --> 
     <div class="spe-title col-md-12"> 
         <?php if(is_array($nslist) || $nslist instanceof \think\Collection || $nslist instanceof \think\Paginator): $i = 0; $__LIST__ = $nslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($getid == $vo['ID'])): ?>
            <a href="/productlist/<?php echo $vo['ID']; ?>.html" class="lefthot"><?php echo $vo['SortNamech']; ?></a>
            <?php else: ?>
            <a href="/productlist/<?php echo $vo['ID']; ?>.html" class="leftun"><?php echo $vo['SortNamech']; ?></a>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      <div class="title-line" style="margin-top:25px;"> 
       <div class="tl-1"></div> 
       <div class="tl-2"></div> 
       <div class="tl-3"></div> 
      </div> 
     </div> 
       <div class="spe-title col-md-12"> 
        <h2><?php echo $ThisName; ?></h2> 
        <div class="title-line">
         <div class="tl-1"></div>
         <div class="tl-2"></div>
         <div class="tl-3"></div>
        </div> 
        <p>发布时间：<?php echo $addtime; ?>&nbsp;&nbsp;来源：<?php echo $ComName; ?></p>
       </div> 
       <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp bigpic"><center>
         <img src="<?php echo $bigpic; ?>" alt="<?php echo $ThisName; ?>">
         <p>&nbsp;</p>
       </center></div> 
       <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s"> 
         <?php echo $content; ?>
       </div> 
      </div> 
     </div> 
    </section> 
  
    <section> 
     <div class="form form-spac rows"> 
      <div class="container"> 
       <!-- TITLE & DESCRIPTION --> 
       <div class="spe-title col-md-12"> 
        <h2>如果我们的产品合适您，请不要犹豫 <span>立即咨询</span></h2> 
        <div class="title-line">
         <div class="tl-1"></div>
         <div class="tl-2"></div>
         <div class="tl-3"></div>
        </div> 
        <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p>
       </div> 
       <div class="col-md-6 col-sm-6 col-xs-12 form_1 wow fadeInLeft" data-wow-duration="1s"> 
        <!--====== THANK YOU MESSAGE ==========--> 
        <div class="succ_mess">
         Thank you for contacting us we will get back to you soon.
        </div> 
        <form method="post" action="/index/message/send/"> 
         <ul> 
          <li> <input type="text" name="Linkman" value="" id="Linkman" placeholder="姓名" required="" /> </li> 
          <li> <input type="tel" name="Telephone" value="" id="Telephone" placeholder="电话" required="" /> </li> 
          <li> <input type="email" name="Email" value="" id="Email" placeholder="邮箱" required="" /> </li> 
          <li> <input type="text" name="MesName" value="" id="MesName" placeholder="主题" required="" /> </li> 
          <li> <input type="text" name="QQ" value="" id="QQ" placeholder="QQ" required="" /> </li> 
          <li> <input type="text" name="Address" value="" id="Address" placeholder="地址" required="" /> </li> 
          <li> <textarea name="Content" cols="40" rows="3" id="Content" placeholder="咨询/建议内容"></textarea><input type="hidden" name="AddTime" value="<?php echo $messtime; ?>"></li> 
          <li> <input type="submit" value="发送"/> </li> 
         </ul> 
        </form> 
       </div> 
       <!--====== COMMON NOTICE ==========--> 
       <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="1s"> 
        <div class="rows book_poly"> 
         <h3><?php echo $ComName; ?></h3> 
         <p><?php echo $c_descriptions; ?></p> 
         <?php echo $contact; ?>
        </div> 
       </div> 
      </div> 
     </div> 
    </section> 
  
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