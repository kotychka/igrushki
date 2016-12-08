<?php

class Product
{
	const SHOW_BY_DEFAULT = 20;

	public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
	{
		// $count = self::SHOW_BY_DEFAULT, 
		$count = intval($count);
		// $page = intval($page);
		// $offset = ($page - 1) * self::SHOW_BY_DEFAULT;


		$db = Db::getConnection();

		$productList = array();

		$result = $db->query('SELECT id, short_name, category_id, price, img, is_new FROM product '
			. 'WHERE status = "1" '
			. 'ORDER BY id DESC '
			. 'LIMIT ' . $count);
			// . ' OFFSET ' . $offset);

		$i = 0;
		while ($row = $result->fetch()) {
			$productList[$i]['id'] = $row['id'];
			$productList[$i]['short_name'] = $row['short_name'];
			$productList[$i]['category_id'] = $row['category_id'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['img'] = $row['img'];
			$productList[$i]['is_new'] = $row['is_new'];
			$i++;
		}

		return $productList;
	}

	public static function getNewProducts()
	{
		// $count = intval($count);

		$db = Db::getConnection();

		$productList = array();

		$result = $db->query('SELECT id, short_name, category_id, price, img, is_new FROM product '
			. 'WHERE status = "1" AND is_new = "1" '
			. 'ORDER BY id DESC ');

		$i = 0;
		while ($row = $result->fetch()) {
			$productList[$i]['id'] = $row['id'];
			$productList[$i]['short_name'] = $row['short_name'];
			$productList[$i]['category_id'] = $row['category_id'];
			$productList[$i]['price'] = $row['price'];
			$productList[$i]['img'] = $row['img'];
			$i++;
		}

		return $productList;
	}

	public static function getProductsListByCategory($categoryId = false, $page = 1)
	{
		if ($categoryId) {

			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$db = Db::getConnection();
			$products = array();
			$result = $db->query('SELECT id, short_name, price, img, is_new FROM product '
				."WHERE status = 1 AND category_id = '$categoryId' "
				.'LIMIT '.self::SHOW_BY_DEFAULT 
				. ' OFFSET ' . $offset);

			// $result = $db->query('SELECT id, name, price, img, is_new FROM product '
			// . 'WHERE status = "1" AND category_id = "$categoryId" '
			// . 'ORDER BY id DESC '
			// . 'LIMIT ' . self::SHOW_BY_DEFAULT);

			// Текст запроса к БД
	        // $sql = 'SELECT id, name, price, is_new FROM product '
	        //         . 'WHERE status = 1 AND category_id = :category_id '
	        //         . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

	        // // Используется подготовленный запрос
	        // $result = $db->prepare($sql);
	        // $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
	        // $result->bindParam(':limit', $limit, PDO::PARAM_INT);
	        // $result->bindParam(':offset', $offset, PDO::PARAM_INT);

	        // // Выполнение коменды
	        // $result->execute();

			$i = 0;
			while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['short_name'] = $row['short_name'];
				$products[$i]['price'] = $row['price'];
				$products[$i]['img'] = $row['img'];
				$products[$i]['is_new'] = $row['is_new'];
				$i++;
			}

			return $products;		
		}
	}

	public static function getProductById($id)
	{
		$db = Db::getConnection();

		// $result = $db->query('SELECT name, price, img, is_new, description, seller FROM product '
		// 		."WHERE status = 1 AND id = '$id' ");

		$result = $db->query("SELECT * FROM product WHERE status = 1 AND id = '$id'");
		$result->setFetchMode(PDO::FETCH_ASSOC);

		return $result->fetch();
	}

	public static function getTotalProductsInCategory($categoryId)
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) AS count from product '
			. 'WHERE status = 1 AND category_id ="'.$categoryId.'"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}

	public static function getProductsByIds($idsArray)
	{
		

		$db = Db::getConnection();

		$idsString = implode(',', $idsArray);

		$sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

		$result = $db->query($sql);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$i = 0;
		$products = array();
		while ($row = $result->fetch()) {
			$products[$i]['id'] = $row['id'];
			$products[$i]['short_name'] = $row['short_name'];
			$products[$i]['price'] = $row['price'];
			$products[$i]['code'] = $row['code'];
			$products[$i]['category_id'] = $row['category_id'];
			$i++;
		}

		return $products;
		
	}

	public static function getProductsList($page = 1)
	{
			$page = intval($page);
			$offset = ($page - 1) * self::SHOW_BY_DEFAULT;

			$db = Db::getConnection();
			$products = array();
			$result = $db->query('SELECT id, short_name, price, img, is_new FROM product '
				."WHERE status = 1 "
				.'LIMIT '.self::SHOW_BY_DEFAULT 
				. ' OFFSET ' . $offset);

			$i = 0;
			while ($row = $result->fetch()) {
				$products[$i]['id'] = $row['id'];
				$products[$i]['short_name'] = $row['short_name'];
				$products[$i]['price'] = $row['price'];
				$products[$i]['img'] = $row['img'];
				$products[$i]['is_new'] = $row['is_new'];
				$i++;
			}

			return $products;
	}




}