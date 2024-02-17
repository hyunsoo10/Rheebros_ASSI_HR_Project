<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="/css/profile.css">
<?php if ($author->id == $employee->id) :?>
<div class="container2">
  <div class="grid-7 element-animation">
    <!--card-1-->
    <div class="card color-card">
      <!-- <ul>
        <li><i class="fas fa-arrow-left i-l w"></i></li>
        <li><i class="fas fa-ellipsis-v i-r w"></i></li>
        <li><i class="far fa-heart i-r w"></i></li>
      </ul> -->
   
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
    <div class="card color-card-2 profile_view">

        <div>EEID: <span><?=$employee->EEID ?? '' ?></span></div>
        <div>First Name: <span><?=$employee->firstName ?? '' ?></span></div>
        <div>Last Name: <span><?=$employee->lastName ?? '' ?></span></div>
        <div>Gender: <span><?=$employee->gender ?? '' ?></span></div>
        <div>Phone: <span><?=$employee->phone ?? '' ?></span></div>
        <div>Pay Type: <span><?=$employee->payType ?? '' ?></span></div>
        <div>DOL Status: <span><?=$employee->DOLStatus ?? '' ?></span></div>
        <div>Department: <span><?=$employee->department ?? '' ?></span></div>
        <div>Position: <span><?=$employee->position ?? '' ?></span></div>
        <div>Birth Date: <span><?=$employee->birthDate ?? '' ?></span></div>
        <div>Hire Date: <span><?=$employee->hireDate ?? '' ?></span></div>
        <div>rehire Date: <span><?=$employee->rehireDate ?? '' ?></span></div>
        <div>Termination Date: <span><?=$employee->terminationDate ?? '' ?></span></div>
        <div>Store: <span><?=$employee->store ?? '' ?></span></div>

        
    
  
    <?php else:?>

      <p>You're not allowed to see this page</p>
    <?php endif;?>
      <!-- <h1 class="title-2">Bevely Little</h1>
      <p class="job-title"> SENIOR PRODUCT DESIGNER</p>
      <div class="desc top">
        <p>Create usable interface and designs @GraphicSpark</p>
      </div>
      <button class="btn2 color-a top"> Hire me</button> -->


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

