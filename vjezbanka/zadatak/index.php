<?php require 'config.php' ?>
<html>
<head>
    <title>Translate</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="insert">
            <h2>Upisi rijec i znacenje: </h2>
            <?php 
                $form = new Form;
                $form->open_tag("insert.php","POST");
                $form->label("","Napisi rijec na Srpskom: ");
                $form->input("text","srb","","Napisi rijec...");
                $form->label("","Write a word on English: ");
                $form->input("text","eng","","Write a word...");
                $form->input("submit","btn_submit","Enter");
                $form->input("reset","res_btn","Reset");
                $form->close_tag();
                if (isset($_GET['insert']) == "success"){
                    echo "Rijec je uspijesno unesena!!";
                }else{
                    echo "Upisi rijec u bazu!!";
                }
            ?>
        </div>
        <div class="translate">
        <h2>Prevedi rijec: </h2>
        <?php 
                
                $form->open_tag("translate.php","POST");
                $form->label("","Select the language ");
                $form->input("text","word","","");
                $form->input("submit","btn_submit","Enter");
                $form->option();
                $form->close_tag();
                if(isset($_GET['word'])){
                    echo "Your translation is: " . $_GET['word'];
                }
                else if (isset($_GET['word'])){
                    echo "No such word in the database!!";
                }
                else {
                    echo "Insert a word please";
                }
            ?>
        </div>
    </div>
</body>
</html>