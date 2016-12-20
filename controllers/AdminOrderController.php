<?php

class AdminOrderController extends AdminBase
{
	public function actionIndex()
	{
		self::checkAdmin();

		$ordersList = Order::getOrdersList();

		require_once(ROOT.'/views/admin_order/index.php');
		return true;
	}

	public function actionUpdate($id)
	{
		self::checkAdmin();

		$order = Order::getOrderById($id);

		if (isset($_POST['submit'])) {
			$options['user_name'] = $_POST['userName'];
			$options['user_phone'] = $_POST['userPhone'];
			$options['user_comment'] = $_POST['userComment'];
			// $options['user_id'] = $_POST['userId'];
			// $options['products'] = $_POST['products'];
			$options['date'] = $_POST['date'];
			$options['status'] = $_POST['status'];

			$errors = false;

			if (!isset($options['name']) || empty($options['name'])) {
				$errors[] = 'Заполните имя категории';
			}

			if ($errors == false) {
				$id = Order::updateOrderById($id, $options);

				header("Location: /admin/order");
			}
		}

		require_once(ROOT.'/views/admin_order/update.php');
		return true;
	}

	public function actionView($id)
	{
		self::checkAdmin();

		$order = Order::getOrderById($id);

		require_once(ROOT.'/views/admin_order/view.php');
		return true;
	}

	public function actionDelete($id)
	{
		self::checkAdmin();

		if (isset($_POST['submit'])) {
			Order::deleteOrderById($id);

			header("Location: /admin/order");
		}

		require_once(ROOT.'/views/admin_order/delete.php');
		return true;
	}
}