<?php

$x=$_POST['x'];
$y=$_POST['y'];

if(isset($_POST["add"]))
{
	$z=$x+$y;
	print "Result:$z";
}
if(isset($_POST["sub"]))
{
	$z=$x-$y;
	print "Result:$z";
}
if(isset($_POST["mul"]))
{
	$z=$x*$y;
	print "Result:$z";
}
if(isset($_POST["div"]))
{
	$z=$x/$y;
	print "Result:$z";
}
if(isset($_POST["large"]))
{
	if($z=$x>$y)
	{
		print "Large Number:$x";
	}
	else
	{
		print "Large Number:$y";
	}
}

if(isset($_POST["print"]))
{
	for($i=$x; $i<=$y; $i=$i+1)
	{
		print"<br>$i";
	}
}
?>

<html>
<head>
	<title>Basic php</title>
</head>
<body>

	<form method="post" >
		<table height="200" width="600" bgcolor="#00FF99" align="center">
			<tr>
				<td>
					Enter The 1st Input Number:<input type="text" name="x" ><br>

				</td>

			</tr>
			<tr>
				<td>
					Enter The 2nd Input Number:<input type="text" name="y" ><br>

				</td>

			</tr>
			<tr>
				<td>
					<input type="submit" name="add" value="Add">

					<input type="submit" name="sub" value="SUB">

					<input type="submit" name="mul" value="MUL">

					<input type="submit" name="div" value="DIV">

					<input type="submit" name="large" value="LARGE">

					<input type="submit" name="print" value="Print123...n">

				</td>

			</tr>
		</table>
		


	</form>
</body>
</html>