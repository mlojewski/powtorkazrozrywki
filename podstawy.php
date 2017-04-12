<?php
// $a = 0;
// $b = 0;
// $c = 0;
//
// function checkTriangle($a, $b, $c){
//
//   if ($a+$b>$c && $a+$c>$b && $c+$b>$a) {
//     echo "da się stworzyć trójkąt o bokach ".$a." ".$b." oraz ".$c."<br>";
//   }
//   else {
//     echo "nie da się stworzyć trójkąta <br>";
//   }
// }
// checkTriangle(3,5,6);
// checkTriangle(1,2,11);
//
//  function compareThree($a, $b, $c)
// {
//   if ($a>$b && $a>$c) {
//     echo "największą liczbą jest ".$a."<br>";
//   }elseif ($b>$c && $b>$a) {
//     echo "największą liczbą jest ".$b."<br>";
//   }else {
//     echo "największą liczbą jest ".$c."<br>";
//   }
// }
// compareThree(3,5,77);
// compareThree(5,3,11);
// compareThree(33,2,44);
//
// function gotThePower($a)
// {
//   $baza=1;
//   for ($i=1; $i <=$a ; $i++) {
//     $baza=$baza*$i;
//   }
//   echo $baza."<br>";
// }
// gotThePower(5);
//
// function countBetween($a, $b)
// {
//   $result='';
//   for ($i=$a; $i <=$b; $i++) {
//     $result+=$i;
//   }
//   echo $result;
// }
// countBetween(5,10);
//
// function showOdd($a)
// {
//   for ($i=0; $i <=$a ; $i++) {
//
//     if ($i%2!=0) {
//       echo $i." - nieparzysta<br>";
//     }else {
//       echo $i." - parzysta <br>";
//     }
//   }
// }
// showOdd(11);
//
// function showSquare($x)
// {
//   for ($i=1; $i <=$x; $i++) {
//     for ($j=1; $j <=$x; $j++) {
//       echo " *";
//     }
//     echo "<br>";
//   }
// }
// showSquare(4);
//
// function showTree($x)
// {
//   for ($i=1; $i <= $x; $i++) {
//     for ($j=1; $j <=$i ; $j++) {
//       echo " *";
//     }
//     echo "<br>";
//   }
// }
// showTree(5);

// function checkTriangle($a, $b, $c)
// {
//   if ($a+$b<$c || $a+$c<$b || $c+$b<$a){
//     echo "nie można zbudować trójkąta <br>";
//   }
//   elseif ($a == $b && $a == $c) {
//     echo "można zbudować trójkąt równoboczny<br>";
//   }
//   elseif ($a==$b || $a==$c || $b==$c) {
//     echo "można zbudować trójkąt równoramienny<br>";
//   }else {
//     echo "można zbudować trójkąt różnoboczny<br>";
//   }
// }
// checkTriangle(1,2,10);
// checkTriangle(2,2,2);
// checkTriangle(2,3,4);
// checkTriangle(2,1,2);

// function calculateArea($a, $b)
// {
//   $area=$a*$b;
//   echo "pole wynosi".$area;
// }
// calculateArea(3,5);
//
// function calculateObwod($a, $b)
// {
//   $obwod=(2*$a)+(2*$b);
//   echo "obwód wynosi ".$obwod;
// }
// calculateObwod(4,6);


// $a = 5;
// switch ($a) {
//   case '1':
//     echo "styczeń";
//     break;
//     case '2':
// //       echo "luty";
// //       break;
//       case '3':
// //           echo "marzec";
// //           break;
//       case '4':
// //               echo "kwiecień";
// //               break;
//
//   default:
//     echo "ni ma takiego miesiąca";
//     break;
// }



// function showSeminar($a)
// {
//   switch ($a) {
//     case '8':
//       echo " 8 -> wykłady ";
//       case '9':
//         echo " 9-> wykłady ";
//         case '10':
//           echo " 10-> wykłady ";
//           case '11':
//             echo "11 -> wykłady ";
//             case '12':
//               echo "12 -> dyskusje ";
//               case '13':
//                 echo "13 -> dyskusje ";
//                 case '14':
//                   echo " 14 -> obiad ";
//                   case '15':
//                     echo " 15-> prelekcje ";
//                     case '16':
//                       echo "16 -> prelekcje ";
//                       case '17':
//                         echo "17 -> prelekcje ";
//                         case '18':
//                           echo "18 -> prelekcje ";
//                           case '19':
//                             echo "19 -> kolacja ";
//                             break;
//
//     default:
//     echo "ni ma takiej godziny";
//       break;
//   }
// }
// showSeminar(9);
// showSeminar(17);
// showSeminar(22);


// function addOdd($liczba)
// {
//   $suma=0;
//   for ($i=1; $i <= $liczba; $i++) {
//   if ($i%2!=0) {
//     $suma=$suma+$i;
//
//   }
//   }
//   echo $suma;
// }
// addOdd(92);

// function rentCost($days)
// {
//   $cost=0;
//   if ($days==1) {
//     $cost=200;
//   }
//   elseif ($days==2 || $days==3) {
//     $cost=$days*180;
//   }
//   elseif ($days==4 || $days==5 || $days==6 || $days==7) {
//     $cost=$days*160;
//   }else {
//     $cost=$days*150;
//   }
//   $a=0;
//   $rabat=0;
//   for ($i=1; $i <=$days ; $i++) {
//     if ($i%7==0) {
//       $a++;
//     }
// }
//   $rabat=$a*50;
//
//   return $cost-$rabat;
//
// }
// echo "koszt wynosi".rentCost(4);
// echo "koszt wynosi".rentCost(9);

function changeMoney($a)
{
  $dychy=0;
  $piatki=0;
  $dwojki=0;
  $jedynki=0;

  for ($i=1; $i < $a; $i++) {
    if ($i%10==0) {
      $dychy++;
    }
  }
  $temp1=$a-10*$dychy;
  for ($i=1; $i < $temp1; $i++) {
    if ($i%5==0) {
      $piatki++;
    }
  }
  $temp2=$a-(10*$dychy)-(5*$piatki);
  for ($i=1; $i < $temp2; $i++) {
    if ($i%2==0) {
      $dwojki++;
    }
  }
  $temp3=$a-(10*$dychy)-(5*$piatki)-(2*$dwojki);
  for ($i=0; $i < $temp3; $i++) {

      $jedynki++;

  }
  echo "jest".$dychy."banknotów po 10 pln oraz: ".$piatki."monet po 5 pln".$dwojki."monet po 2 pln i ".$jedynki."monet po 1 pln";
}
changeMoney(238);
 ?>
