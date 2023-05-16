<?php
// Example 1
echo "Explode practice--> <br>";
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0] . "<br>"; // piece1
echo $pieces[1] . "<br>"; // piece2
echo $pieces[4];
echo "<br><br>";

//Example 2

$user = "jaber hetos rafsan rayhan";
$name = explode(" ", $user);
echo $name[0] . "<br>";
echo $name[2];
echo "<br><br>";


// Example 3
$data = "Masud:*****:1023:1000: :HOME-->:Shell";
list($user, $pass, $uid, $gid, $space, $home, $shell)
 = explode(":", $data);
echo "$user<br>"; // Masud
echo $uid; // 1023
echo $space;
echo $home;
echo"<br>";
echo "$user <br> $pass";


echo "<br><br>";

//Example 4
$string="one two three four";

print_r(explode(" ",$string,-1));
echo "<br><br>";

//Example 5
/* A string that doesn't contain the delimiter will simply
return a one-length array of the original string.*/
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
print "$input1<br>";
var_dump(explode(',', $input1));
var_dump(explode(',', $input2));
var_dump(explode(',', $input3));

echo "<br><br><br>";

//Implode Practice-->

echo "Implode practice <br>";
// Example 1
$array = ['firstname', 'email', 'phone'];
print $array[0];
echo "<br>";
var_dump(implode(",", $array));
echo "<br>";
var_dump(implode('hello', [2]));
echo "<br>";
// The separator is optional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"

echo "<br><br>";


//Example 2


?>