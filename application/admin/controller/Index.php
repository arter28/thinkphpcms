<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Cookie;
use think\Request;

use app\index\model\Site as SiteModel;
use app\index\model\About as AboutModel;
use app\index\model\News as NewsModel;
use app\index\model\NewsSort as NewsSortModel;
use app\index\model\Product as ProductModel;
use app\index\model\ProductSort as ProductSortModel;
use app\index\model\Message as MessageModel;
use app\index\model\Admin as AdminModel;

use app\admin\model\Tool;

class Admincomm extends Controller
{
    public function index()
    {
        cookie(['prefix' => 'sunlynet_', 'expire' => 3600]);   //设置和读取cookie都要初始化
        if(cookie('logincheck')!='success')
        {
            return $this->redirect('admin/index/login');
        }
        $this->view->replace([
            '__PUBLIC__' => '/static',
        ]);
        $mlist = MessageModel::order('ViewFlagch asc,ID desc')->limit(5)->select();
        $this->assign('mlist',$mlist);
        $Message= new MessageModel;
        $messagecount = $Message->where('ViewFlagch',0)->count();
        $this->assign('messagecount',$messagecount);
        $messageall = $Message->count();
        $showgreen=round($messagecount/$messageall*100);
        $this->assign('showgreen',$showgreen);
    }
}
class Index extends Admincomm
{
    public function index()
    {
        parent::index();
        $this->assign('menuname','系统概况');
        $Site = SiteModel::get(1);
        $this->assign('indexclick',$Site->indexclick);  //首页点击
        $sumabout = Db::name('about')
            ->where('ParentID', 1)
            ->sum('ClickNumber');
        $this->assign('sumabout',$sumabout);  //公司简介部分点击总数
        $sumproduct = Db::name('products')
            ->sum('ClickNumber');
        $this->assign('sumproduct',$sumproduct);  //所有产品点击总数
        $sumnews = Db::name('news')
            ->sum('ClickNumber');
        $this->assign('sumnews',$sumnews);  //所有文章点击总数

        $plist = Db::name('products')
            ->field(['ID','ProductNamech','SmallPic','AddTime'])
            ->limit(6)
            ->order('ID desc')
            ->select();
        $this->assign('plist',$plist);

        $nlist = Db::name('news')
            ->field(['ID','NewsNamech','SunlyNetPic','AddTime'])
            ->limit(6)
            ->order('ID desc')
            ->select();
        $this->assign('nlist',$nlist);

        return $this->fetch();
    }
    public function about()
    {
        parent::index();
        $this->assign('menuname','关于我们');
        //$alist = AboutModel::where('ParentID',0)->paginate(12);
        //$this->assign('alist',$alist);
        $alist = AboutModel::order('ParentID asc,Sequence asc,ID desc')->select();
        $this->assign('alist',Tool::tree($alist));
        return $this->fetch();
    }
    public function aboutadd()
    {
        parent::index();
        $this->assign('menuname','添加文章');
        $alist = AboutModel::order('ParentID asc,Sequence asc,ID desc')->select();
        $this->assign('alist',Tool::tree($alist));
        $this->assign('Sequence',99);
        return $this->fetch();
    }
    public function aboutedit($id)
    {
        parent::index();
        $this->assign('menuname','添加文章');
        $alist = AboutModel::order('ParentID asc,Sequence asc,ID desc')->select();
        $this->assign('alist',Tool::tree($alist));
        $site = AboutModel::get($id);
        $this->assign('thisid',$site->ID);
        $this->assign('AboutNamech',$site->AboutNamech);
        $this->assign('SeoKeywordsch',$site->SeoKeywordsch);
        $this->assign('SeoDescriptionch',$site->SeoDescriptionch);
        $this->assign('ParentID',$site->ParentID);
        $this->assign('Contentch',$site->Contentch);
        $this->assign('SunlyNetPic',$site->SunlyNetPic);
        $this->assign('Sequence',$site->Sequence);
        return $this->fetch();
    }
    public function saveaboutadd()
    {
        $about = new AboutModel;
        $about->AboutNamech = Request::instance()->param('AboutNamech');
        $about->SeoKeywordsch = Request::instance()->param('SeoKeywordsch');
        $about->SeoDescriptionch = Request::instance()->param('SeoDescriptionch');
        $about->ParentID = Request::instance()->param('ParentID');
        $about->Contentch = Request::instance()->param('Contentch');
        $about->SunlyNetPic = Request::instance()->param('SunlyNetPic');
        $about->Sequence = Request::instance()->param('Sequence');
        $about->ViewFlagch = 1;
        $about->AddTime = date('Y-m-d H:i:s');
        if ($about->save()) {
            if(Request::instance()->param('ParentID')==0){
                $aboutid = Db::name('about')
                    ->order('ID desc')
                    ->limit(1)
                    ->field(['ID','ParentID'])
                    ->select();
                $sortpath='0,'. $aboutid[0]['ID'] . ',';
                $aboutsp = AboutModel::get($aboutid[0]['ID']);
                $aboutsp->SortPath = $sortpath;
                $aboutsp->Count = 1;
                if (false !== $aboutsp->save()) {
                } else {
                    return $aboutsp->getError();
                }
            }else{
                $aboutid = Db::name('about')->order('ID desc')->limit(1)->field(['ID','ParentID'])->select();
                $aboutpid = AboutModel::get($aboutid[0]['ParentID']);
                $sortpath=$aboutpid->SortPath. $aboutid[0]['ID'] . ',';
                $aboutsp = AboutModel::get($aboutid[0]['ID']);
                $aboutsp->SortPath = $sortpath;
                $aboutsp->Count = $aboutpid->Count+1;
                if (false !== $aboutsp->save()) {
                } else {
                    return $aboutsp->getError();
                }
            }
            $this->success('添加文章成功','/admin/index/about/');
        } else {
            return $about->getError();
        }
    }
    public function saveaboutedit()
    {
        $id=Request::instance()->param('thisid');
        $about = AboutModel::get($id);
        $about->AboutNamech = Request::instance()->param('AboutNamech');
        $about->SeoKeywordsch = Request::instance()->param('SeoKeywordsch');
        $about->SeoDescriptionch = Request::instance()->param('SeoDescriptionch');
        $about->ParentID = Request::instance()->param('ParentID');
        $about->Contentch = Request::instance()->param('Contentch');
        $about->SunlyNetPic = Request::instance()->param('SunlyNetPic');
        $about->Sequence = Request::instance()->param('Sequence');
        $about->ViewFlagch = 1;
        $about->AddTime = date('Y-m-d H:i:s');        if ($about->save()) {
            if(Request::instance()->param('ParentID')==0){
                $aboutid = Db::name('about')
                    ->where('ID',$id)
                    ->field(['ID','ParentID'])
                    ->select();
                $sortpath='0,'. $aboutid[0]['ID'] . ',';
                $aboutsp = AboutModel::get($id);
                $aboutsp->SortPath = $sortpath;
                $aboutsp->Count = 1;
                if (false !== $aboutsp->save()) {
                } else {
                    return $aboutsp->getError();
                }
            }else{
                $aboutpid = AboutModel::get(Request::instance()->param('ParentID'));
                $sortpath=$aboutpid->SortPath. $id . ',';
                $aboutsp = AboutModel::get($id);
                $aboutsp->SortPath = $sortpath;
                $aboutsp->Count = $aboutpid->Count+1;
                if (false !== $aboutsp->save()) {
                } else {
                    return $aboutsp->getError();
                }
            }
            $this->success('添加文章成功','/admin/index/about/');
        } else {
            return $about->getError();
        }
    }
    public function aboutdel()
    {
        $id=Request::instance()->param('id');
        $about = AboutModel::get($id);
        if ($about) {
            $about->delete();
            $this->success('删除文章成功','/admin/index/about/');
        } else {
            $this->error('删除的文章不存在','/admin/index/about/');
        }
    }
    public function setsite()
    {
        parent::index();
        $this->assign('menuname','网站设置');
        $site = SiteModel::get(1);
        $this->assign('SiteTitlech',$site->SiteTitlech);
        $this->assign('Keywordsch',$site->Keywordsch);
        $this->assign('Descriptionsch',$site->Descriptionsch);
        $this->assign('comnamech',$site->comnamech);
        $this->assign('Telephone',$site->Telephone);
        $this->assign('Email',$site->Email);
        $this->assign('QQ1',$site->QQ1);
        return $this->fetch();
    }
    public function message()
    {
        parent::index();
        $this->assign('menuname','咨询反馈');
        $alist = MessageModel::order('ID desc')->paginate(20);
        $this->assign('alist',$alist);
        return $this->fetch();
    }
    public function messageview($id)
    {
        parent::index();
        $this->assign('menuname','咨询反馈');
        $saveview = MessageModel::get($id);
        $saveview->ViewFlagch = 1;
        $saveview->save();
        $site = MessageModel::get($id);
        $this->assign('thisid',$site->ID);
        $this->assign('MesName',$site->MesName);
        $this->assign('Content',$site->Content);
        $this->assign('Linkman',$site->Linkman);
        $this->assign('Address',$site->Address);
        $this->assign('Telephone',$site->Telephone);
        $this->assign('Email',$site->Email);
        $this->assign('QQ',$site->QQ);
        $this->assign('AddTime',$site->AddTime);
        return $this->fetch();
    }
    public function savesite()
    {
        $site = SiteModel::get(1);
        $site->SiteTitlech = Request::instance()->param('SiteTitlech');
        $site->Keywordsch = Request::instance()->param('Keywordsch');
        $site->Descriptionsch = Request::instance()->param('Descriptionsch');
        $site->comnamech = Request::instance()->param('comnamech');
        $site->Telephone = Request::instance()->param('Telephone');
        $site->Email = Request::instance()->param('Email');
        $site->QQ1 = Request::instance()->param('QQ1');
        if (false !== $site->save()) {
            $this->success('修改成功');
        } else {
            return $site->getError();
        }
    }
    public function midpass()
    {
        parent::index();
        $this->assign('menuname','修改密码');
        cookie(['prefix' => 'sunlynet_', 'expire' => 3600]);   //设置和读取cookie都要初始化
        $this->assign('username',cookie('adminname'));
        return $this->fetch();
    }
    public function savepass()
    {
        $admin = new AdminModel;
        $admin->where('AdminName', Request::instance()->param('username'))
            ->update(['Password' => substr(md5(Request::instance()->param('password')),8,16)]);
        $this->success('修改成功');

    }

