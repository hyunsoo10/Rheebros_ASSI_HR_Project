<?php
namespace Assi\Controllers;

class Login 
{
  private $authentication;

  public function __construct(\Rheebros\Authentication $authentication)
  {
    $this->authentication = $authentication;
  }

  public function error()
  {
    return ['template' => 'loginerror.html.php',
    'title' => '로그인되지 않았습니다.'];
  }

  
  public function permissionError()
  {
    return ['template' => 'permissionerror.html.php',
    'title' => '접근권한이 없습니다.'];
  }


  public function loginForm() {
    return ['template' =>'login.html.php', 'title' =>'로그인'];
  }

  public function processLogin() {
    if ($this->authentication->login($_POST['EEID'], $_POST['password'])) {
      header('location: /');
    }
    else {
      return ['template' => 'login.html.php',
          'title' => '로그인',
          'variables' => [
            'error' => '사용자 이름/비밀번호가 유효하지 않습니다.'
          ]
      ];
    }
  }

  public function success() {
    return ['template' => 'loginsuccess.html.php', 'title' =>'로그인 성공'];
  }

  public function logout() {
    unset($_SESSION);
    session_destroy();
    header('location: /');
  //   return ['template' => 'logout.html.php',
  //   'title' => '로그아웃되었습니다'];
  }
}