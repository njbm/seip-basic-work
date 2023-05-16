<?php


//Example 1

class Calculator
{
    public $number1 = 0;     //properties/variable.
    public $number2 = 0;     //properties/variable.

    public function setNumber1($number)   //method/function
    {
        $this->number1 =$number;       
    }
    public function setNumber2($number)   //method/function
    { 
        $this->number2 =$number;
    }
    
    public function sum()
    {
        return $this->number1+ $this->number2;
    }
    public function sub()
    {
        return $this->number1 - $this->number2;
    }
    public function result()
    {
        return 'Sum =' . $this->sum() . '&nbsp &nbsp &nbsp;'  .  'Sub= '.$this->sub();
    }
}


 if ($_SERVER['REQUEST_METHOD']=="POST")
 {

$calculator =new Calculator;

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

$calculator->setNumber1($number1);
$calculator->setNumber2($number2);

echo 'Calculate Result :  ' . $calculator->result();


    if (isset($_POST["sum"])) {
        // Create an instance of the Calculator class and call the sum() method
       
        $result = $calculator->sum();
        
        // Display the result in the HTML
        echo "<p>$result</p>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="" method="post">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1"><br><br>
        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2"><br><br>
        <input type="submit" value="Calculate">
    </form> <br><br>

</body>
</html>