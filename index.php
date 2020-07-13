<?php


require("vendor/autoload.php");


use Info\{Student,Calculator};

//Creating an instance of the class "Student"
$student = new Student(12);

$student->getAge();

$student->setAge(14);
echo "<br >";

$student->getAge();
echo "<br >";

$student->getSkill();
echo "<br >";



//Creating an instance of the class "Calculator"
$value = new Calculator(3,2);

$value->getDifference();
echo "<br >";

$value->setValues(5,1);

$value->getSum();


?>