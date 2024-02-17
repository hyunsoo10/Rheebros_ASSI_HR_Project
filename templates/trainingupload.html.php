<div style="flex-direction: column; width: 500px; margin: 30px auto;">
<h2>Training</h2>
<button type="button" class="btn btn-outline-secondary" onclick="location.href='/training/list'">Training List</button>
<p>
<?php foreach($trainings as $training): ?>

    <span hidden>id: <?=$training->id?></span>

<blockquote>

  <p>
  title: <?=htmlspecialchars($training->title, ENT_QUOTES, 'UTF-8')?>

  <div style="width: 200px;">
    date: <?=$training->dateOfUpdated?>
  </div>


 <?php if($training->title == "T1"):?>
 <!-- <a href="/review1">preview</a> -->
 <?php endif;?>
 <form method="post" action="/training/upload" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$training->id?>">
        <input type="file" name="upload[]" multiple style="width: 250px;">
        <input type="submit" value="send">
</form>

 </p>
</blockquote>


<?php endforeach; ?>
</div>

<!-- <form method="post" action="/training/upload" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple style="width: 250px;">
        <input type="submit" value="send">
</form> -->


<!-- <form action="/training/delete" method="post">
    <input type="hidden" name="id" value="<?=$training->id?>">

    <input type="submit" value="삭제">
  </form> -->
