<?php
return array(
	'about' => 'site/about',

	'admin/product/create' => 'adminProduct/create',
	'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
	'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
	'admin/product' =>'adminProduct/index',

	'admin/category/create' => 'adminCategory/create',
	'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
	'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
	'admin/category' =>'adminCategory/index',

	'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
	'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
	'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
	'admin/order' =>'adminOrder/index',

	'admin' =>'admin/index',

	'cabinet/edit' => 'cabinet/edit',
	'cabinet' => 'cabinet/index',

	'catalog' => 'catalog/index',

	'category/([0-9]+)/p([0-9]+)' => 'catalog/category/$1/$2',
	'category/([0-9]+)' => 'catalog/category/$1',

	'contacts' => 'site/contacts',

	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', // actionIndex in NewsController

	'cart/delete/([0-9]+)' => 'cart/delete/$1',
	'cart/add/([0-9]+)' => 'cart/add/$1',
	'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
	'cart/checkout' => 'cart/checkout',
	'cart' => 'cart/index',

	'product/([0-9]+)' => 'product/view/$1',

	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',



	'' => 'site/index',

);