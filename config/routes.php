<?php
return array(

	'' => 'site/index',
	'product/([0-9]+)' => 'product/view/$1',

	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', // actionIndex in NewsController

	

);