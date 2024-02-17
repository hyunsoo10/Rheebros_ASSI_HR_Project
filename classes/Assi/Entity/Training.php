<?php
namespace Assi\Entity;

use Rheebros\DatabaseTable;

class Training {
	public $id;
	public $title;
	private $employeesTable;
	private $employeeTrainingsTable;
	// private $programmingCategoriesTable;

	public function __construct(DatabaseTable $employeesTable, DatabaseTable $employeeTrainingsTable) {
		$this->employeesTable = $employeesTable;
		$this->employeeTrainingsTable = $employeeTrainingsTable;
	}

	// public function getemployees($limit=null, $offset=null) {
	// 	$employeeTrainings = $this->employeeTrainingTable->find('TR_ID', $this->id, null, $limit, $offset);

	// 	$jokes = [];

	// 	foreach ($employeeTrainings as $employeeTraining) {
	// 		$joke =  $this->jokesTable->findById($jokeCategory->jokeId);
	// 		if ($joke) {
	// 			$jokes[] = $joke;
	// 		}
	// 	}
	// 	usort($jokes, [$this, 'sortJokes']);

	// 	return $jokes;
	// }
	public function getProgramming($limit=null, $offset=null) {
		$jokeCategories = $this->jokeCategoriesTable->find('categoryId', $this->id, null, $limit, $offset);

		$progs = [];

		foreach ($jokeCategories as $jokeCategory) {
			$prog =  $this->programmingTable->findById($jokeCategory->prog_id);
			if ($prog) {
				$progs[] = $prog;
			}
		}
		usort($progs, [$this, 'sortJokes']);

		return $progs;
	}

	public function getNumJokes() {
		return $this->jokeCategoriesTable->total('categoryId', $this->id);
	}

	private function sortJokes($a, $b) {
		$aDate = new \DateTime($a->jokedate);
		$bDate = new \DateTime($b->jokedate);

		if ($aDate->getTimestamp() == $bDate->getTimestamp()) {
			return 0;
		}

		return $aDate->getTimestamp() < $bDate->getTimestamp() ? -1 : 1;
	}
}
