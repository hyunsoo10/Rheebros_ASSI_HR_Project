<?php
namespace Assi\Entity;

use Rheebros\DatabaseTable;

class EmployeeTraining {
	public $EEID;
	public $TRID;
	public $title;
	public $result;
	public $reulst_date;
	public $deadline_date;

	private $employeesTable;
	//private $trainingTable;
	private $employeeTrainingsTable;

	// private $programmingCategoriesTable;

	// public function __construct(DatabaseTable $employeesTable, DatabaseTable $TrainingTable) {
	// 	$this->employeesTable = $employeesTable;
	// 	$this->TrainingTable = $TrainingTable;

	// }
	public function __construct(DatabaseTable $employeeTrainingsTable, DatabaseTable $employeesTable) {
		//$this->trainingTable = $trainingTable;
		$this->employeeTrainingsTable = $employeeTrainingsTable;
		$this->employeesTable = $employeesTable;
	}

}
