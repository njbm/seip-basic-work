<?php
//variable
$headline1="The Cow";
$description="The cow is domestic animal. it has four foot.";
$firstname="Jaber";
//echo$firstname;
echo "My Name is $firstname";
echo"<br><br>";
//var_dump($firstname);

//function
function my_function($n1, $n2){
    
    //echo 1+2 . "<br>";
    //echo $n1+$n2 . "<br>";
    return $n1+$n2;
}
function my_function1($n1,$n2){
    //echo $n1-$n2. "<br>";
    return $n1-$n2;
}

my_function(5,15);
my_function1(20,5);
$result1 = my_function(65, 5);
$result2 = my_function(65, 5);
$result3 = my_function(30,10);

print$result1*$result2."<br>";

var_dump($result1+$result2+$result3 )





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <h1> <?php print"$headline1"; ?> </h1>
   <p><?php echo$description;?></p>

</body>
</html>