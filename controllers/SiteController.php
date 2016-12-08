<?php

class SiteController
{
	public function actionIndex()
	{
		// $categories = array();
		$categories = Category::getCategoriesList();

		// $latestProducts = array();
		$latestProducts = Product::getLatestProducts(4);

		// $sliderProducts = array();
		$sliderProducts = Product::getNewProducts();

		require_once(ROOT . '/views/site/index.php');

		return true;
		//8 урок 17-41
	}

	public function actionContacts()
	{
		$userEmail = '';
		$userText = '';
		$result = false;

		if (isset($_POST['submit'])) {
			$userEmail = $_POST['userEmail'];
			$userText = $_POST['userText'];

			$errors = false;

			if (!User::checkEmail($userEmail)) {
				$errors[] = "Неправильный email";
			}
			if ($errors == false) {
				$adminEmail = '2785888@mail.ru';
				$subject = 'Тема письма';
				$message = 'Текст: {$userText} . От {$userEmail}';
				$result = mail($adminEmail, $subject, $message);
				$result = true;
			}
		}

		require_once(ROOT . '/views/site/contacts.php');

		return true;

		// $mail = '2785888@mail.ru';
		// $subject = 'Тема письма';
		// $message = 'Содержание письма';
		// $result = mail($mail, $subject, $message);

		// die;
	}
}