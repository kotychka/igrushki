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
}