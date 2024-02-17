<div style="flex-direction: column; margin: 30px auto;">
<h2 style="text-align: center; color:black;">TRAINING</h2>

<!-- <a href="/training/edit">training 추가</a> -->
<!-- <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training/edit'">Training Add</button> -->
<!-- <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training/uploads'">Training Upload</button> -->
<p>
<?php foreach($trainings as $training): ?>

    <span hidden>id: <?=$training->id?></span>

<blockquote>

  <p>

  NAME : <?=htmlspecialchars($training->name, ENT_QUOTES, 'UTF-8')?><span style="font-weight: 800;">(<?=htmlspecialchars($training->title, ENT_QUOTES, 'UTF-8')?>)</span>
  <div style="width: 200px; margin-left:20px;">
  DATE: <?=$training->update_date?>
  </div>
  <span style="float:right;">
  <a href="/training/edit?id=<?=$training->id?>">EDIT</a>
  </span>
  <!-- <form action="/training/delete" method="post">
    <input type="hidden" name="id" value="<?=$training->id?>">

    <input type="submit" value="Delete">
  </form> -->


 <?php if($training->title == "T1"):?>
 <!-- <a href="/review1">preview</a> -->
 <?php endif;?>

</blockquote>


<?php endforeach; ?>
<br>
<br>
<br>

KOR:
  <div>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training1_kor'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T1"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training2_kor'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T2"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>

  </div>
<br>
ENG:
<div>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training1_eng'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T1"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training2_eng'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T2"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>

  </div>
<br>
SPN:
<div>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training1_spn'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T1"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>
  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/training2_spn'">
  <?php foreach($trainings as $training): ?>
    <?php if($training->title == "T2"):?>
      <?=$training->name?>
    <?php endif;?>
  <?php endforeach; ?>
  </button>

  </div>
</div>
