<?php
namespace app\index\controller;
use think\Controller;
use \think\Request;
use think\Db;

use app\index\model\Product as ProductModel;
use app\index\model\ProductSort as ProductSortModel;

class mycommpage extends Controller
{
	public function index()
    {
		$this->view->replace([
		'__PUBLIC__' => '/static',
		]);
        $result = Db::name('site')
		->where('ID', 1)
		->field(['keywordsch','ComNamech','Descriptionsch','Telephone','SiteTitlech','Email'])
		->select();
        $this->assign('keywords',$result[0]['keywordsch']);
        $this->assign('ComName',$result[0]['ComNamech']);
        $this->assign('Descriptions',$result[0]['Descriptionsch']);
        $this->assign('telephone',$result[0]['Telephone']);
        $this->assign('SiteTitle',$result[0]['SiteTitlech']);
        $this->assign('Email',$result[0]['Email']);
		
		$nlist = Db::name('news')
		->where('ViewFlagch',true)
		->field(['ID','NewsNamech','SunlyNetPic','SeoDescriptionch'])
		->limit(8)
		->order('ID desc')
		->select();
        $this->assign('nlist',$nlist);
		$plist = Db::name('products')
		->where('ViewFlagch',true)
		->where('CommendFlagch',true)
		->field(['ID','ProductNamech','SmallPic'])
		->limit(4)
		->order('ID desc')
		->select();
        $this->assign('plist',$plist);
    }
}

class product extends mycommpage
{
    public function index($id='')
    {
        parent::index();
		if($id==''){
			$this->assign('ThisName','产品中心');
			$list = ProductModel::paginate(12);
			$getid=0;
			$this->assign('getid',$getid);
		}else{
			$Newssort = ProductSortModel::get($id);
			$this->assign('ThisName',$Newssort->SortNamech);
			if(!empty($Newssort->SeoKeywordsch)){$this->assign('keywords',$Newssort->SeoKeywordsch);}
			if(!empty($Newssort->SeoDescriptionch)){$this->assign('Descriptions',$Newssort->SeoDescriptionch);}
			$this->assign('getid',$id);
			$list = ProductModel::where('SortID',$id)->paginate(12);
		}
		$this->assign('list',$list);
		$nslist = ProductSortModel::where('ParentID',0)->select();
		$this->assign('nslist',$nslist);
		
        return $this->fetch();
    }
    public function view($id='')
    {
        parent::index();
		if($id==''){
			$this->assign('ThisName','产品详情');
			$getid=0;
			$this->assign('getid',$getid);
		}else{
		$Newsview = ProductModel::get($id);
		$this->assign('ThisName',$Newsview->ProductNamech);
		$this->assign('getid',$Newsview->SortID);
		$this->assign('addtime',$Newsview->AddTime);
		$this->assign('bigpic',$Newsview->BigPic);
		$this->assign('content',$Newsview->Contentch);
		if(!empty($Newsview->SeoKeywordsch)){$this->assign('keywords',$Newsview->SeoKeywordsch);}
		if(!empty($Newsview->SeoDescriptionch)){$this->assign('Descriptions',$Newsview->SeoDescriptionch);}

		$newclick=$Newsview->ClickNumber+1;  //统计点击率
        $news['ID'] = (int) $id;
        $news['ClickNumber'] = $newclick;
        $result = ProductModel::update($news);

		}
		$nslist = ProductSortModel::where('ParentID',0)->select();
		$this->assign('nslist',$nslist);
        $result = Db::name('contact')
		->where('ID', 1)
		->field(['SeoDescriptionch','Contentch'])
		->select();
        $this->assign('contact',$result[0]['Contentch']);
		if(empty($result[0]['Descriptionsch'])){$this->assign('c_descriptions',$result[0]['SeoDescriptionch']);}
		$this->assign('messtime',date('Y-m-d H:i:s'));
        return $this->fetch();
    }
}
