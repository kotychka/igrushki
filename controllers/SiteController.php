<?php

include_once ROOT . '/models/Category.php';


class SiteController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		require_once(ROOT . '/views/site/index.php');

		return true;
		//3 урок 18-23
	}
}