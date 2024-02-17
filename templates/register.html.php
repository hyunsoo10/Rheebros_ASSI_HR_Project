<link rel="stylesheet" href="/css/register.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){

	// 입력란에 입력을 하면 입력내용에 내용이 출력

	// 1. #data 공간에서 keyup이라는 이벤트가 발생했을 때

	$("#EEID").keyup(function(){

		// 2. #out 공간에 #data의 내용이 출력된다.

		//$("#out").text($("#data").val());
    //$("#out2").text($("#data").val());
    //$('input[name=employeeTraining[EE_ID]]').attr('value', $("#EEID").val());
    $("#EEID2").val($("#EEID").val());
    $("#EEID3").val($("#EEID").val());
    $("#EEID4").val($("#EEID").val());

		// #out의 위치에 text로 데이터를 받는다.(setter)

		// 들어가는 데이터는 #data의 값(.val())이다. (getter)

		// 메서드 괄호 안에 아무것도 없으면 getter, 파라미터가 있으면 setter이다.

	});

});

</script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
		<div class="content_box">
    <div class = "signup_box" style="display:flex;">
        <form action="" method="post">
          <div style="display:flex;">
            <div style="flex-direction: row; margin-right: 50px;">
                <label for="EEID">EEID</label>
                <input name="author[EEID]" id="EEID" type="text" value = "<?=$author['EEID'] ?? ''?>">
                <label for="password">Password</label>
                <input name="author[password]" id="password" type="password" value = "<?=$author['password'] ?? ''?>">

                <label for="firstName">First Name</label>
                <input name="author[firstName]" id="firstName" type="text"value = "<?=$author['firstName'] ?? ''?>">
                <label for="lastName">Last Name</label>
                <input name="author[lastName]" id="lastName" type="text"value = "<?=$author['lastName'] ?? ''?>">
                <label for="gender">Gender</label>
                <!-- <input name="author[gender]" id="gender" type="text"value = "<?=$author['gender'] ?? ''?>"> -->
                <select name="author[gender]" id="gender" required>
                 <option value="" disabled selected>Gender</option>
                  <option value="<?=$author['gender'] ?? 'Male'?>">Male</option>
                  <option value="<?=$author['gender'] ?? 'Female'?>">Female</option>
                  <option value="<?=$author['gender'] ?? 'N/A'?>">N/A</option>
                </select>
                <label for="phone">Phone</label>
                <input name="author[phone]" id="phone" type="tel"value = "<?=$author['phone'] ?? ''?>" placeholder="000-000-0000"max-length="10" min-length="10">
                <label for="birthDate">Birth Date</label>
                <input name="author[birthDate]" id="birthDate" type="date" value = "<?=$author['birthDate'] ?? ''?>">
                <label for="payType">Pay Type</label>
                <!-- <input name="author[payType]" id="payType" type="text" value = "<?=$author['payType'] ?? ''?>"> -->
                <select name="author[payType]" id="payType" required>
                 <option value="" disabled selected>Pay Type</option>
                  <option value="<?=$author['payType'] ?? 'Hourly'?>">Hourly</option>
                  <option value="<?=$author['payType'] ?? 'Salary'?>">Salary</option>
                  <option value="<?=$author['payType'] ?? 'Commission Only'?>">Commission only</option>
                </select>
                <label for="DOLStatus">DOL Status</label>
                <!-- <input name="author[DOLStatus]" id="DOLStatus" type="text" value = "<?=$author['DOLStatus'] ?? ''?>"> -->
                <select name="author[DOLStatus]" id="DOLStatus" required>
                  <option value="" disabled selected>DOL Status</option>
                  <option value="<?=$author['payType'] ?? 'Full-Time'?>">Full-Time</option>
                  <option value="<?=$author['payType'] ?? 'Part-Time'?>">Part-Time</option>
                  <option value="<?=$author['payType'] ?? 'Temporary'?>">Temporary</option>
                  <option value="<?=$author['payType'] ?? 'Seasonal'?>">Seasonal</option>
                </select>
                <label for="department">Department</label>
                <select name="author[department]" id="department" required>
                  <option value="" disabled selected>Department</option>
                  <option value="<?=$author['department'] ?? 'Office'?>">Office</option>
                  <option value="<?=$author['department'] ?? 'C/S'?>">C/S</option>
                  <option value="<?=$author['department'] ?? 'Cashier'?>">Cashier</option>
                  <option value="<?=$author['department'] ?? 'Grocery'?>">Grocery</option>
                  <option value="<?=$author['department'] ?? 'Produce'?>">Produce</option>
                  <option value="<?=$author['department'] ?? 'Meat'?>">Meat</option>
                  <option value="<?=$author['department'] ?? 'Fish'?>">Fish</option>
                  <option value="<?=$author['department'] ?? 'Houseware'?>">Houseware</option>
                  <option value="<?=$author['department'] ?? 'Deli'?>">Deli</option>
                  <option value="<?=$author['department'] ?? 'Wholesale'?>">Wholesale</option>
                  <option value="<?=$author['department'] ?? 'Receiving'?>">Receiving</option>
                  <option value="<?=$author['department'] ?? 'IT'?>">IT</option>
                  <option value="<?=$author['department'] ?? 'Helper'?>">Helper</option>
                </select>
                <label for="position">Position</label>
                <select name="author[position]" id="position" required>
                  <option value="" disabled selected>Position</option>
                  <option value="<?=$author['position'] ?? 'Manager'?>">Manager</option>
                  <option value="<?=$author['position'] ?? 'Team Leader'?>">Team Leader</option>
                  <option value="<?=$author['position'] ?? 'Staff'?>">Staff</option>
                  <option value="<?=$author['position'] ?? 'Store Manager'?>">Store Manger</option>
                  <option value="<?=$author['position'] ?? 'Assitant Store Manager'?>">Store Assitant Manger</option>
                </select>
                <label for="hireDate">Hire Date</label>
                <input name="author[hireDate]" id="hireDate" type="date" value = "<?=$author['hireDate'] ?? ''?>">
                <!-- <label for="permission">permission</label>
                <input name="author[permission]" id="permission" type="text" value = "<?=$author['permission'] ?? ''?>"> -->
                <label for="store">Store</label>
                <!-- <input name="author[store]" id="store" type="text" value = "<?=$author['store'] ?? ''?>"> -->
                <select name="author[store]" id="store" required>
                  <option value="" disabled selected>Store</option>
                  <option value="<?=$author['store'] ?? 'PA88'?>">PA88</option>
                  <option value="<?=$author['store'] ?? 'GA55'?>">GA55</option>
                  <option value="<?=$author['store'] ?? 'IL70'?>">IL70</option>
                  <option value="<?=$author['store'] ?? 'HQ'?>">HQ</option>
                </select>
                <label for="permission">Permission</label>
                <select name="author[permission]" id="permission" required>
                  <option value="" disabled selected>permission</option>
                  <option value="<?=$author['permission'] ?? '1'?>">1(PA88)</option>
                  <option value="<?=$author['permission'] ?? '2'?>">2(GA55)</option>
                  <option value="<?=$author['permission'] ?? '4'?>">4(IL70)</option>
                </select>
                <div class="submit_button">
                <button type="submit" name="submit" value="SIGN UP" id="signup_submit" class="btn btn-outline-secondary sign-up-button">SIGN UP</button>
                </div>
                <!-- <div class="submit_button">
                <input type="submit" name="submit" value="SIGN UP" id="signup_submit">
               </div> -->
            </div>

            <div style="flex-direction: row;">

              <input name="employeeTraining[id]" id="id" type="hidden" value = "<?=$employeeTraining['id'] ?? ''?>">
              <label for="EEID">EEID</label>
              <input name="employeeTraining[EE_ID]" id="EEID2" type="text" value = "<?=$employeeTraining['EE_ID'] ?? ''?>">
              <!-- <label for="password">TRID</label> -->
              <input name="employeeTraining[TR_ID]" id="TRID" type="hidden" value = "<?=$employeeTraining['TR_ID'] ?? '1'?>">
              <label for="title">Title</label>
              <input name="employeeTraining[title]" id="title" type="text" value = "<?=$employeeTraining['title'] ?? 'T1'?>" >
              <label for="deadline_date">Deadline</label>
              <input name="employeeTraining[deadline_date]" style="margin-bottom:20px;" id="title" type="date" value = "<?=$employeeTraining['deadline_date'] ?? ''?>">

              <input name="employeeTraining2[id]" id="id" type="hidden" value = "<?=$employeeTraining2['id'] ?? ''?>">
              <label for="EEID">EEID</label>
              <input name="employeeTraining2[EE_ID]" id="EEID3" type="text" value = "<?=$employeeTraining2['EE_ID'] ?? ''?>">
              <!-- <label for="password">TRID</label> -->
              <input name="employeeTraining2[TR_ID]" id="TRID" type="hidden" value = "<?=$employeeTraining2['TR_ID'] ?? '2'?>">
              <label for="title">Title</label>
              <input name="employeeTraining2[title]" id="title" type="text" value = "<?=$employeeTraining2['title'] ?? 'T2'?>">
              <label for="deadline_date">Deadline</label>
              <input name="employeeTraining2[deadline_date]" id="title" style="margin-bottom:20px;" type="date" value = "<?=$employeeTraining2['deadline_date'] ?? ''?>">
            </div>

          </div>
        </form>
    </div>
    <?php
    if(!empty($errors)) :
      ?>
      <div class="errors">
        <p style="color:black">등록할 수 없습니다. 다음을 확인해 주세요.</p>
        <ul>
          <?php
          foreach ($errors as $error) :
            ?>
            <li><?= $error?></li>
            <?php
            endforeach;?>
        </ul>
      </div>
      <?php
      endif;
      ?>
		</div>
  </body>
</html>
<!-- 
<script>
  var patt = new RegExp("[0-9]{2,3}-[0-9]{3,4}-[0-9]{3,4}");
  var res = patt.test( $("#phone").val());
  if( !patt.test( $("phone").val()) )
  {
    alert("전화번호를 정확히 입력하여 주십시오.");
    return false;
  }

</script> -->