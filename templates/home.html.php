<link rel="stylesheet" href = "/css/home.css">

<!-- 고정 사진 홈 -->

<!-- <div class="home_box1">
 <h1>ASSI PLAZA  <br> HR WEBSITE</h1>

</div> -->

<!-- 슬라이드 홈 -->

<!-- <div id="slide" val="1" mx="5">
      <li id="img1"><img src="https://cdn.pixabay.com/photo/2022/08/15/02/07/park-7386978_960_720.jpg" alt=""></li>
      <li id="img2"><img src="https://cdn.pixabay.com/photo/2021/11/16/15/35/electronics-6801339_960_720.jpg" alt=""></li>
      <li id="img3"><img src="https://cdn.pixabay.com/photo/2022/06/12/22/48/futuristic-7258997_960_720.png" alt=""></li>
      <li id="img4"><img src="https://cdn.pixabay.com/photo/2022/08/08/19/36/landscape-7373484_960_720.jpg" alt=""></li>
      <li id="img5"><img src="https://cdn.pixabay.com/photo/2022/08/01/10/36/tulips-7357877_960_720.jpg" alt=""></li>
  
</div> -->

<!-- 비디오 홈-->

<div class="home_box2">
  <h1>ASSI PLAZA</h1>
    <video muted autoplay loop>
      <source src="videos/videosample.mp4" type="video/mp4">
      <strong>Your browser does not support the video tag.</strong>
    </video>
</div>
<!-- 
<div class="videoplayer">
	<iframe class="videoplayer-iframe" src="videos/videosample.mp4?autoplay=1&mute=1&loop=1" allow="autoplay"></iframe>
</div> -->

<style>
#slide{
position:relative;
width: 100%;
height: 800px;

}

#slide li{

/* position:absolute; */
top:0;
left:0;
display:none;
-webkit-display:block;
list-style: none;

}

#slide img{
width:100%;
height: 800px;
} 

</style>

<script>
imgslide(); //페이지가 로딩될때 함수를 실행합니다

function imgslide(){

  $val = $("#slide").attr("val"); //현재 이미지 번호를 가져옵니다

  $mx = $("#slide").attr("mx"); //총 이미지 개수를 가져옵니다

	$("#img"+$val).hide(); //현재 이미지를 사라지게 합니다.

	if( $val == $mx ){ $val = 1; } //현재이미지가 마지막 번호라면 1번으로 되돌립니다.

	else{ $val++; } //마지막 번호가 아니라면 카운트를 증가시켜줍니다

	$("#img"+$val).fadeIn(2500); //변경된 번호의 이미지영역을 나타나게 합니다.괄호 안에 숫자는 페이드인 되는 시간을 나타냅니다.\


	$("#slide").attr('val',$val); //변경된 이미지영역의 번호를 부여합니다.

	setTimeout('imgslide()',5000); //1초 뒤에 다시 함수를 호출합니다.(숫자값 1000당 1초)

}
</script>