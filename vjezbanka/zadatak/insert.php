<?php 


if (isset($_POST['btn_submit'])){
    
   
    require_once 'inc/db.inc.php';

    $sr_word = mysqli_real_escape_string($conn, $_POST['srb']);
    $en_word = mysqli_real_escape_string($conn, $_POST['eng']);

    if (empty($sr_word) || empty($en_word)){
        header("Location: index.php?error=empty");
        exit();
    }
    else {
        if (!preg_match("/^[a-zA-Z]*$/",$sr_word) || !preg_match("/^[a-zA-Z]*$/",$sr_word)){
            header("Location: index.php?error=char");
        }
        else {
            $sql = "SELECT * FROM reci WHERE rec_sr = '$sr_word' and rec_en = '$en_word'";
            $result = mysqli_query($conn, $sql);
            $resCheck = mysqli_num_rows($result);

            if ($resCheck > 0){
                header("Location: index.php?error=exists");
                exit();
            }
            else {
                $sqlIn = "INSERT INTO reci (rec_sr,rec_en) VALUES ('$sr_word','$en_word')";
                $resultIn = mysqli_query($conn,$sqlIn);
                header("Location: index.php?insert=success");
                exit();
            }
        }
    }
}
else{
    header("Location: index.php");
}


