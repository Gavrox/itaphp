<?php

    require "inc/connect_translation.php";
	if(isset($_POST["word"], $_POST["translate"], $_POST["submit"]))
	{
		$word = trim($_POST["word"]);
		$word = mysqli_real_escape_string($mysqli, $word);
		$translate = $_POST["translate"];

        if(!preg_match("/^[a-zA-Z]{1,30}$/", $word)){

            echo "<p style='color: #FF0000;'>Please enter valid words!</p>";

            exit();

        }

        $query = "SELECT * FROM words WHERE $translate = '$word'";
		$res = mysqli_query($mysqli, $query);
		if(mysqli_num_rows($res) > 0){
			while($row = mysqli_fetch_assoc($res)){
				if($translate == "word_sr"){
					echo "Your translate is: " . $row['word_en'] . "<br>";
				}
				if($translate == "word_en"){
                    echo "Vas prevod je: " . $row['word_sr'] . "<br>";
				}
            }
		}else{
			echo "Check words in your book!";
			}

    }    
	else
	{
		header("Location:translate.html");
		exit();
	}
	