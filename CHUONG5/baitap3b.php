<?php

$x = rand(1, 100);
$y = rand(1, 100);


$tong = $x + $y;
$hieu = $x - $y;
$tich = $x * $y;
$thuong = ($y != 0) ? round($x / $y, 2) : "Không thể chia cho 0";
$du = ($y != 0) ? ($x % $y) : "Không thể chia cho 0";


echo "Số ngẫu nhiên thứ nhất (\$x): $x <br>";
echo "Số ngẫu nhiên thứ hai (\$y): $y <br>";
echo "Tổng ($x + $y) = $tong <br>";
echo "Hiệu ($x - $y) = $hieu <br>";
echo "Tích ($x * $y) = $tich <br>";
echo "Thương ($x / $y) = $thuong <br>";
echo "Chia lấy dư ($x % $y) = $du <br>";
?>