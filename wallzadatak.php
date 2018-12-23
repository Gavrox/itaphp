<html>
   <body style="padding: 20px">
<h1>Zadatak - Stringovi</h1>	
	   
<form action = "" method = "POST">
   <strong>Upišite jednu riječ:</strong>
  <input type = "text" name = "name" value="programiranje">
         <input type = "submit" />
   </form>
	   
<div style="border: solid; border-color: #63F409; color:gray; width: 320px; padding: 15px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; line-height: 30px">	   
	   <?php
@$Word = $_POST['name'];
	   
echo "Dužina stringa je: ".strlen($Word)."<br>";

$wordChunks = str_split($Word);
echo "Prvo slovo je: " . $wordChunks[0] ."<br>";

$obrt = array_reverse($wordChunks);

$obrtk = implode($obrt);
echo "Obrnuti redoslijed: ".$obrtk . "<br>";
echo "Velikim slovima:" .strtoupper($Word);
 
	   ?>
	</div>
   </body>
</html>

