<?php
function autoloader($className)
{

  $fileName = str_replace('\\', '/', $className) . '.php'; // $className에서 '\'문자열을 '/'로 변경('\'은 이스케이핑 기능이 있기 때문에 \\ 이렇게 써야 작은 따옴표를 이스케이핑 하는 것을 방지할 수 있음)
  $file = __DIR__ . '/../classes/' . $fileName;

  include $file;
}

spl_autoload_register('autoloader'); // 클래스를 호출할 때 자동으로 그 경로를 찾아서 불러옴

