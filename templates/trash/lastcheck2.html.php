<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/lastcheck.css">
  </head>
  <?php
  if(strpos($_SERVER['REQUEST_URI'], "eng")):?>
  <body>
    <div id="title-text" class="lg-text">Ready for a test?</div>
    <div id="container">

      <!-- <div id="title-text" class="md-text">Previous</div> -->
      <div class="button" onclick="location.href='/review2_eng'">
          <p class="btnText">REVIEW</p>
          <div class="btnTwo">
            <p class="btnText2">BACK!</p>
          </div>
       </div>
      <div id="body">

      </div>
      <!-- <div id="title-text" class="md-text">Next</div> -->
      <div class="button" onclick="location.href='./test2_eng'">
          <p class="btnText">READY?</p>
          <div class="btnTwo">
            <p class="btnText2">GO!</p>
          </div>
       </div>

    </div>
  </body>
<?php endif;?>
<?php
if(strpos($_SERVER['REQUEST_URI'], "spn")):?>
<body>
  <div id="title-text" class="lg-text">스페인어</div>
  <div id="container">

    <!-- <div id="title-text" class="md-text">Previous</div> -->
    <div class="button" onclick="location.href='/review2_spn'">
        <p class="btnText">REVIEW</p>
        <div class="btnTwo">
          <p class="btnText2">BACK!</p>
        </div>
     </div>
    <div id="body">

    </div>
    <!-- <div id="title-text" class="md-text">Next</div> -->
    <div class="button" onclick="location.href='./test2_spn'">
        <p class="btnText">READY?</p>
        <div class="btnTwo">
          <p class="btnText2">GO!</p>
        </div>
     </div>

  </div>
</body>
<?php endif;?>

<?php
if(strpos($_SERVER['REQUEST_URI'], "kor")):?>
<body>
  <div id="title-text" class="lg-text">Ready?(KOR)</div>
  <div id="container">

    <!-- <div id="title-text" class="md-text">Previous</div> -->
    <div class="button" onclick="location.href='/review2_kor'">
        <p class="btnText">REVIEW</p>
        <div class="btnTwo">
          <p class="btnText2">BACK!</p>
        </div>
     </div>
    <div id="body">

    </div>
    <!-- <div id="title-text" class="md-text">Next</div> -->
    <div class="button" onclick="location.href='./test2_kor'">
        <p class="btnText">READY?</p>
        <div class="btnTwo">
          <p class="btnText2">GO!</p>
        </div>
     </div>

  </div>
</body>
<?php endif;?>
</html>
