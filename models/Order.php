<?php

class Order
{
	public static function save($userName, $userPhone, $userComment, $userId, $products)
	{
		$products = json_encode($products);

		$db = Db::getConnection();

		$sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

		$result = $db->prepare($sql);
		$result->bindParam(':user_name', $userName, PDO::PARAM_STR);
		$result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
		$result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
		$result->bindParam(':user_id', $userId, PDO::PARAM_INT);
		$result->bindParam(':products', $products, PDO::PARAM_STR);

		return $result->execute();
	}

	public static function updateOrderById($id)
	{
		$db = Db::getConnection();

		$sql = 'UPDATE product_order 
			SET 
				user_name = :user_name,
				user_phone = :user_phone,
				user_comment = :user_comment,
				user_id = :user_id,
				products = :products,
				status = :status
			WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':user_name', $userName, PDO::PARAM_STR);
		$result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
		$result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
		$result->bindParam(':user_id', $userId, PDO::PARAM_INT);
		$result->bindParam(':products', $products, PDO::PARAM_STR);
		$result->bindParam(':status', $status, PDO::PARAM_INT);

		return $result->execute();
	}

	public static function getOrdersList()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM product_order');

		$ordersList = array();
		$i = 0;
		while ($row = $result->fetch()) {
			$ordersList[$i]['id'] = $row['id'];
			$ordersList[$i]['user_name'] = $row['user_name'];
			$ordersList[$i]['user_phone'] = $row['user_phone'];
			$ordersList[$i]['user_comment'] = $row['user_comment'];
			$ordersList[$i]['user_id'] = $row['user_id'];
			$ordersList[$i]['products'] = $row['products'];
			$ordersList[$i]['date'] = $row['date'];
			$ordersList[$i]['status'] = $row['status'];
			$i++;
		}
		return $ordersList;
	}

	public static function getOrderById($id)
	{
		$db = Db::getConnection();

		$sql = 'SELECT * FROM product_order WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetch();
	}

	public static function deleteOrderById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM product_order WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Новый заказ';
                break;
            case '2':
                return 'Заказ в обработке';
                break;
            case '3':
                return 'Заказ отправлен';
                break;
            case '4':
                return 'Заказ выполнен';
                break;
        }
    }
}