    public function loginout()
    {
        cookie(['prefix' => 'sunlynet_', 'expire' => 3600]);   //设置和读取cookie都要初始化
        cookie('logincheck', null);
        cookie('adminname', null);
        return $this->redirect('admin/index/login');
        return $this->fetch();
    }
    public function login(Request $request)
    {
        $this->view->replace([
            '__PUBLIC__' => '/static',
        ]);
        cookie(['prefix' => 'sunlynet_', 'expire' => 3600]);   //设置和读取cookie都要初始化
        if($request->cookie('logincheck')=='success')
        {
            return $this->redirect('admin/index/index');
        }
        return $this->fetch();
    }
    public function check($code='')
    {
        cookie(['prefix' => 'sunlynet_', 'expire' => 3600]);   //设置和读取cookie都要初始化
        $count = Db::name('admin')
            ->where('AdminName', $_POST['username'])
            ->where('Password', substr(md5($_POST['password']),8,16))
            ->count();
        if($count>0) {
            $captcha = new \think\captcha\Captcha();
            if (!$captcha->check($code)) {
                $this->error('验证码错误');
            } else {
                cookie('adminname',$_POST['username'],3600);
                cookie('logincheck','success',3600);
                //$this->success('登录成功');
                return $this->redirect('admin/index/index');  //直接登录
            }
        }else{
            cookie('logincheck','out', 3600);
            $this->error('用户名和密码不正确');
        }
    }
}
