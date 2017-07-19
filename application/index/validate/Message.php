<?php
namespace app\index\validate;
use think\Validate;

class Message extends Validate
{
// 验证规则
protected $rule = [
['Linkman' , 'require|min:3','姓名必须填写|姓名不能少于3个字符'],
['Email' , 'email','邮箱格式错误'],
['Telephone' , 'require|min:10','电话必须填写|电话不能少于10个字符'],
['MesName' , 'require|min:10','标题必须填写|标题不能少于10个字符'],
['Content' , 'require|min:20','内容必须填写|内容不能少于20个字符'],
];
}
?>