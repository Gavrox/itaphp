<?php
class Person
{
private $age;
public $fname;
public $lname;

public function __construct($age,$fname,$lname) {
$this->age = $age;
$this->fname = $fname;
$this->lname = $lname;
}

public function fullname(){
echo "Fullname is: ".$this->fname." ".$this->lname."<br>";
}
public function age(){
if($this->age > 18) {
echo "Adult";
} else {
echo "Underage";
}
}
}


$osoba = new Person(39, "Zivko", "Obradovic");
//$osoba->fullname();
$osoba->age();