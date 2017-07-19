<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\phpStudy\www/application/index\view\message\send.html";i:1499868669;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">
 <head> 
  <meta charset="utf-8" /> 
  <title>信息提交-<?php echo $ComName; ?></title> 
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="description" content="<?php echo $Descriptions; ?>">
  <style>
/* This parent can be any width and height */
html,body{height:100%; background:#ccc;}
.block {
  text-align: center;
  background:#fff;
  border:1px #999 solid;
  margin:0 auto;
}

/* The ghost, nudged to maintain perfect centering */
.block:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -0.25em; /* Adjusts for spacing */
}

/* The element to be centered, can
   also be of any width and height */ 
.centered {
  display: inline-block;
  vertical-align: middle;
  width: 50%;
}
  </style>
 </head> 
 <body> 
  <div class="block" style="height:200px; width:400px;">
    <div class="centered">
        <p><?php echo $thismsn; ?></p>
        <center><a href="javascript:;" onclick="<?php echo $backurl; ?>">返回</a></center>
    </div>
</div>
 </body>
</html>