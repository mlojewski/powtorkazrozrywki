<?php

$array1 =[[1,2,3], [3,4,5], [3,5,6]];
function checkIf2DArrayIsRectangle($array1)
{
  $a = 0;
  foreach ($array1 as $value) {
    foreach ($value as $value1) {
      $a++;
    }
  }
  if (count($value) == sqrt($a)){
    echo "true";
  }else {
    echo "false";
  }
}
echo checkIf2DArrayIsRectangle([[1,2,3], [3,4,5], [3,5,6]]);
