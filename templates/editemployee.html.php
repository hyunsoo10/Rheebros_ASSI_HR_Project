<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="/css/profile.css">

<div class="container2">
  <div class="grid-7 element-animation">
    <!--card-1-->
    <div class="card color-card">
   
      <img class="profile_detail" src="../profile/<?=$employee->EEID?>.jpg">
      
      <h1 class="title"><?=$employee->firstName?></h1>
  
      <div class="desc top">
    
      </div>
  
      <button type="button" class="btn2 color-a top" onclick="location.href='/employee/detail?id=<?=$employee->id ?? null ?>'">DETAIL</button>

      
      <hr>
    </div>
  </div>

  <!--card-2-->
  <div class="grid-7 element-animation">
    <div class="card color-card-2">
    <?php if ($author->hasPermission(\ASSI\Entity\Employee::EDIT_USER)) :?>

        <form action="" method="post" id="edit_form">
        <input type="hidden" name="employee[id]" value="<?=$employee->id ?? ''?>">
        <label for="EEID"> EEID: </label>
        <input type="text" name="employee[EEID]" disabled value="<?=$employee->EEID ?? '' ?>">
        <label for="firstName"> First Name: </label>
        <input type="text" name="employee[firstName]" value="<?=$employee->firstName ?? '' ?>">
        <label for="lastName"> LastName: </label>
        <input type="text" name="employee[lastName]" value="<?=$employee->lastName ?? '' ?>">
        <label for="gender"> Gender: </label>
        <input type="text" name="employee[gender]" value="<?=$employee->gender ?? '' ?>">
        <label for="phone"> Phone: </label>
        <input type="text" name="employee[phone]" value="<?=$employee->phone ?? '' ?>">
        <label for="payType"> Pay Type: </label>
        <input type="text" name="employee[payType]" value="<?=$employee->payType ?? '' ?>">
        <label for="DOLStatus"> DOL Status: </label>
        <input type="text" name="employee[DOLStatus]" value="<?=$employee->DOLStatus ?? '' ?>">
        <label for="department"> Department: </label>
        <input type="text" name="employee[department]" value="<?=$employee->department ?? '' ?>">
        <label for="position"> Position: </label>
        <input type="text" name="employee[position]" value="<?=$employee->position ?? '' ?>">
        <label for="birthDate"> BirthDate: </label>
        <input type="text" name="employee[birthDate]" value="<?=$employee->birthDate ?? '' ?>">
        <label for="hireDate"> HireDate: </label>
        <input type="text" name="employee[hireDate]" value="<?=$employee->hireDate ?? '' ?>">
        <label for="rehireDate"> Rehire Date: </label>
        <input type="text" name="employee[rehireDate]" value="<?=$employee->rehireDate ?? '' ?>">
        <label for="terminationDate"> Termination Date: </label>
        <input type="date" name="employee[terminationDate]" value="<?=$employee->terminationDate ?? NULL ?>">
        <label for="store"> Store: </label>
        <input type="text" name="employee[store]" value="<?=$employee->store ?? '' ?>">

        <input type="submit" name="submit" value="save" style="float: right; margin-top: 20px;">
        </form>

    <?php else:?>

      <p> 자신이 작성한 글만 수정할 수 있습니다.</p>
    <?php endif;?>
      <div class="container">
        <div class="content">

        </div>
      </div>
    </div>
  </div>
</div>
    </form>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">

<!-- <div class="content_box">
<?php if ($author->hasPermission(\ASSI\Entity\Employee::EDIT_USER)) :?>
<?php else:?>
  <p> 자신이 작성한 글만 수정할 수 있습니다.</p>
<?php endif;?>
