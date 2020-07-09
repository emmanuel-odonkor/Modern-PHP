<?php

//instantiation an object,"$stud1" of the class "Student" and testing the methods of the class

require("php_practice2.php");

$stud1 = new Student(12);
$stud1->getAge();
$stud1->setAge(14);
echo "<br >";

$stud1->getAge();
echo "<br >";

$stud1->getName();
echo "<br >";

$stud1->getSkill();

?>