<?php
namespace Assi\Entity;

class Employee {
  const GA55 = 1;
  const IL70 = 2;
  const PA88 = 4;
  const LIST_USER = 8;
  const LIST_TR = 16;
  const EDIT_USER = 32;
  const USER_CREATE = 64;
  const DELETE_USER = 128;
  const EDIT_USER_ACCESS = 256;


  public $id;
  public $EEID;
  public $password;
  public $lastName;
  public $firstName;
  public $gender;
  public $phone;
  public $birthDate;
  public $DOLStatus;
  public $department;
  public $position;
  public $hireDate;
  public $rehireDate;
  public $payType;
  public $terminationDate;
  public $permission;

  private $employeesTable;
  private $employeeTrainingsTable;


  public function __construct(\Rheebros\DatabaseTable $employeesTable, \Rheebros\DatabaseTable $employeeTrainingsTable)
  {
    $this->employeesTable = $employeesTable;
    $this->employeeTrainingsTable = $employeeTrainingsTable;


  }

  // public function getTraining()
  // {
  //   return $this->trainingTable->find('id', $this->id);
  // }
//   public function getJokes()
//   {
//     return $this->jokesTable->find('authorid', $this->id);
//   }
  // public function getProgramming()
  // {
  //   return $this->programmingTable->find('authorid', $this->id);
  // }
  public function hasPermission($permission) {
    return $this-> permission & $permission;
  }

  public function addTraining($TRID) {
    $employeeTR = ['EE_ID' => $this->EEID, 'TR_ID' => $TRID];

    return $this->employeeTrainingsTable->save($employeeTR);
  }

  // public function addCategory($categoryId) {
	// 	$jokeCat = ['jokeId' => $this->id, 'categoryId' => $categoryId];

	// 	$this->jokeCategoriesTable->save($jokeCat);
	// }
  public function hasTraining($TRID) {
    $employeeTrainings = $this->employeeTrainingsTable->find('EE_ID', $this->EEID);

    foreach ($employeeTrainings as $employeeTraining) {
      if ($employeeTraining->TR_ID == $TRID) {
        return true;
      }
    }
  }
  // public function clearCategories() {
	// 	$this->jokeCategoriesTable->deleteWhere('jokeId', $this->id);
	// }
}
