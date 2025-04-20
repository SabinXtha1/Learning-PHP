<?php
   $item = "pizza";
   $price = 10.99;
  $quantity= $_POST['quantity'] ;
  $total = $price * $quantity;

echo "Round the Number " . round($total) . "<br>";
echo "Round the Number " . abs($total);
echo "Round the Number " . floor($total);
echo "Round the Number " . ceil($total);
echo "Power " . pow($total,$total);
echo "SQuare Root" . sqrt($total);
echo "Maximum NUm" . max($total,$total+1);
  echo "You ordered {$quantity} {$item}<br>";
  echo "Random NUmber " . rand(90,10000) . "<br>";
  echo "The total is \${$total}";

?>
