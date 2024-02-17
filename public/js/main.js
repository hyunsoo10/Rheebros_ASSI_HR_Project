// var $text_box = $('.text_box');

// $(function(){
//   $text_box.click(function(){
//     location.href = "/detail";
//   });
// });

$(window).on('scroll',function(){
    if($(window).scrollTop()){
        $('nav').addClass('active');
    }else{
        $('nav').removeClass('active');
    }
});

// $('.dropdown').click(function(event){
//     return false;
// });