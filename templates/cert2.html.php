<link rel="stylesheet" href="/css/cert.css">
<script>
//직접 접근 막기
// if(!document.referrer.includes("test1")){
//   location.href = "/";
// }

</script>
<div class="certification_box" style="">
  <!-- <input type="hidden" name="capture2_image" value="">
  <input type="button" onclick="capture2_html('capture2')" value="save certificate" style="text-align: cetner;"> -->
  <!-- <input type="button" onclick="capture2_save_server('capture2')" value="서버에 이미지 저장"> -->

  <!--캡처 영영-->
  <br><br><br>
  <div id="capture2">
    <br>
    <br>
<br>
<!-- login EEID:
<?php echo $_SESSION['useremail']; ?>

<?php foreach ($employees as $emp): ?>
    <?php if($emp->EEID == $_SESSION['useremail'] ):?>
        <div>id : <?=$emp->id?></div>
        <div>EEID: <?=$emp->EEID?></div>
        <div>fisrtName: <?=$emp->firstName?></div>
    <?php endif;?>

 <?php endforeach?> -->
 <br>
 <br>
<!-- ------------------------------------------------------
<h4>Training info</h4>

 <?php foreach ($trainings as $training): ?>
    <?php if($training->id == 1):?>
        <div>id : <?=$training->id?></div>
        <div>title: <?=$training->title?></div>
        <div>date: <?=$training->dateOfUpdated?></div>
    <?php endif;?>
 <?php endforeach?>
 <br>
 <br> -->
<!-- ------------------------------------------------------
<h4>user training info</h4> -->

<form action="" method="post" id="edit_form" class="content_box">
 <?php foreach ($employeeTrainings as $employeetraining): ?>
    <?php if( $employeetraining->EE_ID == $employee->EEID && $employeetraining->title == "T2" ):?>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        <div>First Name : <span style="font-size: 20px;"><?=$employee->firstName?><span></div>
        <div>Last Name : <span style="font-size: 20px;"><?=$employee->lastName?><span></div>
      <br>
      <br>
      <br>
      <?php foreach ($trainings as $training): ?>
        <?php if($training->id == 2):?>
        <div style="font-size: 20px; font-weight: 600;"><?=$training->name?></div>
        <?php endif;?>
      <?php endforeach?>
      <br>
        <div>Result Date: <?=date("m/d/Y", strtotime($employeetraining->result_date))?></div>
     

        <input type="hidden" name="employeeTraining[id]" value="<?=$employeetraining->id?>">
        <!-- <input type="text" name="employeeTraining[result]" value="<?=$employeetraining->result ?? 'fail' ?>"> -->
        <input type="hidden" name="employeeTraining[result]" value="pass">
        <input type="hidden" name="employeeTraining[result_date]" value="<?=date("Y-m-d")?>">
        <br>
        <br>
        <!-- <div>deadline_date: <?=$employeetraining->deadline_date?></div> -->
    <?php endif;?>
 <?php endforeach?>
 <!-- <input type="submit" name="submit" value="save"> -->
 <!-- <input type="hidden" name="capture2_image" value="">
 <input type="button" onclick="capture2_html('capture2')" value="save certificate" style="text-align: cetner;"> -->
</form>

</div>
  <input type="hidden" name="capture2_image" value="">
  <input type="button" onclick="capture2_html('capture2')" value="save certificate" style="text-align: cetner;">
</div>
<script>
function capture2_html(id){
  html2canvas(document.querySelector("#"+id)).then(canvas => {
    capture2_save(canvas.toDataURL('img/png'), "<?=$employee->firstName?>_certificate_T2.png");
  });
}

function capture2_save(uri, filename) {
  var link = document.createElement('a');
  if(typeof link.download === 'string'){
    link.href = uri;
    link.download = filename;
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  } else{
    window.open(uri);
  }
}
// function capture2_save_server(id){
//   var form=document.form;
//   var capture2_image="";
//   html2canvas(document.querySelector("#"+id)).then(canvas => {
//     capture2_image=canvas.toDataURL('image/png');
//   });
//   setTimeout(function(){
//     $.ajax({
//       type: 'post',
//       async: false,
//       url: '../test/form.php',
//       data: {'t': 'capture2_save_server', 'capture2_image':capture2_image},
//       success.function(data){
//         $("#server_img").html(data);
//       }
//     });
//   }, 500);
// }
</script>
