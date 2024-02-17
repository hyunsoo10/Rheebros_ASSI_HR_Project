<?php
    for($i = 0; $i < count($_FILES['upload']['name']); $i++){

        $uploadfile = $_FILES['upload']['name'][$i];
        $upload_folder = "uploads/";
        if(move_uploaded_file($_FILES['upload']['tmp_name'][$i], $upload_folder .$uploadfile)){
            echo "파일이 업로드 되었습니다.<br />";
            // echo "<img src ={$_FILES['upload']['name'][$i]} style='width:100px'> <p>";
            // echo "1. file name : {$_FILES['upload']['name'][$i]}<br />";
            // echo "2. file type : {$_FILES['upload']['type'][$i]}<br />";
            // echo "3. file size : {$_FILES['upload']['size'][$i]} byte <br />";
            // echo "4. temporary file size : {$_FILES['upload']['size'][$i]}<br />";
        } else {
            echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
        }
    }
?>
