
<style>
  main{
    justify-content: center;
  }
</style>
<div style="margin: 30px auto;">
<form action="" method="post">
  <input type="hidden" id="training[id]" name="training[id]" value="<?=$training->id ?? ''?>"/>
  <input type="hidden" id="training[title]" name="training[title]" value="<?=$training->title ?? ''?>"/>
  <label for="training[name]">training name: </label>
  <input type="text" id="training[name]" name="training[name]" value="<?=$training->name ?? ''?>"/>
  <label for="training[dateOfUpdated]">date of updated: </label>
  <input type="date" id="training[dateOfUpdated]" name="training[dateOfUpdated]" value="<?=$training->dateOfUpdated ?? ''?>"/>
  <input type="submit" name="submit" value="save">
</form>
</div>
<!-- <form method="post" action="upload-multiple.php" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple>
        <input type="submit" value="send">
</form> -->
