<?php
// 9.1. Viế t chương trì nh nhậ p và o mộ t số nguyên. Kiể m tra số
// đó nguyên dương hay nguyên âm. In ra mà n hì nh kế t quả
// 9.2. Viế t chương trì nh nhậ p và o mộ t số nguyên n. Kiể m tra n
// chia hế t cho 3 hay 5. In kế t quả ra mà n hì nh
// 9.3. Viế t chương trì nh nhậ p và o thá ng trong năm. In ra số
// ngà y củ a thá ng đó
// 9.4. Viế t chương trì nh giả i phương trì nh bậ c 2
// 9.5. Viế t chương trì nh nhậ p và o 3 số a, b, c. Kiể m tra có phả i
// là 3 cạ nh củ a mộ t tam giá c không?

//9.1
$a = 6;
if($a > 0){
    echo "Đây là số nguyên dương";
}else{
    if($a == 0){
        echo "Đây là số ko âm ko dương";
    }else{
    echo "Đây là số nguyên âm";
    }
}

//9.2
$n = 6;
if($n %3 == 0){
    echo "Đây là số chia hết cho 3";
}else{
    if($n % 5 == 0){
        echo "Đây là số chia hết cho 5";
    }else{
         echo "Đây là số không chia hết cho cả 3 và 5";
    }
}
//9.3
$month = 6;

switch($month){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "Tháng có 31 ngày";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "Tháng có 30 ngày";
        break;
    case 2:
        echo "Tháng có 28 hoặc 29 ngày";
    break;
    default:
    echo "Tháng ko hợp lệ";
}
