<?php
namespace Assi;
class AssiRoutes implements \Rheebros\Routes
{

  private $employeesTable;
  private $trainingTable;
  private $employeeTrainingsTable;
  private $authentication;


  public function __construct()
  {
    include __DIR__ . '/../../includes/DatabaseConnection.php';
    $this -> employeesTable = new \Rheebros\DatabaseTable($pdo, 'employee', 'id', '\Assi\Entity\Employee',[&$this->trainingTable, &$this->employeeTrainingsTable]);
    $this->trainingTable = new \Rheebros\DatabaseTable($pdo, 'training','id', '\Assi\Entity\Training', [&$this->employeesTable, &$this->employeeTrainingsTable]);
    $this->employeeTrainingsTable =  new \Rheebros\DatabaseTable($pdo, 'employeetraining', 'id', '\Assi\Entity\EmployeeTraining', [&$this->employeesTable, &$this->trainingTable]);
    $this->authentication =  new \Rheebros\Authentication($this->employeesTable, 'EEID', 'password', 'firstName');
  }

  public function getRoutes(): array
  {


    $trainingController = new \Assi\Controllers\Training($this->trainingTable);
    $registerController = new \Assi\Controllers\Register($this->employeesTable, $this->trainingTable, $this->authentication, $this->employeeTrainingsTable);
    $loginController = new \Assi\Controllers\Login($this->authentication);
    $employeeController = new \Assi\Controllers\Employee($this->employeesTable, $this->trainingTable, $this->authentication, $this->employeeTrainingsTable);
    $employeeTrainingController = new \Assi\Controllers\EmployeeTraining($this->employeesTable, $this->employeeTrainingsTable, $this->authentication);

    $routes = [

      'employees/permissions' => [
        'GET' => [
          'controller' => $registerController,
          'action' => 'permissions'
        ],
        'POST' => [
          'controller' => $registerController,
          'action' => 'savePermissions'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::EDIT_USER_ACCESS
      ],

      'permission/error' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'permissionError'
        ]
      ],
      
      'employees/list' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'list'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_USER
      ],

