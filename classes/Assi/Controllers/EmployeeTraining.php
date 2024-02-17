<?php
namespace Assi\Controllers;
use \Rheebros\DatabaseTable;
use \Rheebros\Authentication;


class EmployeeTraining
{
  private $employeesTable;
  private $employeeTrainingsTable;
  private $authentication;

  public function __construct(DatabaseTable $employeesTable, DatabaseTable $employeeTrainingsTable,  Authentication $authentication)
  {
    $this -> employeesTable = $employeesTable;
    $this-> employeeTrainingsTable = $employeeTrainingsTable;
    $this -> authentication = $authentication;
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
      'variables' => ['author' => $author, 'employee' => $employee, 'employeeTrainings' => $employeeTrainings ?? null]
    ];
  }
  public function saveEdit2() {


    $employeeTraining1 = $_POST['employeeTraining1'];
    $employeeTraining2 = $_POST['employeeTraining2'];
    $employeeTraining3 = $_POST['employeeTraining3'];
    // $joke['jokedate'] = new \DateTime();

    $this->employeeTrainingsTable->save($employeeTraining1);
    $this->employeeTrainingsTable->save($employeeTraining2);
    $this->employeeTrainingsTable->save($employeeTraining3);
    header('location: /employees/list');
  }



}
