<?php
namespace Assi\Controllers;
use \Rheebros\DatabaseTable;
use \Rheebros\Authentication;

class Employee {
  private $employeesTable;
  private $trainingTable;
  private $authentication;
  private $employeeTrainingsTable;


  public function __construct( DatabaseTable $employeesTable, DatabaseTable $trainingTable, Authentication $authentication, DatabaseTable $employeeTrainingsTable)
  {
    $this -> employeesTable = $employeesTable;
    $this -> trainingTable = $trainingTable;
    $this -> authentication = $authentication;
    $this -> employeeTrainingsTable = $employeeTrainingsTable;
  }

  public function list() {

    $page = $_GET['page'] ?? 1;
    $offset = ($page-1)*10;
    
    $author = $this-> authentication->getUser();

    // $trainings = $this->trainingTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();

    if(isset($_GET['store']) and $_GET['store']=='GA55')
    {
      $employees = $this->employeesTable->find('store', 'GA55', '', 10, $offset);
      $totalEmployees = $this->employeesTable->total('store', 'GA55');
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['store']) and $_GET['store']=='IL70') {
      $employees = $this->employeesTable->find('store', 'IL70', '', 10, $offset);
      $totalEmployees = $this->employeesTable->total('store', 'IL70');
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['store']) and $_GET['store'] =='PA88') {
      $employees = $this->employeesTable->find('store', 'PA88', '', 10, $offset);
      $totalEmployees = $this->employeesTable->total('store', 'PA88');
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['DOLStatus']) and $_GET['DOLStatus']=='Full-Time') {
      $employees = $this->employeesTable->find('DOLStatus', 'Full-Time', '', 10, $offset);
      $totalEmployees = $this->employeesTable->total('DOLStatus', 'Full-Time');
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['DOLStatus']) and $_GET['DOLStatus'] =='Part-Time') {
      $employees = $this->employeesTable->find('DOLStatus', 'Part-Time', '', 10, $offset);
      $totalEmployees = $this->employeesTable->total('DOLStatus', 'Part-Time');
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['firstName'])) {
      $employees = $this->employeesTable->find2('firstName', $_GET['firstName'], '', 10, $offset);
      $totalEmployees = $this->employeesTable->total2('firstName', $_GET['firstName']);
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['DEPT'])) {
      $employees = $this->employeesTable->find2('department', $_GET['DEPT'], '', 10, $offset);
      $totalEmployees = $this->employeesTable->total2('department', $_GET['DEPT']);
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['lastName'])) {
      $employees = $this->employeesTable->find2('lastName', $_GET['lastName'], '', 10, $offset);
      $totalEmployees = $this->employeesTable->total2('lastName', $_GET['lastName']);
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['position'])) {
      $employees = $this->employeesTable->find2('position', $_GET['position'], '', 10, $offset);
      $totalEmployees = $this->employeesTable->total2('position', $_GET['position']);
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    elseif (isset($_GET['probation'])) {
      $employees = $this->employeesTable->find3('hireDate', 83, '', 10, $offset);
      $totalEmployees = $this->employeesTable->total3('hireDate', 83);
      $numPages = ceil($totalEmployees/5);
      $title = '직원 목록';
    }
    else {
      $employees = $this->employeesTable->findAll('', 10, $offset);
      //$employees = $this->employeesTable->findAll('dateOfHired DESC', 5, $offset);
      $totalEmployees = $this->employeesTable->total();
      $numPages = ceil($totalEmployees/5);


      $title = '직원 목록';
    }

    return [
    'template'=> 'employeeslist.html.php',
     'title'=>$title,
     'variables'=> [
       'totalEmployees' => $totalEmployees,
       'numPages' => $numPages,
       'employees' => $employees,
       'currentPage' => $page,
       'store' => $_GET['store'] ?? null,
       'author' => $author,
      //  'trainings'=>$trainings ?? null,
       'employeeTrainings' => $employeeTrainings ?? null
      ]
    ];

  }


  public function home() {


    $title = 'Assi';
    return ['template' => 'home.html.php', 'title' => $title];
  }

  public function pdf() {

    $author = $this-> authentication->getUser();
    $title = 'Assi';
    return ['template' => 'pdf.html.php', 'title' => $title,'author' => $author];
  }


  public function orientation() {
    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Orientation(eng)';
      return ['template' => 'orientation.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Orientation(spn)';
      return ['template' => 'orientation.html.php', 'title' => $title];
    }
    else{
      $title = 'Orientation(kor)';
      return ['template' => 'orientation.html.php', 'title' => $title];
    }
  }
  public function insurance() {

    if(strpos($_SERVER['REQUEST_URI'], "eng") && strpos($_SERVER['REQUEST_URI'], "ga55")){
      $title = 'Insurance(eng)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn") && strpos($_SERVER['REQUEST_URI'], "ga55")) {
      $title = 'Insurance(spn)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "kor") && strpos($_SERVER['REQUEST_URI'], "ga55")) {
      $title = 'Insurance(kor)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "eng") && strpos($_SERVER['REQUEST_URI'], "il70")) {
      $title = 'Insurance(eng)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn") && strpos($_SERVER['REQUEST_URI'], "il70")) {
      $title = 'Insurance(spn)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "kor") && strpos($_SERVER['REQUEST_URI'], "il70")) {
      $title = 'Insurance(kor)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "eng") && strpos($_SERVER['REQUEST_URI'], "pa88")) {
      $title = 'Insurance(eng)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn") && strpos($_SERVER['REQUEST_URI'], "pa88")) {
      $title = 'Insurance(spn)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "kor") && strpos($_SERVER['REQUEST_URI'], "pa88")) {
      $title = 'Insurance(kor)';
      return ['template' => 'insurance.html.php', 'title' => $title];
    }
    
  }

  
  public function insurance_form() {
    if(strpos($_SERVER['REQUEST_URI'], "ga55")){
      $title = 'insurance(GA55)';
      return ['template' => 'insurance_form_ga55.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "il70")) {
      $title = 'insurance(IL70)';
      return ['template' => 'insurance_form_il70.html.php', 'title' => $title];
    }
    else{
      $title = 'insurance(PA88)';
      return ['template' => 'insurance_form_pa88.html.php', 'title' => $title];
    }
  }

  // public function delete() {
  //   $author = $this-> authentication->getUser();
  //   $employee = $this->employeesTable->findById($_POST['id']);

  //   if($employee->authorid != $author->id && !$author->hasPermission(\Assi\Entity\Employee::DELETE_USER)){
  //     return;
  //   }

  //   $this->employeesTable->delete($_POST['id']);

  //   header('location: /employees/list');
  // }



  public function delete() {
    $author = $this-> authentication->getUser();

    if($author->hasPermission(\Assi\Entity\Employee::DELETE_USER)){
      return;
    }

    $this->employeesTable->delete($_POST['id']);

    header('location: /employees/list');
  }




  // public function edit() {
  //   if (isset($_POST['joke'])){
  //     $joke = $_POST['joke'];
  //     $joke['authorid'] = 1;
  //     $joke['jokedate'] = new \DateTime();

  //     $this->jokesTable->save($joke);

  //     // header('location: index.php?action=list');
  //     header('location: /joke/list');
  //   }
  //   else {
  //     if(isset($_GET['id'])) {
  //       $joke = $this->jokesTable->findById($_GET['id']);
  //     }

  //     $title = '유머 글 수정';

  //     // ob_start();

  //     // include __DIR__ . '/../templates/editjoke.html.php';

  //     // $output = ob_get_clean();
  //     // return ['output' => $output, 'title' => $title];

  //     return [
  //       'template'=>'editjoke.html.php',
  //       'title'=>$title,
  //       'variables' => [
  //         'joke' => $joke ?? null
  //         ]
  //       ];
  //   }
  // }



  public function saveEdit() {
    $authorObject = $this-> authentication->getUser();


    $employee = $_POST['employee'];
    // $joke['jokedate'] = new \DateTime();





    $employeeEntity = $this->employeesTable->save($employee);
    $employeeEntity->clearTrainings();


    foreach ($_POST['training'] as $categoryId) {
      $employeeEntity->addTraining($categoryId);
    }

    header('location: /employee/list');
  }

  public function edit() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);
    }

    $title = '직원 수정';

    return [
      'template' => 'editemployee.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'author' => $employee, 'categories'=>$trainings]
    ];
  }

  // public function employeedetail() {
  //   $author = $this->authentication->getUser();
  //   $trainings = $this->trainingTable->findAll();

  //   if (isset($_GET['id'])) {
  //     $employee = $this->employeesTable->findById($_GET['id']);
  //   }

  //   $title = '유머 글 수정';

  //   return [
  //     'template' => 'employeedetail.html.php',
  //     'title' => $title,
  //     'variables' => [ 'employee' => $employee ?? null, 'author' => $author, 'trainings'=>$trainings]
  //   ];
  // }

  
  public function employeeview() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();



    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = '직원 정보';

    return [
      'template' => 'employeeview.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'author' => $author]
    ];
  }

  public function employeedetail2() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();


    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    // $employeeTrainings = $this->employeeTrainingsTable->find('EE_ID', $this->id);
    $title = '직원 정보 디테일';

    return [
      'template' => 'employeedetail.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'author' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null]
    ];
  }

  public function edit2() {
    $employee = $this->authentication->getUser();
    //$trainings = $this->trainingTable->findAll();
    $author = $this-> authentication->getUser();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);
    }

    $title = '직원 디테일 수정';

    return [
      'template' => 'editemployeedetail.html.php',
      'title' => $title,
      'variables' => ['author' => $author,'employee' => $employee ?? null, 'employeeTrainings' => $employeeTrainings ?? null]
    ];
  }
  public function saveEdit2() {


    $employeeTraining = $_POST['employeeTraining'];
    // $joke['jokedate'] = new \DateTime();

    $this->employeeTrainingsTable->save($employeeTraining);
    header('location: /employees/list');
  }
  public function saveEdit3() {

   

    $employeeTraining = $_POST['employeeTraining'];
    // $joke['jokedate'] = new \DateTime();

    $this->employeeTrainingsTable->save($employeeTraining);
    header('location: /');
  }


  public function fail1() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();


    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'fail1';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'fail1.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }

  public function pass1() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'pass1';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'pass1.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }

  public function cert1() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'cert1';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'cert1.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }
  public function cert2() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'cert2';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'cert2.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }
  public function cert3() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'cert3';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'cert3.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }
  public function fail2() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();


    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'fail2';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'fail2.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }

  public function pass2() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'pass2';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'pass2.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }

  public function fail3() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();


    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'fail3';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'fail3.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }

  public function pass3() {
    $author = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $employees = $this->employeesTable->findAll();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();
    //define('allowed', true);

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);

    }
    $title = 'pass3';

    // if($employee->EEID == $employeeTrainings)

    return [
      'template' => 'pass3.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }


  public function buzz() {


    $title = 'Assi';
    return ['template' => 'buzz.html.php', 'title' => $title];
  }

}
