<?php
namespace Assi\Controllers;

class Training
{
  private $trainingTable;

  public function __construct(\Rheebros\DatabaseTable $trainingTable)
  {
    $this->trainingTable = $trainingTable;
  }

  public function edit() {

		if (isset($_GET['id'])) {
			$training = $this->trainingTable->findById($_GET['id']);
		}

		$title = 'Training 수정';

		return ['template' => 'edittraining.html.php',
				'title' => $title,
				'variables' => [
					'training' => $training ?? null
				]
		];
	}

  public function home() {


    $title = 'Assi';
    return ['template' => 'home.html.php', 'title' => $title];
  }


  public function saveEdit() {
		$training = $_POST['training'];

		$this->trainingTable->save($training);

		header('location: /training/list');
	}

  public function list() {
    $trainings = $this->trainingTable->findAll();
    $title = 'Training 목록';

    return ['template' => 'traininglist.html.php',
            'title' => $title,
            'variables' => [
              'trainings' => $trainings
            ]
            ];
  }
  public function list2() {
    $trainings = $this->trainingTable->findAll();
    $title = 'Training 목록';

    return ['template' => 'trainingupload.html.php',
            'title' => $title,
            'variables' => [
              'trainings' => $trainings
            ]
            ];
  }

  public function upload(){

    for($i = 0; $i < count($_FILES['upload']['name']); $i++){
        // $training = $_POST['training'];
        $uploadfile = $_FILES['upload']['name'][$i];
        if ($_POST['id'] == 1){$upload_folder = "uploads/T1/";}
        else if($_POST['id'] == 2){
          $upload_folder = "uploads/T2/";
        } else if($_POST['id'] == 3){
          $upload_folder = "uploads/T3/";
        }  else {
          $upload_folder = "uploads/T4/";
        }
        if(move_uploaded_file($_FILES['upload']['tmp_name'][$i], $upload_folder .$uploadfile)){

            // echo "<img src ={$_FILES['upload']['name'][$i]} style='width:100px'> <p>";
            // echo "1. file name : {$_FILES['upload']['name'][$i]}<br />";
            // echo "2. file type : {$_FILES['upload']['type'][$i]}<br />";
            // echo "3. file size : {$_FILES['upload']['size'][$i]} byte <br />";
            // echo "4. temporary file size : {$_FILES['upload']['size'][$i]}<br />";
        } else {
            echo '<script>alert(\'파일 업로드 실패 !! 다시 시도해주세요.\');</script>';
            // echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
        }

    }
    echo '<script>alert(\'업로드 성공.\');</script>';
    // header('location: /training/list');
    header('Refresh:0; URL=/training/list');
  }


  public function delete() {
    $this->trainingTable->delete($_POST['id']);

    header('location: /training/list');
  }

  public function training1() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Training1(eng)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Training1(spn)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    else{
      $title = 'Training1(kor)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
  }

  public function training2() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Training2(eng)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Training2(spn)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    else{
      $title = 'Training2(kor)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
  }

