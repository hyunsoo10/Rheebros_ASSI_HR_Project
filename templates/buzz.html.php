
<!-- 
<div style="margin: 20px auto;">
<embed src="https://assiplaza.sharepoint.com/sites/HRTrainingTest/_layouts/15/Doc.aspx?sourcedoc={cc674e8f-7b00-4e0a-9df3-f403bf1ea4fe}&amp;action=embedview&amp;wdAr=1.7777777777777777" width="976px" height="588px" showcontrols="0" style="border: 1px solid red;"></embed>
</div> -->
<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRwGSaKcfBbGYeqGD_ucvuxciOJ_DsuvWuCCNA0FSQBaXy_S2Ozh-Sdg9ZK028Te2xiJZzHpG8Z11YZ/embed?start=false&loop=false&delayms=3000" frameborder="0" width="1080" height="649" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
  
  
<h3 style="color: black;">When you are ready for the test, click the button to take the test with the language you prefer.</h2>

<div class="test_button_box">
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_kor'">KOR</button>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_eng'">ENG</button>
    <button type="button" class="btn btn-outline-secondary test_button" onclick="location.href='/test1_spn'">SPN</button>
</div>

<style>
    .test_button{
        width: 200px;
        height: 50px;
        margin: 20px;
    }
    .test_button_box{
        text-align: center;
    }

    .WACStatusBarContainer{
        display: none !important;
    }
    main{
        align-items:center;
    }
</style>

<script>
    $(window).load(function() {
        $('.WACStatusBarContainer').css('display', 'none');
    });
    $(document).ready(function() {
      $('#WACStatusBarContainer').hide();
      $('.WACStatusBarContainer').css('display', 'none');

    });
    $('a').on('click', function(e){
        e.preventDefault();
    });
    $(.btn).click(function() {
        return false;
    });

    $('a').click(function(event){
    event.preventDefault();
    });
    
</script>
