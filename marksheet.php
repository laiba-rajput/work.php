<?php
$name = "laibazoya";
$roll_no = 101;
$urdu = 90;
$eng = 85;
$math = 95;
$obtained_marks = $urdu+$eng+$math;
$percentage = $obtained_marks/300*100;

echo"<u>Name</u>: $name <br> <u>Roll No</u>: $roll_no <br> <u>Marks obtained</u>: $obtained_marks <br> <u>Percentage</u>: $percentage";
if($percentage >=80){
    echo "<br> <u>Grade</u>: A+";
}
else if($percentage >=70){
    echo "<br> <u>Grade</u>: A";
}
else if($percentage >=60){
    echo "<br> <u>Grade</u>: B";
}
else if($percentage >=50){
    echo "<br> <u>Grade</u>: C";
}
else if($percentage >=40){
    echo "<br> <u>Grade</u>: D";
}
else{
    echo "<br> Failed";
}
?>
