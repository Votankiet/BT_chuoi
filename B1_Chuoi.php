<?php

function remove_extra_spaces($str) {
    $str = preg_replace('/\s+/', '', $str);
    $str = trim($str);
    return $str;
}

// chương trình loại bỏ khoảng trắng thừa trong chuỗi
$str = "  Xin gui loi chao den  the  gioi    voi nhieu   moi me.   ";
$trimmed_str = trim($str);
echo $trimmed_str;

?>