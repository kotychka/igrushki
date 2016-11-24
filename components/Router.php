<?php

class Router
{
	private $routes;

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

	//Метод возвращает строку
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		//Получить строку запроса
		$uri = $this->getURI();
		
		//Проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path) {
			//Сравниваем $uriPattern & $uri
			if (preg_match("~$uriPattern~", $uri)) {
				//Получаем внутренний путь из внешнего
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

				//Определить контролер и экшн
				$segments = explode('/', $internalRoute);
				
				$controllerName = ucfirst(array_shift($segments).'Controller');
				$actionName = 'action'.ucfirst(array_shift($segments));

				$parametrs = $segments;

				//Подключисть файл класса-контролера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				//Создать объект класса, вызвать нужный экшн
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parametrs);
				if ($result != null) {
					break;
				}
			}
		}


		//Если есть, опеределить контролер и экшн



		//Подключить файл класса контролера



		//Создать
	}
}