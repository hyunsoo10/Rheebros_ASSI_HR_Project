<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href = "/css/style.css">
  <link rel="stylesheet" href = "/css/form.css">
  <link rel="stylesheet" href = "/css/nav.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  
  <!-- <link rel="stylesheet" href = "/css2/bootstrap.min.css"> -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b38c5cafb9.js" crossorigin="anonymous"></script>
  <title><?=$title?></title>
</head>

<body>

  <section id="wrap">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <li class="nav-item" style="display:flex; margin-left: 150px; flex-grow:1;">
                    <a class="navbar-brand page-scroll img-logo" href="/"><img style="position: relative; border-radius:15px;" src="/images/assi_logo_grey.png" alt="iLand" /></a>
                  </li>
              <div id="m_nav"><i class="fas fa-bars fa-3x" id="bar"></i></div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar__menu">

                  <li>
                   <a class="nav-link main_nav" aria-current="page" href="/">HOME</a>
                  </li>   
                  <li>
                  <a class="nav-link main_nav" aria-current="page" href="/employee/detail?id=<?=$author->id ?? null ?>">MY PAGE</a>
                  </li>
                  <?php if ($loggedIn): ?>
                    <!-- <li class="nav-link dropdown">
                      <a class="nav-link dropdown-toggle main_nav" href="/orientation_kor" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                        ORIENTATION
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="/orientation_kor">ORIENTATION(KOR)</a></li>
                        <li><a class="dropdown-item" href="/orientation_eng">ORIENTATION(ENG)</a></li>
                        <li><a class="dropdown-item" href="/orientation_spn">ORIENTATION(SPN)</a></li>
                      </ul>
                    </li> -->
                    <!-- <li class="nav-link dropdown">
                      <a class="nav-link dropdown-toggle main_nav" href="/orientation_kor" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                        INSURANCE
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                      <?php if($loggedIn && $author->hasPermission(\Assi\Entity\Employee::GA55)) : ?>
                    
                        <li><a class="dropdown-item" href="/insurance_ga55_kor">GA55(KOR)</a></li>
                        <li><a class="dropdown-item" href="/insurance_ga55_eng">GA55(ENG)</a></li>
                        <li><a class="dropdown-item" href="/insurance_ga55_spn">GA55(SPN)</a></li>
                   
                      <?php endif;?>
                      <?php if($loggedIn && $author->hasPermission(\Assi\Entity\Employee::IL70)) : ?>
                     
                        <li><a class="dropdown-item" href="/insurance_il70_kor">IL70(KOR)</a></li>
                        <li><a class="dropdown-item" href="/insurance_il70_eng">IL70(ENG)</a></li>
                        <li><a class="dropdown-item" href="/insurance_il70_spn">IL70(SPN)</a></li>
                    
                      <?php endif;?>
                      <?php if($loggedIn && $author->hasPermission(\Assi\Entity\Employee::PA88)) : ?>
                 
                        <li><a class="dropdown-item" href="/insurance_pa88_kor">PA88(KOR)</a></li>
                        <li><a class="dropdown-item" href="/insurance_pa88_eng">PA88(ENG)</a></li>
                        <li><a class="dropdown-item" href="/insurance_pa88_spn">PA88(SPN)</a></li>
              
                      <?php endif;?>
                      </ul>
                    </li> -->
                    <?php endif; ?>

                  <?php if($loggedIn && $author->hasPermission(\Assi\Entity\Employee::LIST_TR)) : ?>
                  <li>
                  <a class="nav-link main_nav" aria-current="page" href="/training/list">TRAINING</a>
                  </li>
                  <?php endif;?>
                  <?php if($loggedIn && $author->hasPermission(\Assi\Entity\Employee::LIST_USER)): ?>
                  <li>
                  <a class="nav-link main_nav" aria-current="page" href="/employees/list">EMPLOYEES</a>
                  </li>
                  <?php endif;?>
                <div id="login_box" >
                <?php if ($loggedIn): ?>
                  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/employee/detail?id=<?=$author->id ?? null ?>'"><?php echo $author->lastName. ", " .$_SESSION['userid']; ?></button>
                  <button type="button" class="btn btn-outline-secondary" onclick="location.href='/logout'">Sign out</button>
                <?php else: ?>
                <button type="button" class="btn btn-outline-secondary" onclick="location.href='/login'">Sign in</button>
                <?php endif; ?>
                </div>

              </ul>

              <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>

    <main>
      <?=$output?>
    </main>

    <footer>
      <div class="row">
        <div class="col align-self-start footer_first_line">
          <!-- <ul>
            <li>page</li>
            <li>notice</li>
            <li>Q/A</li>
            <li>more</li>
          </ul> -->
        </div>
      </div>
      <div class="row">
        <div class="col align-self-start footer_second_line">
          <ul>
            <li>If you have any questions please contact to IT Team</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col align-self-start footer_third_line">
          <ul>
            <li>EMAIL : admin@assiplaza.net</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col align-self-start footer_fourth_line">
          <ul>
            <li>ASSI PLAZA</li>
            <li>ALL RIGHTS RESERVED</li>
          </ul>
        </div>
      </div>
    </footer>
  </section>


