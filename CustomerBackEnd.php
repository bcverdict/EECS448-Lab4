<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";  
$num0 = 0;
$num1 = 0;
$num2 = 0;
$ChoicePrice = 0;
$choice = $_POST['ship'];
if($_POST['ship']=='$50.00 over night')
{
  $ChoicePrice = 50;
}
else if($_POST['ship']=='$5.00 three day')
{
  $ChoicePrice = 5;
}
$name = $_POST['name'];
$pass = $_POST['pass'];
$TeddyNum = $_POST['TBQ'];
$BunnyNum = $_POST['SBQ'];
$PigNum = $_POST['SPQ'];

$Price0 = 10;
$Price1 = 7;
$Price2 = 4;
$Part1 = $Price0*$TeddyNum;
$Part2 = $Price1*$BunnyNum;
$Part3 = $Price2*$PigNum;
$Final = $Price0*$TeddyNum+$Price1*$BunnyNum+$Price2*$PigNum+$ChoicePrice;
echo "Welcome!<br>Email: ".$name."<br>Password: ".$pass."<br>";
echo "<table border='4' class='stats' cellspacing='0'>

          <tr>
          <td class='hed' colspan='8'>Total: $".$Final.".00</td>
            </tr>
          <tr>
          <th>ITEMS</th>
          <th>QUANTITY</th>
          <th>COST PER ITEM</th>
          <th>SUBTOTAL</th>

          </tr>";

            echo "<tr>";
            echo "<td>" . "TEDDY BEAR" . "</td>";
            echo "<td>" . $TeddyNum . "</td>";
            echo "<td>" . "$10.00" . "</td>";
            echo "<td>" . $Part1 . "</td>";

            echo "</tr>";

            echo "<tr>";
            echo "<td>" . "STUFFED BUNNY" . "</td>";
            echo "<td>" . $BunnyNum . "</td>";
            echo "<td>" . "$7.00" . "</td>";
            echo "<td>" . $Part2 . "</td>";

            echo "</tr>";

            echo "<tr>";
            echo "<td>" . "STUFFED PIG" . "</td>";
            echo "<td>" . $PigNum . "</td>";
            echo "<td>" . "$4.00" . "</td>";
            echo "<td>" . $Part3 . "</td>";

            echo "</tr>";

  echo "</table>";

 ?>
