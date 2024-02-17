$(".btnPrev").on("click", function (e) {
    e.preventDefault();

    // 이미지 현재의 위치
    var imgOn = $(".slides").find(".on").index();
    // 이미지 총 개수
    var imgLen = $(".slides .img").length;
    console.log(imgOn)

    // imgBox안의 img 중 imgOn 번째의 on 클래스 삭제
    $(".slides .img").eq(imgOn).removeClass("on");
    // imgBox안의 img 중 imgOn 번째 숨기기
    $(".slides .img").eq(imgOn).css("opacity", 0);

    //  이전의 위치로 돌아가야함으로
    imgOn = imgOn -1;

    if( imgOn < 0 ){
      // 돌아가 위치가 -1일 경우
      // 이미지의 마지막으로 돌아간다
      // $(".slides .img").eq(imgLen -1).css("opacity", 1);
      // $(".slides .img").eq(imgLen -1).addClass("on");
      $(".btn-16").prop('disabled', true);
    }else{
      // 돌아갈 위치가 -1이 아닌 경우
      $(".slides .img").eq(imgOn).css("opacity", 1);
      $(".slides .img").eq(imgOn).addClass("on");
    }

  });

$(".btnNext").on("click", function (e) {
// e.preventDefault();

setTimeout(function () {
  $(".btn-16").prop('disabled', false);
}, 0000)
var i = 5;
(function timer(){
    if (--i < 0) return;
    setTimeout(function(){
        $(".btnText").text( i + ' secs');
        timer();
    }, 1000);
})();
$(".btn-16").prop('disabled', true);


// 위에 동일
var imgOn = $(".slides").find(".on").index();
var imgLen = $(".slides .img").length;

console.log(imgOn)
// 위에 동일
$(".slides .img").eq(imgOn).removeClass("on");
$(".slides .img").eq(imgOn).css("opacity", 0);

// 다음의 위치로 알아야 되기 때문에
imgOn = imgOn +1;

if( imgOn === imgLen ){
  // 다음의 위치가 총 개수보다 클 경우
  // 처음의 위치로 돌아간다
  // $(".slides .img").eq(0).css("opacity", 1);
  // $(".slides .img").eq(0).addClass("on");
  if(location.href.indexOf("training1") != -1 ){
    if(location.href.indexOf("training1_eng") != -1 ){
      $(location).attr('href', "lastcheck_eng");
    } else if(location.href.indexOf("training1_spn") != -1) {
        $(location).attr('href', "lastcheck_spn");
    } else {
        $(location).attr('href', "lastcheck_kor");
    }

  }
  if(location.href.indexOf("training2") != -1 ){
    if(location.href.indexOf("training2_eng") != -1 ){
      $(location).attr('href', "lastcheck2_eng");
    } else if(location.href.indexOf("training2_spn") != -1) {
        $(location).attr('href', "lastcheck2_spn");
    } else {
        $(location).attr('href', "lastcheck2_kor");
    }

  }

  if(location.href.indexOf("training3") != -1 ){
    if(location.href.indexOf("training3_eng") != -1 ){
      $(location).attr('href', "lastcheck3_eng");
    } else if(location.href.indexOf("training3_spn") != -1) {
        $(location).attr('href', "lastcheck3_spn");
    } else {
        $(location).attr('href', "lastcheck3_kor");
    }

  }


  //$(location).attr('href', "lastcheck");

}else{
  // 다음 위치가 있는 경우
  $(".slides .img").eq(imgOn).css("opacity", 1);
  $(".slides .img").eq(imgOn).addClass("on");
}
});
