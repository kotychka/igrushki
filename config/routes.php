<?php
return array(
	
	'product/([0-9]+)' => 'product/view/$1',
	'catalog' => 'catalog/index',

	'category/([0-9]+)/p([0-9]+)' => 'catalog/category/$1/$2',
	'category/([0-9]+)' => 'catalog/category/$1',

	'user/register' => 'user/register',
	'user/login' => 'user/login',

	'cabinet' => 'cabinet/index',

	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', // actionIndex in NewsController

	'' => 'site/index',

);