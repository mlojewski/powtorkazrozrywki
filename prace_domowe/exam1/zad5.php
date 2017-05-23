<?php

$amount = 1000;
$percentage=10;
$years = 2;
echo computeBankInvestment($amount, $percentage, $years);
 function computeBankInvestment($amount, $percentage, $years)
{
  for ($i=1; $i <=$years ; $i++) {
    $profit = $amount*($percentage/100);
    $amount = $amount+$profit;
  }
  return $amount;
}
