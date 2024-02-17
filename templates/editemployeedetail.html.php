
<div class="content_box">
<?php if ($author->hasPermission(\ASSI\Entity\Employee::EDIT_USER)) :?>
<form action="" method="post" id="edit_form">
<!--
  <input type="hidden" name="employee[id]" value="<?=$employee->id ?? ''?>">
  <label for="EEID"> EEID: </label>
  <input type="text" name="employee[EEID]" disabled value="<?=$employee->EEID ?? '' ?>">
  <label for="firstName"> FirstName: </label>
  <input type="text" name="employee[firstName]" disabled value="<?=$employee->firstName ?? '' ?>"> -->
  <?php $i=0;?>
    <?php foreach ($employeeTrainings as $employeeTraining): ?>
        <?php if ($employee->EEID == $employeeTraining->EE_ID) :?>
          <?php $i++;?>

        <input type="hidden" name="employeeTraining<?=$i?>[id]" value="<?=$employeeTraining->id ?? '' ?>">
        <!-- <label for="employeeTraining<?=$i?>[EE_ID]"> EE_ID: </label> -->
        <input type="hidden" name="employeeTraining<?=$i?>[EE_ID]" value="<?=$employeeTraining->EE_ID ?? '' ?>">
        <!-- <label for="employeeTraining<?=$i?>[TR_ID]"> TR_ID: </label> -->
        <input type="hidden" name="employeeTraining<?=$i?>[TR_ID]" value="<?=$employeeTraining->TR_ID ?? '' ?>">
        <label for="employeeTraining<?=$i?>[title]"> title: </label>
        <input type="text" name="employeeTraining<?=$i?>[title]" value="<?=$employeeTraining->title ?? '' ?>" disabled>
        <label for="employeeTraining<?=$i?>[result]"> result: </label>
        <input type="text" name="employeeTraining<?=$i?>[result]" value="<?=$employeeTraining->result ?? '' ?>">
        <label for="employeeTraining<?=$i?>[result_date]"> result_date: </label>
        <input type="date" name="employeeTraining<?=$i?>[result_date]" value="<?=$employeeTraining->result_date ?? '' ?>">
        <label for="employeeTraining<?=$i?>[deadline_date]"> deadline_date: </label>
        <input  style = "margin-bottom:25px;" type="date" name="employeeTraining<?=$i?>[deadline_date]" value="<?=$employeeTraining->deadline_date ?? '' ?>">

        <?php endif;?>

    <?php endforeach;?>
  <input type="submit" name="submit" value="save">

</form>
<?php else:?>
  <p> 자신이 작성한 글만 수정할 수 있습니다.</p>
<?php endif;?>
</div>
<!--
Actually I want to talk to you in person. It won't take long, jsut give me 5 minutes.

-->
