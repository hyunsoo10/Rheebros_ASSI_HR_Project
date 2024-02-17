<!-- <div class="login_box">
  <?php
  if(isset($error)):
    echo '<div class="errors">' . $error . '</div>';
  endif;
  ?>
  <form method="post" action="">
    <label for="EEID">EEID</label>
    <input type="text" id="EEID" name="EEID">

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <input type="submit" name="login" value="Sign in" id="login_submit">
  </form>

</div> -->
<link rel="stylesheet" href="/css/signin.css"/>
<div class="cont">
  <div class="form sign-in">
    <h2>WELCOME</h2>
    <?php
      if(isset($error)):
        echo '<div class="errors">' . $error . '</div>';
      endif;
     ?>  
    <form method="post" action="" id="login_form">
    <div class="login_box">
    <label for="EEID">
      <span>EEID</span>
      <input type="text" id="EEID" name="EEID">
    </label>
    
    <label for="password">
      <span>Password</span>
      <input type="password" id="password" name="password">
    </label>
    <button type="submit" class="submit">SIGN IN</button>
    </div>
    <!-- <input type="submit" name="login" value="Sign in" id="login_submit"> -->
    </form>

<!-- 
    <button type="button" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button> -->
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2 style="font-size: 24px;">Can't sign in?</h2>
        <p>If you can't sign in, please contact to HR manager.</p>
        <!-- <p>Sign up and discover great amount of new opportunities!</p> -->
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already have an account,<br> just sign in.</p>
      </div>
      <div class="img__btn">
       <span class="m--up">contact</span>
        <!-- <span class="m--up">Sign Up</span> -->
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <h2>CONTACT INFOMATION</h2>
      <div class="contact_info">
      <label>
        <span>Name</span> <span style="font-weight: 500; font-size: 15px; margin-left: 50px; color: black;">Jane Jihye Jeong</span>
      </label>
      <label>
        <span>Email</span> <span style="font-weight: 500; font-size: 12px; margin-left: 50px; color: black;">assihr@assiplaza.net</span>
      </label>
      <label>
        <span>Phone</span> <span style="font-weight: 500; font-size: 12px; margin-left: 50px; color: black;">240-762-7390</span>
      </label>
      </div>
      <!-- <button type="button" class="submit">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span>facebook</span></button> -->
    </div>
  </div>
</div>

<script>
  document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
</script>