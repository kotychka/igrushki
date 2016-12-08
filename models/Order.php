<?php

class Order
{
	public static function save($userName, $userPhone, $userComment, $userId, $products)
	{
		$products = json_encode($products);

		$db = Db::getConnection();

		$sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

		$result = $db->prepare($sql);
		$result->bindParam(':user_name', $userName, PDO::FETCH_ASSOC);
		$result->bindParam(':user_phone', $userPhone, PDO::FETCH_ASSOC);
		$result->bindParam(':user_comment', $userComment, PDO::FETCH_ASSOC);
		$result->bindParam(':user_id', $userId, PDO::FETCH_ASSOC);
		$result->bindParam(':products', $products, PDO::FETCH_ASSOC);

		return $result->execute();

	}
}