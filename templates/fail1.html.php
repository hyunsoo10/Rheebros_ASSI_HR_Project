<script>
if(!document.referrer.includes("test1")){
  location.href = "/";
}
</script>
<main style="flex-direction:column";>
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
    <?php if($training->id == 1 ):?>
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
    <?php if( $employeetraining->EE_ID == $_SESSION['useremail'] && $employeetraining->title == "T1" ):?>
        <div>EEID : <?=$employeetraining->EE_ID?></div>
        <div>title: <?=$employeetraining->title?></div>
        <input type="hidden" name="employeeTraining[id]" value="<?=$employeetraining->id?>">
        <label for="employeeTraining[result]"> result: </label>
        <!-- <input type="text" name="employeeTraining[result]" value="<?=$employeetraining->result ?? 'fail' ?>"> -->
        <input type="text" name="employeeTraining[result]" value="fail">
        <label for="employeeTraining[result_date]"> result_date: </label>
        <input type="date" name="employeeTraining[result_date]" value="<?=date("Y-m-d")?>">
        <br>
        <br>
        <br>
        <br>
        <div>deadline_date: <?=$employeetraining->deadline_date?></div>
    <?php endif;?>
 <?php endforeach?>
 <!-- <input type="submit" name="submit" value="save"> -->
</form>

</main>
<script>
  this.document.getElementById("edit_form").submit();
</script>
