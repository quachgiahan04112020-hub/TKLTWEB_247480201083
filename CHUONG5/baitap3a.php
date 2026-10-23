<?php
//Khởi tạo biến
$x = 3;
$y = 5;

// Thực hiện các phép tính
$tong = $x + $y;
$hieu = $x - $y;
$tich = $x * $y;
$thuong = ($y != 0) ? ($x / $y) : "Không thể chia cho 0";
$du = ($y != 0) ? ($x % $y) : "Không thể chia cho 0";

// Xuất kết quả ra màn hình
echo "Số thứ nhất (\$x): $x <br>";
echo "Số thứ hai (\$y): $y <br>";
echo "Tổng ($x + $y) = $tong <br>";
echo "Hiệu ($x - $y) = $hieu <br>";
echo "Tích ($x * $y) = $tich <br>";
echo "Thương ($x / $y) = $thuong <br>";
echo "Chia lấy dư ($x % $y) = $du <br>";
?>