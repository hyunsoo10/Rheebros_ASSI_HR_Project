<?php
namespace Assi\Controllers;
use \Rheebros\DatabaseTable;
use \Rheebros\Authentication;

class Register
{
  private $employeesTable;
  private $authentication;
  private $trainingTable;
  private $employeeTrainingsTable;

  public function __construct(DatabaseTable $employeesTable, DatabaseTable $trainingTable, Authentication $authentication, DatabaseTable $employeeTrainingsTable)
  {
    $this->employeesTable = $employeesTable;
    $this->trainingTable = $trainingTable;
    $this ->authentication = $authentication;
    $this->employeeTrainingsTable = $employeeTrainingsTable;


  }

  public function registrationForm()
  {
    return ['template' => 'register.html.php', 'title' => '사용자 등록'];
  }

  public function success()
  {
    return ['template' => 'registersuccess.html.php', 'title' => '등록 성공'];
  }

  public function registerUser() {
    $author = $_POST['author'];

    $employeetrainings = $_POST['employeeTraining'];
    $employeetrainings2 = $_POST['employeeTraining2'];

    //데이터는 처음부터 유효하다고 가정
    $valid = true;
    $errors=[];

    //하지만 항목이 빈 값이면 $valid에 false 할당
    if(empty($author['firstName'])) {
      $valid = false;
      $errors[] = '이름을 입력해야 합니다.';
    }
    if(empty($author['EEID'])) {
      $valid = false;
      $errors[] = 'EEID를 입력해야 합니다.';
    } //이메일 유효성 검사
    // else if(filter_var($author['EEID'], FILTER_VALIDATE_EMAIL) == false ){
    //   $valid = false;
    //   $errors[] = '유효하지 않은 이메일 주소입니다.';
    // } //이메일이 유효하다면 중복 이메일 있는지 검사
    else {
      // $author['EEID'] = strtolower($author['EEID']);

      if(count($this->employeesTable->find('EEID', $author['EEID'])) > 0) {
        $valid = false;
        $errors[] = '이미 가입된 EEID 입니다.';
      }
    }

    if(empty($author['password'])) {
      $valid = false;
      $errors[] = '비밀번호를 입력해야 합니다.';
    }
    if(empty($author['firstName'])) {
      $valid = false;
      $errors[] = 'firstName을 입력해야 합니다.';
    }
    if(empty($author['lastName'])) {
      $valid = false;
      $errors[] = 'lastName을 입력해야 합니다.';
    }
    if(empty($author['gender'])) {
      $valid = false;
      $errors[] = 'gender을 입력해야 합니다.';
    }

    if(empty($author['hireDate'])) {
      $valid = false;
      $errors[] = 'hireDate을 입력해야 합니다.';
    }
    if(empty($author['position'])) {
      $valid = false;
      $errors[] = 'position을 입력해야 합니다.';
    }
    if(empty($author['DOLStatus'])) {
      $valid = false;
      $errors[] = 'DOLStatus을 입력해야 합니다.';
    }
    if(empty($author['department'])) {
      $valid = false;
      $errors[] = 'department을 입력해야 합니다.';
    }
    if(empty($author['phone'])) {
      $valid = false;
      $errors[] = 'phone을 입력해야 합니다.';
    }
    if(empty($author['birthDate'])) {
      $valid = false;
      $errors[] = 'birthDate을 입력해야 합니다.';
    }
    if(empty($author['store'])) {
      $valid = false;
      $errors[] = 'store을 입력해야 합니다.';
    }
    if(empty($author['payType'])) {
      $valid = false;
      $errors[] = 'payType을 입력해야 합니다.';
    }
    if($author['EEID'] != $employeetrainings['EE_ID'] or $author['EEID'] != $employeetrainings2['EE_ID']) {
      $valid = false;
      $errors[] = 'EEID 정보가 일치하지 않습니다.';
    }
    if(empty($employeetrainings['deadline_date']) or empty($employeetrainings2['deadline_date'])) {
      $valid = false;
      $errors[] = '트레이닝 정보의 deadline을 입력해야 합니다.';
    }

    if($valid == true) {
      // $author['password'] = password_hash($author['password'], PASSWORD_DEFAULT);
      $this->employeesTable->save($author);
      $this->employeeTrainingsTable->save($employeetrainings);
      $this->employeeTrainingsTable->save($employeetrainings2);
      header('location: /employee/success');
    }
    else {
        return [
        'template' => 'register.html.php',
        'title' => '사용자 등록',
        'variables' => [
          'errors' => $errors,
          'author' => $author
        ]
      ];
    }

  }

