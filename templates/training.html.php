<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="/css/training1.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script defer src="/js/training.js"></script> -->
    <title></title>
  </head>
  
<?php if(strpos($_SERVER['REQUEST_URI'], "training1") && strpos($_SERVER['REQUEST_URI'], "kor")): ?>
  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRZ5TDS2OLV3mwQFIUApbI37FggJFFszxKc1Q_RWkplGxDOsHie8lsZPE1BE5YNU0FBuzitUF9e7oy2/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1080" height="649" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    <h3 style="color: black;">시험을 볼 준비가 되었으면, 아래 TEST버튼을 클릭해주십시오.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_kor'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training1") && strpos($_SERVER['REQUEST_URI'], "eng")): ?>
  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vR0ERrq6YK7E_aVRm7MUCpesgGrftrEEqlf7UGXLv-fP2nyilrpDnP4gEeR4t2V3hhEmFCsdB_4D_Da/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1080" height="649" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_eng'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training1") && strpos($_SERVER['REQUEST_URI'], "spn")): ?>
  <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTqxxhZDGiFbjQhIocPmYJ7Hc8xNdpNcXkMDc10fTpS44eHCkTy6aTNa6wKaVCngUHuJbR7OVRuhvvZ/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1080" height="649" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    <h3 style="color: black;">Cuando esté listo para la prueba, haga clic en el botón para realizar la prueba.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_spn'">TEST</button>
<?php endif;?>



<?php if(strpos($_SERVER['REQUEST_URI'], "training2") && strpos($_SERVER['REQUEST_URI'], "kor")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test2_kor'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training2") && strpos($_SERVER['REQUEST_URI'], "eng")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test2_eng'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training2") && strpos($_SERVER['REQUEST_URI'], "spn")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test2_spn'">TEST</button> 
<?php endif;?>

<?php if(strpos($_SERVER['REQUEST_URI'], "training3") && strpos($_SERVER['REQUEST_URI'], "kor")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test3_kor'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training3") && strpos($_SERVER['REQUEST_URI'], "eng")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test3_eng'">TEST</button>
<?php endif;?>
<?php if(strpos($_SERVER['REQUEST_URI'], "training3") && strpos($_SERVER['REQUEST_URI'], "spn")): ?>
    <h3 style="color: black;">When you are ready for the test, click the button to take the test.</h3>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test3_spn'">TEST</button>
<?php endif;?>

</html>

<style>
  main{
    width: 100%;
    align-items: center;
  }
  .test_button{
        width: 200px;
        height: 50px;
        margin: 20px;
    }
</style>