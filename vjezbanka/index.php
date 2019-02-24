<h2>Fill in!</h2>
<form action="" method="post">
	<label for="fname">Name:<input type="text" name="fname"></label>
	<label for="lname">Last Name:<input type="text" name="lname"></label>
	<label for="age">Age:<input type="text" name="age"></label>
	<input type="submit" name="submit" value="Submit">
</form>
<div>
<?php
if (isset($_POST['submit'])){
	if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['age'])){
		if(!empty($_POST['$fname']) && !empty($_POST['$lname']) && !empty($_POST['$age'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$age=$_POST['age'];
			require "clasperson.php";
			$persona = new Person($age, $fname, $lname);
			$id=1234;

	echo "<h3>" . $persona->fullname($id)."</h2>";
	echo "<h4>" . $persona->age()."</h2>";

}else{
	echo "No input!";
}
	}else{
				echo "All parameter must be sent";
			}

}
		
?>
	</div>




