<html>
<head>
<title>Zadatak</title>
	
<style type="text/css">
	form {
		padding: 10px;
		border: solid #63F409;
		background-color: #A8F761;
		width: 320px;
		height: 100px;
	}
	body {
		padding: 20px; 
		background-color: #BBD9D1;
</style>
</head>
   <body>
<h1>Zadatak</h1>	
	   
<form action = "" method = "POST">
	
   <strong>Upišite dva broja:</strong><br><br>
    	<input type="number" name="prvi"><br><br>
   <input type="number" name="drugi"><br><br>
  <input type = "submit" />
   </form>

	   
<div style="border: solid; border-color: #63F409; color:gray; width: 320px; padding: 10px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'; line-height: 30px">	   
	   <?php
@$prvi = $_POST['prvi'];
@$drugi = $_POST['drugi'];
	$zbir=$prvi+$drugi;
	$proizvod=$prvi*$drugi;
	If ($zbir%2==0)
		
		echo "Proizvod brojeva: ".$prvi. " i " .$drugi. " je: ".$proizvod. ",<br>a njihov zbir je paran broj";
		else echo "Zbir brojeva: ".$prvi. " i " .$drugi. " je neparan broj: ".$zbir;  
	   ?>
	</div>
   </body>
</html>

