<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"D:\phpStudy\www/application/admin\view\product\test.html";i:1500399906;}*/ ?>
<!--百度编辑器开始-->
<script src="__PUBLIC__/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/ueditor1433/ueditor.config.js" type="text/javascript"></script>
<script src="__PUBLIC__/ueditor1433/ueditor.all.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor1433/lang/zh-cn/zh-cn.js"></script>




<div style="margin:50px auto; width:800px; line-height:25px;">


    <center><h1 style="color:#090; font-weight:bold;">ThinkPHP5.0+整合百度编辑器Ueditor1.4.3.3+</h1></center><br />
    作者：<span style="color:#f00; font-weight:bold;">符工@邦明</span><br />
    日期：西元二零一七年元月五日<br />
    网址：<a href="http://bbs.df81.com/" target="_blank"><span style="color:#f00; font-weight:bold;">http://bbs.df81.com/</span></a><br />
    不要怀念哥，哥只是个搬运工
    <br /><br />


    <form method="post" action="">
        <input name="aaa" type="text" id="img1" size="45" /><input type="button" value=" 上传图片 " onClick="upImage1();" />
        <input name="bbb" type="text" id="file1" size="45" /><input type="button" value=" 上传附件 " onclick="upFiles();"><br />&nbsp;
        <textarea name="ccc" id="content1a" style="width:100%; height:150px;"></textarea>
    </form>
</div>





<!--文件上传开始-->
<script type="text/plain" id="input_editor" style="display:none;"></script>
<script type="text/javascript">
//弹出文件上传的对话框
var url='<?php echo url('Ueditor/index'); ?>';
//实例化编辑器
var upload_editor = UE.getEditor('input_editor',{
    serverUrl :url,
});
function upFiles(){
    upload_editor.ready(function(){
        upload_editor.hide();//隐藏编辑器
        //文件上传监听
        // 需要在ueditor.all.min.js文件中找到d.execCommand("insertHtml",l)之后插入d.fireEvent('afterUpfile',b)
        upload_editor.addListener('afterUpfile', function (t, arg){
            document.getElementById("file1").value=arg[0].url;
        });
    });
    //弹出文件上传的对话框
    var myFiles = upload_editor.getDialog("attachment");
    myFiles.open();
}
</script>
<!--文件上传结束-->
<!--图片上传开始-->
<script type="text/plain" id="input_editor1" style="display:none;"></script>
<script type="text/javascript">
//弹出图片上传的对话框
var url='<?php echo url('Ueditor/index'); ?>';
//实例化编辑器
var upload_editor1 = UE.getEditor('input_editor1',{
    serverUrl :url,
});
function upImage1(){
    upload_editor1.ready(function(){
        upload_editor1.hide();//隐藏编辑器
        //监听图片上传
        upload_editor1.addListener('beforeInsertImage', function (t,arg){
            document.getElementById("img1").value=arg[0].src;
        });
    });
    //弹出图片上传的对话框
    var myImage1 = upload_editor1.getDialog("insertimage");
    myImage1.open();
}
</script>
<!--图片上传结束-->
<!--富文本编辑器开始-->
<script type="text/javascript">
    var url='<?php echo url('Ueditor/index'); ?>';
    var ue = UE.getEditor('content1a',{
        serverUrl :url,
    });
</script>
<!--富文本编辑器结束-->
</body>
</html>