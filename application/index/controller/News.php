<?php
namespace app\index\controller;
use think\Controller;
use \think\Request;
use think\Db;

use app\index\model\News as NewsModel;
use app\index\model\NewsSort as NewsSortModel;

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

class news extends mycommpage
{
    public function index($id='')
    {
        parent::index();
		if($id==''){
			$this->assign('ThisName','新闻中心');
			$list = NewsModel::paginate(12);
			$getid=0;
			$this->assign('getid',$getid);
		}else{
		$Newssort = NewsSortModel::get($id);
		$this->assign('ThisName',$Newssort->SortNamech);
		if(!empty($Newssort->SeoKeywordsch)){$this->assign('keywords',$Newssort->SeoKeywordsch);}
		if(!empty($Newssort->SeoDescriptionch)){$this->assign('Descriptions',$Newssort->SeoDescriptionch);}
		$this->assign('getid',$id);
		$list = NewsModel::where('SortID',$id)->paginate(12);
		}
		$this->assign('list',$list);
		$nslist = NewsSortModel::where('ParentID',0)->select();
		$this->assign('nslist',$nslist);
		
        return $this->fetch();
    }
    public function view($id='')
    {
        parent::index();
		if($id==''){
			$this->assign('ThisName','新闻详情');
			$getid=0;
			$this->assign('getid',$getid);
		}else{
		$Newsview = NewsModel::get($id);
		$this->assign('ThisName',$Newsview->NewsNamech);
		$this->assign('getid',$Newsview->SortID);
		$this->assign('addtime',$Newsview->AddTime);
		$this->assign('content',$Newsview->Contentch);
		if(!empty($Newsview->SeoKeywordsch)){$this->assign('keywords',$Newsview->SeoKeywordsch);}
		if(!empty($Newsview->SeoDescriptionch)){$this->assign('Descriptions',$Newsview->SeoDescriptionch);}
		$newclick=$Newsview->ClickNumber+1;

            $news['ID'] = (int) $id;
            $news['ClickNumber'] = $newclick;
            $result = NewsModel::update($news);
		}
		$nslist = NewsSortModel::where('ParentID',0)->select();
		$this->assign('nslist',$nslist);
        return $this->fetch();
    }
}
