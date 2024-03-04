<?php

// Khai báo chuỗi
$name1 = "Bình Dương tuyệt vời";
$name2 = "bình dương tuyệt vời";

// Sử dụng hàm strcmp()
if (strcmp($name1, $name2) !== 0) {
	echo 'Both strings are not equal';
}
else {
	echo 'Both strings are equal';
}
?>