  public function list() {
    $employees = $this->employeesTable->findAll();
    $author = $this-> authentication->getUser();

    return [
      'template' => 'employeeslist.html.php',
      'title' => '직원 목록',
      'variables' => [
        'employees' => $employees,
        'author' =>$author
      ]
    ];
  }

  public function permissions() {
    $author = $this->employeesTable->findById($_GET['id']);

    $reflected = new \ReflectionClass('\Assi\Entity\Employee');
    $constants = $reflected->getConstants();

    return [
      'template' => 'permissions.html.php',
      'title' => '권한 수정',
      'variables' => [
        'author' => $author,
        'permissions' => $constants
      ]
    ];
  }

  public function savePermissions() {
    $author = [
      'id' => $_GET['id'],
      'permission' => array_sum($_POST['permissions'] ?? [])
    ];

    $this->employeesTable->save($author);
    header('location: /employees/list');
  }

  public function edit() {
    $employee = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $author = $this-> authentication->getUser();

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);
    }

    $title = '직원 수정';

    return [
      'template' => 'editemployee.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'author' => $author, 'categories'=>$trainings]
    ];
  }

    public function saveEdit() {
    $authorObject = $this-> authentication->getUser();


    $employee = $_POST['employee'];
    // $joke['jokedate'] = new \DateTime();
    if($_POST['employee[dateOfTerminated]'] == NULL){
      $employee = array_diff($employee, array(NULL));
    }

    $this->employeesTable->save($employee);


    // $employeeEntity = $authorObject->addEmployee($employee);
    // $employeeEntity->clearTrainings();


    // foreach ($_POST['training'] as $categoryId) {
    //   $employeeEntity->addTraining($categoryId);
    // }

    header('location: /employees/list');
  }

  public function delete() {
    // $author = $this->authentication->getUser();

    // if($author->hasPermission(\Assi\Entity\Employee::DELETE_USER)){
    //   return;
    // }

    $this->employeesTable->delete($_POST['id']);

    header('location: /employees/list');
  }


  public function employeedetail() {
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
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null]
    ];
  }
  public function hasTraining($TRID) {
    $employeeTrainings = $this->employeeTrainingsTable->find('EE_ID', $this->EEID);

    foreach ($employeeTrainings as $employeeTraining) {
      if ($employeeTraining->TR_ID == $TRID) {
        return true;
      }
    }
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

    return [
      'template' => 'fail2.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'user' => $author, 'trainings'=>$trainings ?? null, 'employeeTrainings' => $employeeTrainings ?? null, 'employees' => $employees ?? null]
    ];
  }
  public function edit2() {
    $employee = $this->authentication->getUser();
    $trainings = $this->trainingTable->findAll();
    $author = $this-> authentication->getUser();
    $employeeTrainings = $this->employeeTrainingsTable->findAll();

    if (isset($_GET['id'])) {
      $employee = $this->employeesTable->findById($_GET['id']);
    }

    $title = '직원 디테일 수정';

    return [
      'template' => 'editemployeedetail.html.php',
      'title' => $title,
      'variables' => [ 'employee' => $employee ?? null, 'author' => $author, 'trainings'=>$trainings, 'employeeTrainings' => $employeeTrainings ?? null]
    ];
  }
  public function saveEdit2() {


    $employeeTraining = $_POST['employeeTraining'];
    // $joke['jokedate'] = new \DateTime();

    $this->employeeTrainingsTable->save($employeeTraining);
    header('location: /employees/list');
  }
}
