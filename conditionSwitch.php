<?php

/**
 * 10.1. Viế t chương trì nh nhậ p và o mộ t số nguyên. Kiể m tra số
 *đó nguyên dương hay nguyên âm. In ra mà n hì nh kế t quả
 */
$a = 7;

switch ($a) {
    case ($a > 0):
        # code...
        echo "$a là số nguyên dương";
        break;
    case ($a < 0):
        # code...
        echo "$a là số nguyên âm";
        break;
    case ($a == 0):
        # code...
        echo "$a là số ko âm ko dương";
        break;
    default:
        # code...
        break;
}
//  10.2
echo "<br>";
switch ($a) {
    case ($a % 3 == 0):
        # code...
        echo "$a chia hết cho 3";
        break;
    case ($a % 5 == 0):
        # code...
        echo "$a chia hết cho 5";
        break;
    default:
        # code...
        echo "$a  không chia hết cho 3 và 5";
        break;
}
// 10.3
echo "<br>";
$thang = 5;
switch ($thang) {
    case '1':
    case '3':
    case '5':
    case '7':
    case '8':
    case '10':
    case '12':
        # code...
        echo "$thang có 31 ngày";
        break;
    case '4':
    case '6':
    case '9':
    case '11':
        # code...
        echo "$thang có 30 ngày";
        break;
    case '2':
        # code...
        echo "$thang có 28 ngày";
        break;
    default:
        # code...
        echo "sai";
        break;
}
//  10.4
echo "<br>";
$a = 1;
$b = -3;
$c = 2;

$delta = $b * $b - 4 * $a * $c;
switch ($delta) {
    case ($delta > 0):
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        break;
    case ($delta == 0):
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép: x = $x";
        break;

    default:
        # code...
        echo "Phương trình không có nghiệm thực";
        break;
}
//  10.5
echo "<br>";
switch ($a && $b && $c) {
    case ($a + $b > $c || $b + $c > $a || $c + $b > $a):
        # code...
        echo " Đây là hình tam giác";
        break;
    default:
        # code...
        echo "Đây không phải là hình tam giác";
        break;
}
