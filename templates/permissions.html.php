<div class="content_box">
  <div class="permission_edit_box">
  <h2><?=$author->firstName?>권한수정</h2>
    <div class="permission_list">
      <form action="" method="post">
        <?php foreach ($permissions as $name => $value): ?>
          <div>
            <input name="permissions[]" type="checkbox" value="<?=$value?>"
            <?php if ($author->hasPermission($value)): echo 'checked'; endif; ?>/>
            <label><?=$name?>
          </div>
          <?php endforeach;?>
          <div style="display:inline-block; text-align: cetner;">
          <input  style="margin: 30px;" type="submit" value="저장"/>
          </div>
      </form>
    </div>
  </div>
</div>
