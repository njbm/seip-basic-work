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
    public function mul()
    {
        return $this->number1 * $this->number2;
    }
    public function div()
    {
        return $this->number1 / $this->number2;
    }
    public function printseries()
    {
        for($print=$this->number1; $print<=$this->number2; $print++)
        {
            echo "<br>".$print;
        }
    }

    // public function result()
    // {
    //     //return 'Sum =' . $this->sum() . '&nbsp &nbsp &nbsp;'  .  'Sub= '.$this->sub();
    // }
}

// echo 'Calculate Result :  ' . $calculator->result();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $calculator = new Calculator;

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    $calculator->setNumber1($number1);
    $calculator->setNumber2($number2);

    if (isset($_POST["sum"])) 
    {
        $result ='Addition =  ' . $calculator->sum();
        
        echo "<h1>$result</h1>";
    }
    if (isset($_POST["sub"])) 
    {
        $result ='Subtraction =  ' . $calculator->sub();
        
        echo "<h1>$result</h1>";
    }
    if (isset($_POST["mul"])) 
    {
        $result ='Multiplication =  ' . $calculator->mul();
        
        echo "<h1>$result</h1>";
    }
    if (isset($_POST["div"])) 
    {
        $result ='Division =  ' . $calculator->div();
        
        echo "<h1>$result</h1>";
    }
    if (isset($_POST["printseries"])) 
    {
        $result = $calculator->printseries();
        
        echo "<h1>$result</h1>";
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    

    <form method="POST">
        <table height="200" width="600" bgcolor="#00FF99" align="center" style="text-align: center;
            border-radius: 10px;">
            <h1 style="text-align: center;">Calculator</h1>
            <tr>
                <td>
                    Enter The 1st Input Number  :<input type="number" name="number1" ><br>

                </td>
            </tr>
            <tr>
                <td>
                    Enter The 2nd Input Number  :<input type="number" name="number2" ><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="sum" value="Add">

                    <input type="submit" name="sub" value="SUB">

                    <input type="submit" name="mul" value="MUL">

                    <input type="submit" name="div" value="DIV">

                    <input type="submit" name="large" value="LARGE">

                    <input type="submit" name="printseries" value="Print123...n">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>