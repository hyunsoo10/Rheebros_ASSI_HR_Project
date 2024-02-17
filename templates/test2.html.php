<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/test.css">
    <title>exam page</title>
  </head>
  <body>
  <?php if(strpos($_SERVER['REQUEST_URI'], "kor")): ?>
    <div class="grid">
      <h1>퀴즈</h1>
      <div id="quiz">
        <p id="question"></p>
        <div class="buttons">
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          
        </div>
        <footer id="quiz_footer">
          <p id="progress">진행 정보</p>
        </footer>

      </div> <!--end quiz-->
    </div> <!-- end grid-->
    <script defer src="../js/test2.js"></script>
    <?php endif;?>
    <?php if(strpos($_SERVER['REQUEST_URI'], "eng")): ?>
    <div class="grid">
      <h1>QUIZ</h1>
      <div id="quiz">
        <p id="question"></p>
        <div class="buttons">
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          
        </div>
        <footer id="quiz_footer">
          <p id="progress">PROGRESS</p>
        </footer>

      </div> <!--end quiz-->
    </div> <!-- end grid-->
    <script defer src="../js/test2.js"></script>
    <?php endif;?>

    <?php if(strpos($_SERVER['REQUEST_URI'], "spn")): ?>
    <div class="grid">
      <h1>퀴즈(스페인어)</h1>
      <div id="quiz">
        <p id="question"></p>
        <div class="buttons">
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          <button class="btn_test" type="button" name="button"></button>
          
        </div>
        <footer id="quiz_footer">
          <p id="progress">PROGRESS</p>
        </footer>

      </div> <!--end quiz-->
    </div> <!-- end grid-->
    <script defer src="../js/test2.js"></script>
    <?php endif;?>
  </body>


</html>
