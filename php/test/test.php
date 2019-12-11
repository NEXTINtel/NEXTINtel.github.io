<?php
/**
 * [crtArr description]
 * @param  [int] $start   [循环开始变量]
 * @param  [int] $length  [数组长度]
 * @return [type] $arr    [返回数组]
 */
function crtArr($start, $length){
    $arr = array(); //声明一个空的数组
    for($i = $start; $i <= $length; $i ++){
        $arr[] = $i*2; // 向数组中添加值
    }
    return $arr;
}
$arr1 = crtArr(1, 5);
print_r($arr1);
?>