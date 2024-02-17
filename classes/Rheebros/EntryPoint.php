<?php
namespace Rheebros;

class EntryPoint
{
  private $route;
  private $method;
  private $routes;
 

  public function __construct(string $route, string $method, \Rheebros\Routes $routes)
  {
    $this->route = $route;
    $this->routes = $routes;
    $this->method = $method;
    $this->checkUrl();
  }
  
  //리다이렉트 문제
  private function checkUrl()
  {
    if ($this->route !== strtolower($this->route)) {
      http_response_code(301);
      header('location: '. strtolower($this->route));
    }
  }

  //템플릿 문제
  private function loadTemplate($templateFileName, $variables = [])
  {
    extract($variables);

    ob_start();
    include __DIR__ . '/../../templates/' .$templateFileName;

    return ob_get_clean();
  }

  // public function run()
  // {
  //   $routes = $this->routes->getRoutes();
   

		
  //       $controller = $routes[$this->route][$this->method]['controller'];
  //       $action = $routes[$this->route][$this->method]['action'];

  //       $page = $controller->$action();

  //       $title  = $page['title'];

  //       if(isset($page['variables'])) {
  //         $output = $this->loadTemplate($page['template'], $page['variables']);
  //       } else {
  //         $output = $this->loadTemplate($page['template']);
  //       }
        
  //       include __DIR__ . '/../../templates/layout.html.php';
  //     }
    
  public function run()
  {
    $routes = $this->routes->getRoutes();
    $authentication = $this->routes->getAuthentication();
    // $permission =  $this->routes->hasPermission();

		if (isset($routes[$this->route]['login']) && !$authentication->isLoggedIn()) {
			header('location: /login/error');
		} else if(isset($routes[$this->route]['permissions']) && !$this->routes->checkPermission($routes[$this->route]['permissions'])){
      header('location: /permission/error');      
    } else {
        $controller = $routes[$this->route][$this->method]['controller'];
        $action = $routes[$this->route][$this->method]['action'];

        $page = $controller->$action();

        $title  = $page['title'];

        

        if(isset($page['variables'])) {
          $output = $this->loadTemplate($page['template'], $page['variables']);
        } else {
          $output = $this->loadTemplate($page['template']);
        }
        
        echo $this->loadTemplate('layout.html.php', [ 
          'loggedIn' => $authentication->isLoggedIn(),
          'output' => $output,
          'title' => $title,
          'author' =>$authentication->getUser(),
          
        ]);
   }
  }

  //특정 URL에 접속
  // private function callAction()
  // {
  //   include_once __DIR__ . '/../classes/DatabaseTable.php';
  //   include __DIR__ . '/../includes/DatabaseConnection.php';
    
    
  
  //   $jokesTable = new DatabaseTable($pdo, 'joke', 'id');
  //   $authorsTable = new DatabaseTable($pdo, 'author', 'id');

    
  //   if($this->route === 'joke/list') {
  //     include __DIR__ . '/../classes/controllers/JokeController.php';
  //     $controller = new JokeController($jokesTable, $authorsTable);
  //     $page = $controller->list();
  //   } else if ($this->route === '') {
  //     include __DIR__ .'/../classes/controllers/JokeController.php';
  //     $controller = new JokeController($jokesTable, $authorsTable);
  //     $page = $controller->home();
  //   } else if ($this->route === 'joke/edit') {
  //     include __DIR__ .'/../classes/controllers/JokeController.php';
  //     $controller = new JokeController($jokesTable, $authorsTable);
  //     $page = $controller->edit();
  //   } else if($this->route === 'joke/delete') {
  //     include __DIR__ . '/../classes/controllers/JokeController.php';
  //     $controller = new JokeController($jokesTable, $authorsTable);
  //     $page = $controller->delete();
  //   } else if ($this->route === 'register') {
  //     include __DIR__ . '/../classes/controllers/RegisterController.php';
  //     $page = $controller -> showForm();
  //   }
  //   return $page;
  // }

  // public function run()
  // {
  //   $page = $this-> routes->callAction($this->route);
  //   $title  = $page['title'];

  //   if(isset($page['variables'])) {
  //     $output = $this->loadTemplate($page['template'], $page['variables']);
  //   } else {
  //     $output = $this->loadTemplate($page['template']);
  //   }
    
  //   include __DIR__ . '/../../templates/layout.html.php';
  
  // }

}