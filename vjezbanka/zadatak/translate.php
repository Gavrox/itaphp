<?php

if (isset($_POST['btn_submit'])){

    require_once 'inc/db.inc.php';

    $word = mysqli_real_escape_string($conn, $_POST['word']);
    $lang = mysqli_real_escape_string($conn, $_POST['lang']);

    if (empty($word)){
        header("Location: index.php?error=empty");
        exit();
    }
    else {
        if (!preg_match("/^[a-zA-Z]*$/",$word)){
            header("Location: index.php?error=char");
        }
        else {
            $sql = "SELECT * FROM reci WHERE rec_sr LIKE '%{$word}%' OR rec_en LIKE '%{$word}%'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($lang === "Prevedi na Engleski"){
                header("Location: index.php?word=". $row['rec_en']);
            }
            else if ($lang === "Prevedi na Srpski"){
                header("Location: index.php?word=". $row['rec_sr']);
            }
            else {
                header("Location: index.php?word=noword");
            }
        }
    
    }
      
} else {
    header("Location: index.php");
}