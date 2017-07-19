<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
	
    'about/:id' => ['index/index/about', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	'contact' => ['index/index/contact', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	//'sent' => ['index/Message/send', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	
	'newslist/:id' => ['index/news/index/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	'newslist' => ['index/news/index/', ['method' => 'get'], 'ext' => 'html'],
	'news/:id' => ['index/news/view/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	
	'productlist/:id' => ['index/product/index/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
	'productlist' => ['index/product/index/', ['method' => 'get'], 'ext' => 'html'],
	'product/:id' => ['index/product/view/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],

    'admin/index/aboutedit/:id' => ['admin/index/aboutedit/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/index/aboutdel/:id' => ['admin/index/aboutdel/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],

    'admin/product/sortedit/:id' => ['admin/product/sortedit/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/product/sortdel/:id' => ['admin/product/sortdel/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/product/edit/:id' => ['admin/product/edit/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/product/del/:id' => ['admin/product/del/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],

    'admin/news/sortedit/:id' => ['admin/news/sortedit/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/news/sortdel/:id' => ['admin/news/sortdel/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/news/edit/:id' => ['admin/news/edit/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/news/del/:id' => ['admin/news/del/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],

    'admin/index/messageview/:id' => ['admin/index/messageview/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],
    'admin/index/messagedel/:id' => ['admin/index/messagedel/', ['method' => 'get'], ['id' => '\d+'],'ext' => 'html'],

    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
];
