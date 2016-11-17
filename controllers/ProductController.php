<?php

class ProductController 
{
	public function actionList()
	{
		require_once(ROOT . '/views/product/index.php');

		return true;
	}
}