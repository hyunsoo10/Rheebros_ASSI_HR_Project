<?php
namespace Rheebros;

class Authentication
{

  private $users;
  private $usernameColumn;
  private $passwordColumn;
  private $userid;

  public function __construct(DatabaseTable $users, $usernameColumn, $passwordColumn, $userid)
  {
    session_start();
    $this->users = $users;
    $this->usernameColumn = $usernameColumn;
    $this->passwordColumn = $passwordColumn;
    $this->userid = $userid;
  }

  public function login($useremail, $password)
  {
    $user = $this->users->find($this->usernameColumn, strtolower($useremail));
    
    if(!empty($user) && $password == $user[0]->{$this->passwordColumn}){
      session_regenerate_id();
      $_SESSION['useremail'] = $useremail;
      $_SESSION['password'] = $user[0]->{$this->passwordColumn};
      $_SESSION['userid'] = $user[0]->{$this->userid};
  
     
   
      return true;
    } else {
      return false;
    }
    // 비밀번호에 hashing 적용했을 때
    // if(!empty($user) && password_verify($password, $user[0]->{$this->passwordColumn})){
    //   session_regenerate_id();
    //   $_SESSION['useremail'] = $useremail;
    //   $_SESSION['password'] = $user[0]->{$this->passwordColumn};
    //   $_SESSION['userid'] = $user[0]->{$this->userid};
  
     
   
    //   return true;
    // } else {
    //   return false;
    // }
  }

  public function isLoggedIn()
  {
    if(empty($_SESSION['useremail'])){
      return false;
    }

    $user = $this->users->find($this->usernameColumn, strtolower($_SESSION['useremail']));

    $passwordColumn = $this->passwordColumn;

    if(!empty($user) && $user[0]->$passwordColumn === $_SESSION['password']) {
      return true;
    } else {
      return false;
    }
  }

  public function getUser() {
    if ($this->isLoggedIn()){
      return $this->users->find($this->usernameColumn, strtolower($_SESSION['useremail']))[0];
    }
    else {
      return false;
    }
  }
}