</body>

<script>
var current_location = window.location.href;
var current_location_temp = current_location.slice(21);
var list_all = document.getElementsByClassName('main_nav');


if(current_location.match('employee') && !current_location.match('detail')) {
  list_all[3].className += " active";
}
else if (current_location.match('employee/detail')) {
  list_all[1].className += " active";
}
else if (current_location.match('training')) {
  list_all[2].className += " active";
}
// else if (current_location.match('orientation')) {
//   list_all[2].className += " active";
// }
// else if (current_location.match('insurance')) {
//   list_all[3].className += " active";
// }
else{
  list_all[0].className += " active";
}


// for (i=0; i<list_all.length; i++){
//   if (list_all[i].href.indexOf(current_location_temp) == 0) {
//     list_all[0].className += " active";
//   }
//   else if (list_all[i].href.indexOf(current_location_temp) != -1){
//     list_all[i].className += " active";
//   }
  
// }




  // for (i=0; i<list_all.length; i++) {
  //   // console.log(list_all[i].href);
  //   if (current_location.indexOf("employee") != -1 && current_location.indexOf("detail") == -1) {
  //     list_all[3].className += " active";
  //     list_all[0].classList.remove("active");
  //     list_all[1].classList.remove("active");
  //     list_all[2].classList.remove("active");
  //   }
  //   else if (current_location.indexOf("login") != -1) {
  //     list_all[0].classList.remove("active");
  //     list_all[1].classList.remove("active");
  //     list_all[2].classList.remove("active");
  //     list_all[3].classList.remove("active");
  //   }
  //   else if (current_location.indexOf("training") != -1) {
  //     list_all[2].className += " active";
  //     list_all[0].classList.remove("active");
  //     list_all[1].classList.remove("active");
  //     list_all[3].classList.remove("active");
  //   }
  //   else if (current_location.indexOf("employee") != -1 && current_location.indexOf("detail") != -1) {
  //     list_all[1].className += " active";
  //     list_all[0].classList.remove("active");
  //     list_all[2].classList.remove("active");
  //     list_all[3].classList.remove("active");
  //   }
  //   else{
  //     list_all[0].className += " active";
  //     list_all[1].classList.remove("active");
  //     list_all[2].classList.remove("active");
  //     list_all[3].classList.remove("active");
  //   }
  // }


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/js/main.js"></script>
<!-- <script src="/js/menu.js"></script> -->
<!-- <script src="/js/html2canvas.min.js"></script> -->
<script src="/js/html2canvas.js"></script>
<script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
<script>
/* m_header 동적생성 */

var toggle_bnt = document.querySelector('#m_nav');
var m_nav = document.querySelector('ul');
var nav = document.querySelector('nav');

// 클릭하면 display:block 속성의 active 클래스가 추가된다
toggle_bnt.addEventListener('click',()=>{
    m_nav.classList.toggle('active');
    nav.classList.toggle('mobile_active')
});
</script>


</html>
