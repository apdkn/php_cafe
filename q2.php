<?php
// <link rel=stylesheet href='style.css' type='text/css'>

echo "주문서<br>";

// $num1 = count($_POST["num"]);
// echo "주문 개수 : ".$_POST["num"]."<br>";
// for ($q=0; $q<$num1; $q++) {
//   echo $_POST["num"][$q];
//   if($q != $num1 - 1)
//     echo ", ";
// }
//
// echo "사이즈 : ".$_POST["usize"]."<br>";
// echo "결제금액 : ".$_POST["price"]."<br>";



// switch (variable) {
//   case 'value':
//     // code...
//     break;
//
//   default:
//     // code...
//     break;
// }

// function
//cafe menu and 개수
//isset = 변수가 선언되었고 다른지 확인
$num = count($_POST["tea"]);
echo "주문메뉴 : ";
for ($i=0; $i<$num; $i++) {
  echo $_POST["tea"][$i];
  if($i != $num - 1)
    echo ", ";
}
echo "<br>";
$option = isset($_POST['num']) ? $_POST['num'] : true;
echo "아메리카노 주문 개수 : ";
   if ($option) {
      echo htmlentities($_POST['num'], ENT_QUOTES, "UTF-8");
   } else {
     echo "0";

   }
  echo "<br>";

  $option1 = isset($_POST['num1']) ? $_POST['num1'] : false;
  echo "카페라떼 주문 개수 : ";
     if ($option1) {
        echo htmlentities($_POST['num1'], ENT_QUOTES, "UTF-8");
     } else {
       echo "0";

     }
    echo "<br>";

    $option2 = isset($_POST['num2']) ? $_POST['num2'] : false;
    echo "카페모카 주문 개수 : ";
       if ($option2) {
          echo htmlentities($_POST['num2'], ENT_QUOTES, "UTF-8");
       } else {
        echo "0";

       }
      echo "<br>";

      $option3 = isset($_POST['num3']) ? $_POST['num3'] : false;
      echo "바닐라라떼 주문 개수 : ";
         if ($option3) {
            echo htmlentities($_POST['num3'], ENT_QUOTES, "UTF-8");
         } else {
        echo "0";

         }
        echo "<br>";

//메뉴 가격
$americanoR = 4100;
$americanoL = 4600;
$caffelatteR = 4600;
$caffelatteL = 5100;
$caffemocaR = 5600;
$caffemocaL = 6100;
$VanillaR = 5100;
$VanillaL = 5600;

echo "결제 금액 : ";
if($option == 3)
echo $americanoR * 3;
else if($option == 2)
echo $americanoR * 2;
else
echo $americanoR;

echo "<br>";

echo "";
if($option1 == 3)
echo $caffelatteR * 3;
else if($option == 2)
echo $caffelatteR * 2;
else
echo $caffelatteR;

echo "<br>";





?>
