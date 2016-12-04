<?php

class UserController
{
	public function actionRegister()
	{
		$name = '';
		$email = '';
		$password = '';
		$result = '';

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;


			if (!User::checkName($name)) {				
				$errors[] = "Имя должно быть более двух знаков";
			}

			if (!User::checkEmail($email)) {
				$errors[] = "Неправильный email";
			}

			if (!User::checkPassword($password)) {
				$errors[] = "Пароль должен быть более шести знаков";
			}

			if (User::checkEmailExists($email)) {
				$errors[] = "Такой email уже существует";
			}

			if ($errors == false) {
				$result = User::register($name, $email, $password);
			}
		}

		require_once(ROOT.'/views/user/register.php');

		return true;
	}

	public function actionLogin()
	{
		$email = '';
		$password = '';

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$errors = false;

			if (!User::checkEmail($email)) {
				$errors[] = "Неправильный email";
			}

			if (!User::checkPassword($password)) {
				$errors[] = "Пароль должен быть более шести знаков";
			}

			$userId = User::checkUserData($email, $password);

			if ($userId == false) {
				$errors[] = "Неправильные данные для входа на сайт";
			} else {
				User::auth($userId);

				header("Location: /cabinet/");
			}
		}

		require_once(ROOT.'/views/user/login.php');

		return true;
	}

	public function actionLogout()
	{
		session_start();
		unset($_SESSION['user']);
		header("Location: /");
	}
}