      'employee/permissions' => [
        'GET' => [
          'controller' => $registerController,
          'action' => 'permissions'
        ],
        'POST' => [
          'controller' => $registerController,
          'action' => 'savePermissions'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::EDIT_USER_ACCESS
      ],
      'permission/error' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'permissionError'
        ]
      ],
      'training/list' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'list'
        ],
        'login' => true
      ],
      'training/edit' => [
        'POST' => [
          'controller' => $trainingController,
          'action' => 'saveEdit'
        ],
        'GET' => [
          'controller' => $trainingController,
          'action' => 'edit'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_TR
      ],
      'training/list' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'list'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_TR
      ],
      'training/delete' => [
        'POST' => [
          'controller' => $trainingController,
          'action' => 'delete'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_TR
      ],
      'training1_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training1'
        ]
      ],
      'training1_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training1'
        ]
      ],
      'training1_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training1'
        ]
      ],
      'training2_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training2'
        ]
      ],
      'training2_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training2'
        ]
      ],
      'training2_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training2'
        ]
      ],
      'training3_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training3'
        ]
      ],
      'training3_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training3'
        ]
      ],
      'training3_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'training3'
        ]
      ],
      'training/uploads' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'list2'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_TR
      ],
      'training/upload' => [
        'POST' => [
          'controller' => $trainingController,
          'action' => 'upload'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::LIST_TR
      ],

      'lastcheck_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck'
        ],
        'login' => true
      ],
      'lastcheck_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck'
        ],
        'login' => true
      ],
      'lastcheck_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck'
        ],
        'login' => true
      ],
      'lastcheck2_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck2'
        ],
        'login' => true
      ],
      'lastcheck2_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck2'
        ],
        'login' => true
      ],
      'lastcheck2_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck2'
        ],
        'login' => true
      ],
      'lastcheck3_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck3'
        ],
        'login' => true
      ],
      'lastcheck3_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck3'
        ],
        'login' => true
      ],
      'lastcheck3_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'lastcheck3'
        ],
        'login' => true
      ],

      'review1_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review1'
        ],
        'login' => true
      ],
      'review1_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review1'
        ],
        'login' => true
      ],

      'review1_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review1'
        ],
        'login' => true
      ],

      'review2_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review2'
        ],
        'login' => true
      ],
      'review2_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review2'
        ],
        'login' => true
      ],
      'review2_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review2'
        ],
        'login' => true
      ],
      'review3_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review3'
        ],
        'login' => true
      ],
      'review3_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review3'
        ],
        'login' => true
      ],
      'review3_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'review3'
        ],
        'login' => true
      ],
      
      'test1_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test1'
        ],
        'login' => true
      ],
      'test2_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test2'
        ],
        'login' => true
      ],
      'test3_kor' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test3'
        ],
        'login' => true
      ],
      'test1_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test1'
        ],
        'login' => true
      ],
      'test2_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test2'
        ],
        'login' => true
      ],
      'test3_eng' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test3'
        ],
        'login' => true
      ],
      'test1_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test1'
        ],
        'login' => true
      ],
      'test2_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test2'
        ],
        'login' => true
      ],
      'test3_spn' => [
        'GET' => [
          'controller' => $trainingController,
          'action' => 'test3'
        ],
        'login' => true
      ],
      'fail1' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'fail1'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'pass1' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'pass1'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'certificate1' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'cert1'
        ],
        'login' => true
      ],
      'certificate2' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'cert2'
        ],
        'login' => true
      ],
      'certificate3' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'cert3'
        ],
        'login' => true
      ],
      'fail2' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'fail2'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'pass2' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'pass2'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'fail3' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'fail3'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'pass3' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'pass3'
        ],
        'POST' => [
          'controller' => $employeeController,
          'action' => 'saveEdit3'
        ],
        'login' => true
      ],
      'employee/register' => [
        'GET' => [
          'controller' => $registerController,
          'action' => 'registrationForm'
        ],
        'POST' => [
          'controller' => $registerController,
          'action' => 'registerUser'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::USER_CREATE
      ],
      'employee/success' => [
        'GET' => [
          'controller' => $registerController,
          'action' => 'success'
        ]
      ],
      'login' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'loginForm'
        ],
        'POST' => [
          'controller' => $loginController,
          'action' => 'processLogin'
        ]
      ],
      'login/success' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'success'
        ],
        'login' => true
      ],
      'login/error' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'error'
        ]
      ],
      'logout' => [
        'GET' => [
          'controller' => $loginController,
          'action' => 'logout'
        ]
      ],
      'employee/detail' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'employeedetail2'
        ],
         'login' => true
      ],
      'employee/view' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'employeeview'
        ],
         'login' => true
      ],
      'employee/edit' => [
        'POST' => [
          'controller' => $registerController,
          'action' => 'saveEdit'
        ],
        'GET' => [
          'controller' => $registerController,
          'action' => 'edit'
        ],
        'login' => true
      ],
      'employee/delete' => [
        'POST' => [
          'controller' => $registerController,
          'action' => 'delete'
        ],
        'login' => true,
        'permissions' => \Assi\Entity\Employee::DELETE_USER
      ],

      'employee/detail/edit' => [
        'POST' => [
          'controller' => $employeeTrainingController,
          'action' => 'saveEdit2'
        ],
        'GET' => [
          'controller' => $employeeTrainingController,
          'action' => 'edit2'
        ],
        'login' => true
      ],

      'orientation_kor' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'orientation'
        ],
         'login' => true
      ],
      'orientation_eng' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'orientation'
        ],
         'login' => true
      ],
      'orientation_spn' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'orientation'
        ],
         'login' => true
      ],

      'insurance' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true
      ],
      'insurance_ga55_kor' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::GA55
      ],
      'insurance_ga55_eng' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::GA55
      ],
      'insurance_ga55_spn' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::GA55
      ],
      'insurance_il70_kor' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::IL70
      ],
      'insurance_il70_eng' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::IL70
      ],
      'insurance_il70_spn' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::IL70
      ],
      'insurance_pa88_kor' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::PA88
      ],
      'insurance_pa88_eng' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::PA88
      ],
      'insurance_pa88_spn' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::PA88
      ],

      'insurance_form_ga55' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance_form'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::GA55
      ],
      'insurance_form_il70' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance_form'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::IL70
      ],
      'insurance_form_pa88' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'insurance_form'
        ],
         'login' => true,
         'permissions' => \Assi\Entity\Employee::PA88
      ],
      // 'training/delete' => [
      //   'POST' => [
      //     'controller' => $trainingController,
      //     'action' => 'delete'
      //   ],
      //   'login' => true,
      //   'permissions' => \Assi\Entity\Employee::EDIT_TR
      // ],
      'example' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'pdf'
        ]
      ],
      'buzz' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'buzz'
        ]
      ],

      '' => [
        'GET' => [
          'controller' => $employeeController,
          'action' => 'home'
        ]
      ]
    ];


    return $routes;

  }

  public function getAuthentication(): \Rheebros\Authentication
  {
    return $this->authentication;
  }

  public function checkPermission($permission) : bool {
    $user = $this->authentication->getUser();

    if($user && $user->hasPermission($permission)){
      return true;
    } else {
      return false;
    }
  }



}
