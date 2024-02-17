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
      <div class="button" onclick="location.href='/review1_eng'">
          <p class="btnText">REVIEW</p>
          <div class="btnTwo">
            <p class="btnText2">BACK!</p>
          </div>
       </div>
      <div id="body">

      </div>
      <!-- <div id="title-text" class="md-text">Next</div> -->
      <div class="button" onclick="location.href='./test1_eng'">
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
    <div class="button" onclick="location.href='/review1_spn'">
        <p class="btnText">REVIEW</p>
        <div class="btnTwo">
          <p class="btnText2">BACK!</p>
        </div>
     </div>
    <div id="body">

    </div>
    <!-- <div id="title-text" class="md-text">Next</div> -->
    <div class="button" onclick="location.href='./test1_spn'">
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
  <div id="title-text" class="md-text" style="justify-content:space-around;">준비가 되셨다면 테스트를 시작하겠습니다.</div>
  <div id="title-text" class="md-text" style="font-size: 20px; justify-content:space-around; padding-top:10px;">다시 내용을 보시길 원하신다면 왼편의 Review 를 클릭하여 다시 내용을 확인하실 수 있습니다.</div>
  <div id="container">

    <!-- <div id="title-text" class="md-text">Previous</div> -->
    <div class="button" onclick="location.href='/review1_kor'">
        <p class="btnText">REVIEW</p>
        <div class="btnTwo">
          <p class="btnText2">BACK!</p>
        </div>
     </div>
    <div id="body" style="padding: 50px;">
    <div  style="font-size: 20px; justify-content:space-around; font-weight: 700; text-align:center;">
    테스트 정보
    </div>
    <br>
    <div  style="font-size: 20px; justify-content:space-around; text-align:center;">
    * 시간 제한 없음
    <br>
    * 10개의 문항
    <br>
    * 통과 기준: 80%
    </div>
    <br>
    <br>
    <div  style="font-size: 20px; justify-content:space-around; font-weight: 700; text-align:center;">
    테스트 끝내신 후
    </div>
    <br>
    <div style="font-size: 20px; justify-content:space-around; text-align:center;">
    * OK 버튼을 클릭하여 메인 페이지로 나가실 수 있습니다.
    </div>

    </div>
    <!-- <div id="title-text" class="md-text">Next</div> -->
    <div class="button" onclick="location.href='./test1_kor'">
        <p class="btnText">READY?</p>
        <div class="btnTwo">
          <p class="btnText2">GO!</p>
        </div>
     </div>

  </div>
</body>
<?php endif;?>
</html>
