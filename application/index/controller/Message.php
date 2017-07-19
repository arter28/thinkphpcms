<?php
namespace app\index\controller;
use think\Controller;
use \think\Request;
use think\Db;
use \think\Validate;

//use app\index\model\Message as MessageModel;

class Message extends Controller
{
	public function send()
	{
        $result = Db::name('site')
		->where('ID', 1)
		->field(['keywordsch','ComNamech','Descriptionsch'])
		->select();
        $this->assign('keywords',$result[0]['keywordsch']);
        $this->assign('ComName',$result[0]['ComNamech']);
        $this->assign('Descriptions',$result[0]['Descriptionsch']);
		
	  $rule = [
	  ['Linkman' , 'require|min:3','姓名必须填写|姓名不能少于3个字符'],
	  ['Email' , 'email','邮箱格式错误'],
	  ['Telephone' , 'require|min:10','电话必须填写|电话不能少于10个字符'],
	  ['MesName' , 'require|min:10','标题必须填写|标题不能少于10个字符'],
	  ['Content' , 'require|min:20','内容必须填写|内容不能少于20个字符'],
	  ];
	  $data = input('post.');
	  // 数据验证
//	  $result = $this->validate($data,'Message');
//	  if (true !== $result) {
//	  //return $result;
//	  $this->assign('thismsn',$result->getError());
//	  $this->assign('backurl','window.history.back(-1)');
//	  }
	  
	  $validate = new Validate($rule);
	  $result   = $validate->check($data);
	  if(!$result){
        $this->assign('thismsn',$validate->getError());
		$this->assign('backurl','window.history.back(-1)');
	  }else{
	  $user = new MessageModel;
	  // 数据保存
	  $user->allowField(true)->save($data);
	  $this->assign('thismsn','留言成功。');
	  $this->assign('backurl',"javascript:window.location.href='/'");
	  //return '[ ' . $user->MesName . '】留言成功。';
	  }
	  return $this->fetch();
	  
	}
	
	public function sends()
	{
        $result = Db::name('site')
		->where('ID', 1)
		->field(['keywordsch','ComNamech','Descriptionsch'])
		->select();
        $this->assign('keywords',$result[0]['keywordsch']);
        $this->assign('ComName',$result[0]['ComNamech']);
        $this->assign('Descriptions',$result[0]['Descriptionsch']);
		
	  $rule = [
	  ['Linkman' , 'require|min:3','姓名必须填写|姓名不能少于3个字符'],
	  ['Email' , 'email','邮箱格式错误'],
	  ['Telephone' , 'require|min:10','电话必须填写|电话不能少于10个字符'],
	  ['Content' , 'require|min:20','内容必须填写|内容不能少于20个字符'],
	  ];
	  $data = input('post.');
	  
	  $validate = new Validate($rule);
	  $result   = $validate->check($data);
	  if(!$result){
        $this->assign('thismsn',$validate->getError());
		$this->assign('backurl','window.history.back(-1)');
	  }else{
	  $user = new MessageModel;
	  // 数据保存
	  $user->allowField(true)->save($data);
	  $this->assign('thismsn','留言成功。');
	  $this->assign('backurl',"javascript:window.location.href='/'");
	  //return '[ ' . $user->MesName . '】留言成功。';
	  }
	  return $this->fetch();
	  
	}
}