  public function training3() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Training3(eng)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Training3(spn)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
    else{
      $title = 'Training3(kor)';
      return ['template' => 'training.html.php', 'title' => $title];
    }
  }


  // public function training2() {
  //
  //
  //   $title = 'Training2';
  //   return ['template' => 'training2.html.php', 'title' => $title];
  // }
  //
  // public function training3() {
  //
  //
  //   $title = 'Training3';
  //   return ['template' => 'training3.html.php', 'title' => $title];
  // }
  //
  // public function training1_eng() {
  //
  //
  //   $title = 'Training1';
  //   return ['template' => 'training1(eng).html.php', 'title' => $title];
  // }
  // public function training2_eng() {
  //
  //
  //   $title = 'Training2';
  //   return ['template' => 'training2(eng).html.php', 'title' => $title];
  // }
  //
  // public function training3_eng() {
  //
  //
  //   $title = 'Training3';
  //   return ['template' => 'training3(eng).html.php', 'title' => $title];
  // }
  // public function training1_spn() {
  //
  //
  //   $title = 'Training1';
  //   return ['template' => 'training1(spn).html.php', 'title' => $title];
  // }
  // public function training2_spn() {
  //
  //
  //   $title = 'Training2';
  //   return ['template' => 'training2(spn).html.php', 'title' => $title];
  // }
  //
  // public function training3_spn() {
  //
  //
  //   $title = 'Training3';
  //   return ['template' => 'training3(spn).html.php', 'title' => $title];
  // }

  public function lastcheck() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Lastcheck(eng)';
      return ['template' => 'lastcheck.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Lastcheck(spn)';
      return ['template' => 'lastcheck.html.php', 'title' => $title];
    }
    else{
      $title = 'Lastcheck(kor)';
      return ['template' => 'lastcheck.html.php', 'title' => $title];
    }
  }
  public function lastcheck2() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Lastcheck(eng)';
      return ['template' => 'lastcheck2.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Lastcheck(spn)';
      return ['template' => 'lastcheck2.html.php', 'title' => $title];
    }
    else{
      $title = 'Lastcheck(kor)';
      return ['template' => 'lastcheck2.html.php', 'title' => $title];
    }
  }

  public function lastcheck3() {

    if(strpos($_SERVER['REQUEST_URI'], "eng")){
      $title = 'Lastcheck(eng)';
      return ['template' => 'lastcheck3.html.php', 'title' => $title];
    }
    elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
      $title = 'Lastcheck(spn)';
      return ['template' => 'lastcheck3.html.php', 'title' => $title];
    }
    else{
      $title = 'Lastcheck(kor)';
      return ['template' => 'lastcheck3.html.php', 'title' => $title];
    }
  }


  //
  // public function lastcheck2() {
  //
  //   $title = 'Lastcheck';
  //   return ['template' => 'lastcheck2.html.php', 'title' => $title];
  // }
  //
  // public function lastcheck3() {
  //
  //   $title = 'Lastcheck';
  //   return ['template' => 'lastcheck3.html.php', 'title' => $title];
  // }
  //
  //   public function lastcheck_eng() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck(eng).html.php', 'title' => $title];
  //   }
  //
  //   public function lastcheck2_eng() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck2(eng).html.php', 'title' => $title];
  //   }
  //
  //   public function lastcheck3_eng() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck3(eng).html.php', 'title' => $title];
  //   }
  //
  //   public function lastcheck_spn() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck(spn).html.php', 'title' => $title];
  //   }
  //
  //   public function lastcheck2_spn() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck2(spn).html.php', 'title' => $title];
  //   }
  //
  //   public function lastcheck3_spn() {
  //
  //     $title = 'Lastcheck';
  //     return ['template' => 'lastcheck3(spn).html.php', 'title' => $title];
  //   }

    public function review1() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'Review1(eng)';
        return ['template' => 'review1.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'Review1(spn)';
        return ['template' => 'review1.html.php', 'title' => $title];
      }
      else{
        $title = 'Review1(kor)';
        return ['template' => 'review1.html.php', 'title' => $title];
      }
    }
    public function review2() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'Review2(eng)';
        return ['template' => 'review2.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'Review2(spn)';
        return ['template' => 'review2.html.php', 'title' => $title];
      }
      else{
        $title = 'Review2(kor)';
        return ['template' => 'review2.html.php', 'title' => $title];
      }
    }
    public function review3() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'Review3(eng)';
        return ['template' => 'review3.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'Review3(spn)';
        return ['template' => 'review3.html.php', 'title' => $title];
      }
      else{
        $title = 'Review3(kor)';
        return ['template' => 'review3.html.php', 'title' => $title];
      }
    }

    //
    //
    // public function review2() {
    //
    //   $title = 'Review2';
    //   return ['template' => 'review2.html.php', 'title' => $title];
    // }
    // public function review3() {
    //
    //   $title = 'Review3';
    //   return ['template' => 'review3.html.php', 'title' => $title];
    // }
    //
    // public function review1_eng() {
    //
    //   $title = 'Review1';
    //   return ['template' => 'review1(eng).html.php', 'title' => $title];
    // }
    // public function review2_eng() {
    //
    //   $title = 'Review2';
    //   return ['template' => 'review2(eng).html.php', 'title' => $title];
    // }
    // public function review3_eng() {
    //
    //   $title = 'Review3';
    //   return ['template' => 'review3(eng).html.php', 'title' => $title];
    // }
    //
    // public function review1_spn() {
    //
    //   $title = 'Review1';
    //   return ['template' => 'review1(spn).html.php', 'title' => $title];
    // }
    // public function review2_spn() {
    //
    //   $title = 'Review2';
    //   return ['template' => 'review2(spn).html.php', 'title' => $title];
    // }
    // public function review3_spn() {
    //
    //   $title = 'Review3';
    //   return ['template' => 'review3(spn).html.php', 'title' => $title];
    // }


    public function test1() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'TEST(eng)';
        return ['template' => 'test1.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'TEST(spn)';
        return ['template' => 'test1.html.php', 'title' => $title];
      }
      else{
        $title = 'TEST(kor)';
        return ['template' => 'test1.html.php', 'title' => $title];
      }
    }
    
    public function test2() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'TEST2(eng)';
        return ['template' => 'test2.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'TEST2(spn)';
        return ['template' => 'test2.html.php', 'title' => $title];
      }
      else{
        $title = 'TEST2(kor)';
        return ['template' => 'test2.html.php', 'title' => $title];
      }
    }

    public function test3() {
      if(strpos($_SERVER['REQUEST_URI'], "eng")){
        $title = 'TEST3(eng)';
        return ['template' => 'test3.html.php', 'title' => $title];
      }
      elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
        $title = 'TEST3(spn)';
        return ['template' => 'test3.html.php', 'title' => $title];
      }
      else{
        $title = 'TEST3(kor)';
        return ['template' => 'test3.html.php', 'title' => $title];
      }
    }


    // public function test1_eng() {
    //   $title = 'TEST1';
    //   return ['template' => 'test1(eng).html.php', 'title' => $title];
    // }
    // public function test2_eng() {
    //   $title = 'TEST2';
    //   return ['template' => 'test2(eng).html.php', 'title' => $title];
    // }
    // public function test3_eng() {
    //   $title = 'TEST3';
    //   return ['template' => 'test3(eng).html.php', 'title' => $title];
    // }
    // public function test1_spn() {
    //   $title = 'TEST1';
    //   return ['template' => 'test1(spn).html.php', 'title' => $title];
    // }
    // public function test2_spn() {
    //   $title = 'TEST2';
    //   return ['template' => 'test2(spn).html.php', 'title' => $title];
    // }
    // public function test3_spn() {
    //   $title = 'TEST3';
    //   return ['template' => 'test3(spn).html.php', 'title' => $title];
    // }
}
