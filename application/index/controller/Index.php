<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

use app\index\model\About as AboutModel;

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
    }
}


class Index extends mycommpage
{
    public function index()
    {
        parent::index();

        $resultr = Db::name('site')
            ->where('ID', 1)
            ->field(['indexclick'])
            ->select();
        $newclick=$resultr[0]['indexclick']+1;
        $result = Db::name('site')
            ->where('ID', 1)
            ->update(['indexclick' => $newclick]);

		$plist = Db::name('products')
		->where('ViewFlagch',true)
		->field(['ID','ProductNamech','SmallPic','AddTime'])
		->limit(6)
		->order('ID desc')
		->select();
        $this->assign('plist',$plist);
		$nlist = Db::name('news')
		->where('ViewFlagch',true)
		->field(['ID','NewsNamech','SunlyNetPic','ClickNumber','SeoDescriptionch','AddTime'])
		->limit(3)
		->order('ID desc')
		->select();
        $this->assign('nlist',$nlist);
        $about = Db::name('about')
		->where('ID', 3)
		->field(['Contentch','SunlyNetPic'])
		->select();
        $this->assign('aboutcon',$about[0]['Contentch']);
        $this->assign('aboutpic',$about[0]['SunlyNetPic']);
		$clist = Db::name('case')
		->where('ViewFlagch',true)
		->field(['ID','CaseNamech','SunlyNetPic','SeoDescriptionch','AddTime'])
		->limit(4)
		->order('ID desc')
		->select();
        $this->assign('clist',$clist);
        $this->assign('messtime',date('Y-m-d H:i:s'));
        return $this->fetch();
    }
	public function about($id)
    {
        parent::index();
        $result = Db::name('about')
		->where('ID', $id)
		->field(['SeoKeywordsch','AboutNamech','SeoDescriptionch','Contentch','SunlyNetPic','ClickNumber'])
		->select();
        $this->assign('ThisName',$result[0]['AboutNamech']);
        $this->assign('content',$result[0]['Contentch']);
        $this->assign('aboutpic',$result[0]['SunlyNetPic']);
		if(empty($result[0]['keywordsch'])){$this->assign('keywords',$result[0]['SeoKeywordsch']);}
		if(empty($result[0]['Descriptionsch'])){$this->assign('Descriptions',$result[0]['SeoDescriptionch']);}
		$newclick=$result[0]['ClickNumber']+1;

        $about['ID'] = (int) $id;
        $about['ClickNumber'] = $newclick;
        $result = AboutModel::update($about);
		
		$alist = Db::name('about')
		->where('ParentID',1)
		->field(['ID','AboutNamech'])
		->order('Sequence asc,ID desc')
		->select();
        $this->assign('alist',$alist);
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
		
		
		
        return $this->fetch();
    }
	public function contact()
    {
        parent::index();
        $result = Db::name('contact')
		->where('ID', 1)
		->field(['SeoKeywordsch','AboutNamech','SeoDescriptionch','Contentch'])
		->select();
        $this->assign('ThisName',$result[0]['AboutNamech']);
        $this->assign('content',$result[0]['Contentch']);
		if(empty($result[0]['keywordsch'])){$this->assign('keywords',$result[0]['SeoKeywordsch']);}
		if(empty($result[0]['Descriptionsch'])){$this->assign('Descriptions',$result[0]['SeoDescriptionch']);}
        $this->assign('messtime',date('Y-m-d H:i:s'));
        return $this->fetch();
    }
}
