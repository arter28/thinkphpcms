<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"D:\phpStudy\www/application/index\view\index\index.html";i:1499922946;s:44:"./application/index/view/index/page_css.html";i:1499597800;s:47:"./application/index/view/index/page_header.html";i:1499846699;s:47:"./application/index/view/index/page_footer.html";i:1499640704;}*/ ?>
﻿<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <title><?php echo $SiteTitle; ?>-<?php echo $ComName; ?></title> 
  <meta name="keywords" content="<?php echo $keywords; ?>" /> 
  <meta name="description" content="<?php echo $Descriptions; ?>" /> 
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

  <!--====== BANNER ==========--> 
  <!-- SECTION: HEADER --> 
  <section class="c3 c3-slider"> 
   <div class="container"> 
    <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
     <!-- Indicators --> 
     <ol class="carousel-indicators"> 
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
      <li data-target="#myCarousel" data-slide-to="1" class=""></li> 
      <li data-target="#myCarousel" data-slide-to="2" class=""></li> 
     </ol> 
     <!-- Wrapper for slides --> 
     <div class="carousel-inner" role="listbox"> 
      <div class="item active"> 
       <img src="__PUBLIC__/images/slider/1.png" alt="Chania" width="460" height="345" /> 
       <div class="carousel-caption slider-cap"> 
        <h1 class="wow fadeInDown" data-wow-duration="1s">Thinkphp框架</h1> 
        <p class="wow fadeInUp" data-wow-duration="1.5s">column 方法查询结果不存在，返回空数组</p> 
        <a href="#" class="hs1 wow fadeInUp" data-wow-duration="2.0s">马上查看</a> 
       </div> 
      </div> 
      <div class="item"> 
       <img src="__PUBLIC__/images/slider/2.png" alt="Chania" width="460" height="345" /> 
       <div class="carousel-caption slider-cap"> 
        <h1 class="wow fadeInDown" data-wow-duration="1s">查询某个字段的值可以用</h1> 
        <p class="wow fadeInUp" data-wow-duration="1.5s">Db::table('think_user')-&gt;where('id',1)-&gt;value('name');</p> 
        <a href="#" class="hs1 wow fadeInUp" data-wow-duration="2.0s">马上查看</a> 
       </div> 
      </div> 
      <div class="item"> 
       <img src="__PUBLIC__/images/slider/3.png" alt="Chania" width="460" height="345" /> 
       <div class="carousel-caption slider-cap"> 
        <h1 class="wow fadeInDown" data-wow-duration="1s">数据集分批处理</h1> 
        <p class="wow fadeInUp" data-wow-duration="1.5s">如果你需要处理成千上百条数据库记录，可以考虑使用chunk方法</p> 
        <a href="#" class="hs1 wow fadeInUp" data-wow-duration="2.0s">马上查看</a> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== SLIDER ENQUIRY ==========--> 
  <section> 
   <div class="rows home_enq"> 
    <div class="container"> 
     <div class="home_form"> 
      <!-- ENQUIRY FORM SUCCESS MESSAGE --> 
      <div class="succ_mess_qe">
       Thank you for contacting us we will get back to you soon.
      </div> 
      <!-- SLIDER ENQUIRY FORM --> 
      <form method="post" action="/index/message/sends/"> 
       <ul> 
        <li class="col-md-2 col-sm-12 col-xs-12"> <h4>在线咨询</h4> </li> 
        <li class="col-md-2 col-sm-6 col-xs-12"> <input type="text" id="Linkman" name="Linkman" placeholder="姓名" required="" /> </li> 
        <li class="col-md-2 col-sm-6 col-xs-12"> <input type="email" id="Email" name="Email" placeholder="邮箱" required="" /> </li> 
        <li class="col-md-2 col-sm-6 col-xs-12"> <input type="number" id="Telephone" name="Telephone" placeholder="手机" required="" /> </li> 
        <li class="col-md-2 col-sm-6 col-xs-12"> <input type="text" id="Content" name="Content" placeholder="内容" required="" /><input type="hidden" name="MesName" id="MesName" value="首页快捷留言"/></li> 
        <li class="col-md-2 col-sm-6 col-xs-12"> <input type="submit" value="发送" /> </li> 
       </ul> 
      </form> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== HOME PLACES ==========--> 
  <section> 
   <div class="rows pad-bot-redu tb-space"> 
    <div class="container"> 
     <!-- TITLE & DESCRIPTION --> 
     <div class="spe-title"> 
      <h2>响应式 <span>Thinkphp</span> web开发</h2> 
      <div class="title-line"> 
       <div class="tl-1"></div> 
       <div class="tl-2"></div> 
       <div class="tl-3"></div> 
      </div> 
      <p>使用db助手函数默认每次都会重新连接数据库，而使用Db::name或者Db::table方法的话都是单例的。db函数如果需要采用相同的链接，默认情况下，find和select方法返回的都是数组。</p> 
     </div> 
     <div>
       <?php if(is_array($plist) || $plist instanceof \think\Collection || $plist instanceof \think\Paginator): $i = 0; $__LIST__ = $plist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
      <!-- TOUR PLACE 1 --> 
      <div class="col-md-4 col-sm-6 col-xs-12 b_packages"> 
       <!-- IMAGE --> 
       <div class="v_place_img"> 
        <a href="/product/<?php echo $vo['ID']; ?>"><img src="<?php echo $vo['SmallPic']; ?>" alt="Tour Booking" title="<?php echo $vo['ProductNamech']; ?>" /></a> 
       </div> 
       <!-- TOUR TITLE & ICONS --> 
       <div class="b_pack rows"> 
        <!-- TOUR TITLE --> 
        <div class="col-md-8 col-sm-8"> 
         <h4><a href="/product/<?php echo $vo['ID']; ?>"><?php echo $vo['ProductNamech']; ?><span class="v_pl_name">(<?php echo $vo['AddTime']; ?>)</span></a></h4> 
        </div> 
       </div> 
      </div> <?php endforeach; endif; else: echo "" ;endif; ?> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== HOME HOTELS ==========--> 
  <section> 
   <div class="rows tb-space pad-top-o pad-bot-redu"> 
    <div class="container"> 
     <!-- TITLE & DESCRIPTION --> 
     <div class="spe-title"> 
      <h2>查看 <span>最新动态</span> 才发现你来晚了</h2> 
      <div class="title-line"> 
       <div class="tl-1"></div> 
       <div class="tl-2"></div> 
       <div class="tl-3"></div> 
      </div> 
      <p>World's leading Hotel Booking website,Over 30,000 Hotel rooms worldwide. Book Hotel rooms and enjoy your holidays with distinctive experience</p> 
     </div> 
     <!-- HOTEL GRID --> 
     <div class="to-ho-hotel">
       <?php if(is_array($nlist) || $nlist instanceof \think\Collection || $nlist instanceof \think\Paginator): $i = 0; $__LIST__ = $nlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
      <!-- HOTEL GRID --> 
      <div class="col-md-4"> 
       <div class="to-ho-hotel-con"> 
        <div class="to-ho-hotel-con-1"> 
         <div class="hot-page2-hli-3"> 
          <img src="__PUBLIC__/images/hci1.png" alt="" /> 
         </div> 
         <div class="hom-hot-av-tic">
           查看: <?php echo $vo['ClickNumber']; ?> 
         </div> 
         <a href="/news/<?php echo $vo['ID']; ?>"><img src="<?php echo $vo['SunlyNetPic']; ?>" alt="<?php echo $vo['NewsNamech']; ?>" /></a> 
        </div> 
        <div class="to-ho-hotel-con-23"> 
         <div class="to-ho-hotel-con-2"> 
          <h4><?php echo $vo['NewsNamech']; ?></h4> 
         </div> 
         <div class="to-ho-hotel-con-3"> 
          <ul> 
           <li>发布: <?php echo $vo['AddTime']; ?> 
            <div class="dir-rat-star ho-hot-rat-star newsdec">
              <?php echo $vo['SeoDescriptionch']; ?> 
            </div> </li> 
           <li></li> 
          </ul> 
         </div> 
         <div class="to-ho-hotel-con-4"> 
          <a href="/news/<?php echo $vo['ID']; ?>" class="link-btn hom-hot-book-btn">View More</a> 
         </div> 
        </div> 
       </div> 
      </div> <?php endforeach; endif; else: echo "" ;endif; ?> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== SECTION: FREE CONSULTANT ==========--> 
  <section> 
   <div class="tb-space tour-consul"> 
    <div class="container"> 
     <div class="col-md-6"> 
      <span class="to-con-1">About us</span> 
      <h2><?php echo $ComName; ?></h2> <?php echo $aboutcon; ?> 
      <span class="to-con-2">咨询电话: <?php echo $telephone; ?></span> 
      <div class="ho-con-cont"> 
       <a href="/message.html" class="to-con-3 link-btn">在线咨询</a> 
       <a href="/contact.html" class="to-con-4 link-btn">联系我们</a> 
      </div> 
     </div> 
     <div class="col-md-6 ho-vid"> 
      <img src="<?php echo $aboutpic; ?>" alt="<?php echo $ComName; ?>" /> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== POPULAR TOUR PLACES ==========--> 
  <section> 
   <div class="rows tb-space"> 
    <div class="pla1 p-home container"> 
     <!-- TITLE & DESCRIPTION --> 
     <div class="spe-title"> 
      <h2>我的 <span>Thinkphp</span> 开发历程</h2> 
      <div class="title-line"> 
       <div class="tl-1"></div> 
       <div class="tl-2"></div> 
       <div class="tl-3"></div> 
      </div> 
      <p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架。Bootstrap 是基于 HTML、CSS、JAVASCRIPT 的，它简洁灵活，使得 Web 开发更加快捷。</p> 
     </div> 
     <div class="popu-places-home">
       <?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> 
      <div class="col-md-6 col-sm-6 col-xs-12 place"> 
       <div class="col-md-6 col-sm-12 col-xs-12"> 
        <img src="<?php echo $vo['SunlyNetPic']; ?>" alt="<?php echo $vo['CaseNamech']; ?>" /> 
       </div> 
       <div class="col-md-6 col-sm-12 col-xs-12 indexcase"> 
        <h3><span><?php echo $vo['CaseNamech']; ?></span> <?php echo $vo['AddTime']; ?></h3> 
        <p><?php echo $vo['SeoDescriptionch']; ?></p> 
        <a href="/case/show/<?php echo $vo['ID']; ?>" class="link-btn">更多</a> 
       </div> 
      </div> <?php endforeach; endif; else: echo "" ;endif; ?> 
     </div> 
    </div> 
   </div> 
  </section> 
  <!--====== REQUEST A QUOTE ==========--> 
  <section> 
   <div class="form tb-space"> 
    <div class="rows container"> 
     <!-- TITLE & DESCRIPTION --> 
     <div class="spe-title"> 
      <h2>留下您的足迹 <span>建议及留言</span> 这是一种美德</h2> 
      <div class="title-line"> 
       <div class="tl-1"></div> 
       <div class="tl-2"></div> 
       <div class="tl-3"></div> 
      </div> 
      <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide. Book travel packages and enjoy your holidays with distinctive experience</p> 
     </div> 
     <!-- REQUEST A QUOTE --> 
     <div class="col-md-6 col-sm-6 col-xs-12 form_1"> 
      <!-- THANK YOU MESSAGE --> 
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
     <!-- FAMILY IMAGE(YOU CAN USE ANY PNG IMAGE) --> 
     <div class="col-md-6 col-sm-6 col-xs-12 family"> 
      <img src="__PUBLIC__/images/family.png" alt="" /> 
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