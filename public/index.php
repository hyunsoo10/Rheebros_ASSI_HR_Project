<?php
try {

  // include __DIR__ .'/../classes/EntryPoint.php';
  // include __DIR__ .'/../classes/IjdbRoutes.php';
  include __DIR__ . '/../includes/autoload.php';



  $route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');
  // echo var_export($_SERVER);

  //$_SERVER['REQUEST_URI'] = URL주소 ex joke/list
  //$_SERVER['REQUEST_METHOD'] = 폼 전송 방식 ex GET or POST

  $entryPoint = new \Rheebros\EntryPoint($route, $_SERVER['REQUEST_METHOD'], new \Assi\AssiRoutes());

  $entryPoint -> run();
} catch (PDOException $e) {
  $title = '오류가 발생했습니다.';

  $output = '데이터베이스 오류: ' . $e->getMessage() . '위치: ' .
  $e->getFile(). ' : ' . $e->getLine();

  include __DIR__ . '/../templates/layout.html.php';
  
}
