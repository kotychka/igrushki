<?php

class SiteController
{
	public function actionIndex()
	{
		$categories = array();
		$categories = Category::getCategoriesList();

		$latestProducts = array();
		$latestProducts = Product::getLatestProducts(4);

		$newProducts = array();
		$newProducts = Product::getNewProducts(5);

		require_once(ROOT . '/views/site/index.php');

		return true;
		//5 урок 02-08
	}
}