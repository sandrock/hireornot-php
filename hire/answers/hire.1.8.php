<?php

// show all error messages
ini_set('error_reporting', E_ALL | E_NOTICE);

/**
 * This class contains a mark with a minimum, a maximum and an actual value.
 */
class Mark {
    public $Min;
    public $Max;
    public $Value;
    
    public function __construct($min, $max, $value){
        $this->Min = $min;
        $this->Max = $max;
        $this->Value = $value;
    }
}

// add marks
$marks = array();
$marks[] = new Mark(1, 4, 1);
$marks[] = new Mark(1, 4, 2);
$marks[] = new Mark(1, 4, 3);
$marks[] = new Mark(1, 4, 4);
$marks[] = new Mark(1, 4, 3);
$marks[] = new Mark(1, 4, 4);
$marks[] = new Mark(1, 4, 2);
$marks[] = new Mark(1, 4, 3);

$marks[] = new Mark(-10, 10, 1);
$marks[] = new Mark(-10, 10, -7);
$marks[] = new Mark(-10, 10, 5);
$marks[] = new Mark(-10, 10, 10);
$marks[] = new Mark(-10, 10, -9);
$marks[] = new Mark(-10, 10, -2);

$marks[] = new Mark(0, 100, 2);
$marks[] = new Mark(0, 100, 20);
$marks[] = new Mark(0, 100, 90);
$marks[] = new Mark(0, 100, 22);
$marks[] = new Mark(0, 100, 12);

// count marks
//echo count($marks) , PHP_EOL;

//
// Exercice
//
// You have a collection of marks in the $marks variable. All marks have a minimum and maximum value.
//
// Using PHP, compute the average mark for the entire collection, express it as a mark from 0/20 to 20/20.
//
//

$avgs = array();
$sum = 0;
for ($i = 0; $i < count($marks); $i++)
{
    $mark = $marks[$i];    
    $avg = ($mark->Value + (0 - $mark->Min)) / ($mark->Max + (0 - $mark->Min));
    //echo $mark->Min, ' - ', $mark->Value, ' - ', $mark->Max, ' => ', $avg, PHP_EOL;
    $avgs[] = $avg;
    $sum += $avg;
}

echo $sum / count($marks), PHP_EOL;





