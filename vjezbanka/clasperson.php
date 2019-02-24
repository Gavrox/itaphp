<?php
class Person
{
private $id;
private $age;
public $fname;
public $lname;

public function __construct($age,$fname,$lname) {
$this->age = $age;
$this->fname = $fname;
$this->lname = $lname;

}

public function fullname($id){
	$this->id=$id;
echo "ID No: ". $this->id ." <br>";
	echo "Your Fullname is: ".$this->fname." ".$this->lname."<br>";
}
public function age(){
if($this->age >= 18) {
echo "You can pass";
} else {
echo "<b>You are to young</b>";
}
}
}
?>
