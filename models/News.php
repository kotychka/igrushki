<?php


class News
{
	/**
	* get single news with id
	*/
	public static function getNewsItemById($id)
	{
		//Запрос к БД
		$id = intval($id);
		if ($id) {
			$db = Db::getConnection();

			$result = $db->query('SELECT * from news WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}
	}

	/**
	* Return array with all news
	*/
	public static function getNewsList()
	{
		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, title, date, short_content '
			. 'FROM news '
			. 'ORDER BY date DESC '
			. 'lIMIT 2');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$i++;
		}

		return $newsList;

		//урок 2, 25минут

	}


}