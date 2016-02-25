<?php
//access the global array called $_POST to get the values from the text fields
$name = $_POST["name"];
$pass = $_POST["pass"];
$pugs = $_POST["pugs"];
$pugcollar = $_POST["pugcollar"];
$pugtreat = $_POST["pugtreat"];
$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
echo '<body style="background-color:	#00FFFF">';
echo "Welcome Customer.  Here is the information you entered: <br>";
echo "Your username:".$name."<br>Your password:".$pass."<br><br>";

$subtotal1 = 100*$pugs;
$subtotal2=$subtotal1+15*$pugcollar;
$subtotal3 = 100*$pugs+15*$pugcollar+5*$pugtreat;

echo '<table id ="t" style = "width:75% "border="1" "background-color:#A4A4A4" >';

echo "<tr><th></th><th><font color=\"blue\">Quantity</th><th><font color=\"blue\">Cost Per Item</th><th><font color=\"blue\">Sub Total</th></tr>";
echo "<tr><th><font color=\"blue\">Pugs</th><td>".$pugs."</td><td>$100</td><td>$".$subtotal1."</td></tr>";
echo "<tr><th><font color=\"blue\">Pug Collar</th><td>".$pugcollar."</td><td>$15</td><td>$".$subtotal2."</td></tr>";
echo "<tr><th><font color=\"blue\">Pug Treat</th><td>".$pugtreat."</td><td>$5</td><td>$".$subtotal3."</td></tr>";
if($s1)
{
    $total = $subtotal3+0;
echo"<tr><th><font color=\"blue\">Shipping</th><td >Free 7 day</td><td>$0</td><td>$".$total."</td></tr>";

}
else if($s2)
{
  $total = $subtotal3+50;
  echo"<tr><th><font color=\"blue\">Shipping</th><td >Overnight</td><td>$50</td><td>$".$total."</td></tr>";

}
else {
  $total = $subtotal3+5;
  echo"<tr><th><font color=\"blue\">Shipping</th><td >3 day</td><td>$5</td><td>$".$total."</td></tr>";

}
echo"</table>";
echo '<table id ="t" style = "width:75% "border="1" >';
echo"<th>Total Cost</th><td>$".$total."</td>";
?>
