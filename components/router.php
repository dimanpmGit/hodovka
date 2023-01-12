<?php

class Router {
  private $routes;
  
  public function __construct() {
    $routesPath = ROOT . '/config/routes.php';
    $this->routes = include($routesPath);
  }
  
  /*
   *  Возвращает строку запроса
   */
  private function getURI() {
    if (!empty($_SERVER['REQUEST_URI'])) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }
  
  public function run() {
    //  Получить строку запроса
    $uri = $this->getURI();
    
    //  Проверить наличчие полученного запроса в routes.php
    foreach ($this->routes as $uriPattern => $path) {
      //  Сравнить $uriPattern и $uri
      if (preg_match("~$uriPattern~", $uri)) {
        //echo '<br>Где ищем (запроос, который набрал пользователь): ' . $uri;
        //echo '<br>Что ищем (совпадения в правилах): ' . $uriPattern;
        //echo '<br>Кто обрабатывает: ' . $path;
        
        //  Получаем внутренний путь из внешнего согласно правилу
        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
        
        //echo '<br><br>Нужно сформировать: ' . $internalRoute;
        //echo '<br>';
        
        //  Определить, какой контроллер и экшн обрабатывают запрос
        $segments = explode('/', $internalRoute);
        $controllerName = array_shift($segments) . 'Controller';
        $controllerName = ucfirst($controllerName);
        
        $actionName = 'action' . ucfirst(array_shift($segments));
        
        //echo '<br>Controller Name: ' . $controllerName;
        //echo '<br>Action Name: ' . $actionName;
        
        $parameters = $segments;
        
        //die;
        
        //  Подключить файл класса контроллера
        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
        
        if (file_exists($controllerFile)) {
          include_once($controllerFile);
        }
      
        //  Создать объект и вызвать метод (action)
        $controllerObject = new $controllerName;

        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
        //$result = $controllerObject->$actionName($parameters);
        if ($result != null) {
          break;
        }
      }
    }
  }
}