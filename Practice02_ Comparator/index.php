<?php
include "ComparableCircle.php";

echo "<pre>";
$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new Circle('circleThree', 10);
var_dump($circleOne->compareTo($circleTwo) );
var_dump($circleOne->compareTo($circleThree));

