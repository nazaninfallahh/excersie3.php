<?php
// Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
$month = date("F");
if ($month == "August") {
    echo "It's August, so it's still holiday. <br>";
} else{
  
    echo "Not August, This is ". $month ." so i don't have any holidays <br>";
}

// Assign color red to a variable name $color and check to print one the following responses using if else statement 
$color = "red";
if ($color == "red") {
echo "The color is red. <br>";
}
else{ echo "The color is not red.";
}
echo "<br>";

// Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
$grade=70;
echo "The grade is: ";

if($grade>80){
    echo "Excellent";
}
elseif($grade>70){
    echo "Great";
}
elseif($grade>60){
    echo "Good";
}
elseif($grade>50){
    echo "Pass";
}
else{
    echo "Fail";
}
echo "<br>";

//Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)



?>

<form action="Exercise3.php" method="post">
Name: <input type="text" name="name" required><br>
Age: <input type="number" min=0 name="age" required><br>
<input type="submit" name='submit'>
</form>

<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $age = $_POST['age'];
    if($age>=18){
        echo $name . "<b> is eligible for voting</b>";}
    else{
        echo $name . "<b> is not eligible for voting</b>";}
    }
        echo "<br><br>";
// Use a looping statement to construct the following pattern: 
for($x=9;$x>1;$x--){
    for($i=1;$i<$x;$i++){
        echo $i;
    }
    echo "<br>";
}
echo "<br><br>";
// Use While loop to print the following pattern: 
$size=8;
$i=1;
while($i<=$size){
    $x=1;
    while($x<=$i){
        echo "*";
        $x++;
    }
    echo "<br>";
    $i++;
}
?>
