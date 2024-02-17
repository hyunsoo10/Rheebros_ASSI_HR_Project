<html>
<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="../css/review.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>

</head>
<?php
  if(strpos($_SERVER['REQUEST_URI'], "eng")){
    //$dir = __DIR__;
    $dir =  $_SERVER['DOCUMENT_ROOT'].'/uploads/ENG/T2';
    //echo $dir;
    $handle = opendir($dir);
    $files = array();

    while(($filename = readdir($handle)) !== false) {
      if($filename == '.' || $filename == '..'){
        continue;
      }
      if(is_file($dir . "/" . $filename)){
        $files[] = $filename;
      }
    }
  }elseif (strpos($_SERVER['REQUEST_URI'], "spn")) {
    $dir =  $_SERVER['DOCUMENT_ROOT'].'/uploads/SPN/T2';
    $handle = opendir($dir);
    $files = array();

    while(($filename = readdir($handle)) !== false) {
      if($filename == '.' || $filename == '..'){
        continue;
      }
      if(is_file($dir . "/" . $filename)){
        $files[] = $filename;
      }
    }
  } else{
    $dir =  $_SERVER['DOCUMENT_ROOT'].'/uploads/KOR/T2';
    $handle = opendir($dir);
    $files = array();

    while(($filename = readdir($handle)) !== false) {
      if($filename == '.' || $filename == '..'){
        continue;
      }
      if(is_file($dir . "/" . $filename)){
        $files[] = $filename;
      }
    }
  }
  ?>
<body>
<?php if(strpos($_SERVER['REQUEST_URI'], "eng")): ?>
  <div class="title lastcheck" onclick="location.href='lastcheck2_eng'">
    <button class="custom-btn btn-4">Go back to the last page</button>
  </div>
  <?php endif;?>
  <?php if(strpos($_SERVER['REQUEST_URI'], "spn")): ?>
  <div class="title lastcheck" onclick="location.href='lastcheck2_spn'">
    <button class="custom-btn btn-4">Go back to the last page</button>
  </div>
  <?php endif;?>
  <?php if(strpos($_SERVER['REQUEST_URI'], "kor")): ?>
  <div class="title lastcheck" onclick="location.href='lastcheck2_kor'">
    <button class="custom-btn btn-4">Go back to the last page</button>
  </div>
  <?php endif;?>
  <div class="slider">
  <?php sort($files);?>
  <?php if(strpos($_SERVER['REQUEST_URI'], "eng")): ?>
        <?php foreach ($files as $key => $value): ?>
                <div id="slide-<?=$key?>"><img src="/uploads/ENG/T2/<?=$files[$key]?>" alt=""></div>
        <?php endforeach;?>
        <?php endif;?>
        <?php if(strpos($_SERVER['REQUEST_URI'], "spn")): ?>
        <?php foreach ($files as $key => $value): ?>
                <div id="slide-<?=$key?>"><img src="/uploads/SPN/T2/<?=$files[$key]?>" alt=""></div>
        <?php endforeach;?>
        <?php endif;?>
        <?php if(strpos($_SERVER['REQUEST_URI'], "kor")): ?>
        <?php foreach ($files as $key => $value): ?>
                <div id="slide-<?=$key?>"><img src="/uploads/KOR/T2/<?=$files[$key]?>" alt=""></div>
        <?php endforeach;?>
        <?php endif;?>
  </div>

</body>
</html>