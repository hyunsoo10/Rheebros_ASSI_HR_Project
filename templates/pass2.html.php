<script>
//직접 접근 막기
if(!document.referrer.includes("test2")){
  location.href = "/";
}
</script>
<div class="content_box">
login EEID:
<?php echo $_SESSION['useremail']; ?>

<?php foreach ($employees as $emp): ?>
    <?php if($emp->EEID == $_SESSION['useremail'] ):?>
        <div>id : <?=$emp->id?></div>
        <div>EEID: <?=$emp->EEID?></div>
        <div>fisrtName: <?=$emp->firstName?></div>
    <?php endif;?>

 <?php endforeach?>

---------------------------
<?php echo"Training Info";?>
---------------------------
 <?php foreach ($trainings as $training): ?>
    <?php if($training->id == 2 ):?>
        <div>id : <?=$training->id?></div>
        <div>title: <?=$training->title?></div>
        <div>date: <?=$training->dateOfUpdated?></div>
    <?php endif;?>
 <?php endforeach?>

---------------------------
 <?php echo"user training info";?>
---------------------------
<form action="" method="post" id="edit_form">
 <?php foreach ($employeeTrainings as $employeetraining): ?>
    <?php if( $employeetraining->EE_ID == $_SESSION['useremail'] && $employeetraining->title == "T2" ):?>
        <div>EEID : <?=$employeetraining->EE_ID?></div>
        <div>title: <?=$employeetraining->title?></div>
        <input type="hidden" name="employeeTraining[id]" value="<?=$employeetraining->id?>">
        <!-- <input type="text" name="employeeTraining[result]" value="<?=$employeetraining->result ?? 'fail' ?>"> -->
        <input type="hidden" name="employeeTraining[result]" value="pass">
        <input type="hidden" name="employeeTraining[result_date]" value="<?=date("Y-m-d")?>">
        <input type="hidden" name="employeeTraining[deadline_date]" value="<?=date("Y-m-d", strtotime("+12 month", time()))?>">
        <label for="employeeTraining[result]"> result: </label>
        <input type="text" name="employeeTraining[result]" value="pass" disabled>
        <label for="employeeTraining[result_date]"> result_date: </label>
        <input type="date" name="employeeTraining[result_date]" value="<?=date("Y-m-d")?>" disabled>
        <label for="employeeTraining[deadline_date]"> new deadline_date: </label>
        <input type="date" name="employeeTraining[deadline_date]" value="<?=date("Y-m-d", strtotime("+12 month", time()))?>" disabled>
        <br>
        <br>
        <br>
        <br>
    <?php endif;?>
 <?php endforeach?>
 <!-- <input type="submit" name="submit" value="save"style="margin-top:30px; float:right;"> -->
</form>
</div>

<script>
  this.document.getElementById("edit_form").submit();
</script>
