<?php header("Content-Type:text/html;charset=utf-8");
  echo "<body style='background-color:#E6B36D'>";
 ?>
 <!DOCTYPE html>
 <html>
 <body>
 <?php
 echo "
 <h1 style=\"color: black;margin-left: 870px;font-size: 20px;;\">주문서<br></h>
 ";

 echo "
 <h2 style=\"color: black;margin-left: 870px;font-size: 20px;\"><br></h>
 ";
 ?>
 </body>
 </html>

<?php
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

// $size = isset($_POST['usize']) ? $_POST['usize'] : true;
// echo "사이즈 : ";
//    if ($size) {
//       echo htmlentities($_POST['usize'], ENT_QUOTES, "UTF-8");
//    } else {
//      echo "Regular";
//    }

$size = count($_POST["usize"]);
echo "사이즈 : ";
for ($a=0; $a<$size; $a++) {
  echo $_POST["usize"][$a];
  if($a != $size - 1)
    echo " ";
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
  echo "카페모카 주문 개수 : ";
     if ($option1) {
        echo htmlentities($_POST['num1'], ENT_QUOTES, "UTF-8");
     } else {
       echo "0";

     }
    echo "<br>";

    $option2 = isset($_POST['num2']) ? $_POST['num2'] : false;
    echo "카페라떼 주문 개수 : ";
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
echo "------------------------------------";
         echo "<br>";

echo "계산서";
echo "<br>";
//메뉴 가격
$americano = "아메리카노 금액 : ";
$caffemoca = "카페모카 금액 : ";
$caffelatte = "카페라떼 금액 : ";
$Vanilla = "바닐라라떼 금액 : ";
$total_price = "합계 : ";
$americanoR = 4100;
$americanoL = 4600;
$caffelatteR = 4600;
$caffelatteL = 5100;
$caffemocaR = 5600;
$caffemocaL = 6100;
$VanillaR = 5100;
$VanillaL = 5600;


echo $americano;
if($option == 3)
echo $americanoR * 3;
elseif($option == 2)
echo $americanoR * 2;
elseif($option == 1)
echo $americanoR;
elseif($option == 0)
echo "0";

echo "<br>";

echo $caffemoca;
if ($option1 == 3)
echo $caffemocaR * 3;
elseif($option1 == 2)
echo $caffemocaR * 2;
elseif($option1 == 1)
echo $caffemocaR;
elseif($option == 0)
echo "0";

echo "<br>";

echo $caffelatte;
if ($option2 == 3)
echo $caffelatteR * 3;
elseif($option2 == 2)
echo $caffelatteR * 2;
elseif($option2 == 1)
echo $caffelatteR;
elseif($option2 == 0)
echo "0";

echo "<br>";

echo $Vanilla;
if ($option3 == 3)
echo $VanillaR * 3;
elseif($option3 == 2)
echo $VanillaR * 2;
elseif($option3 == 1)
echo $VanillaR;
elseif($option3 == 0)
echo "0";

echo "<br>";



?>
