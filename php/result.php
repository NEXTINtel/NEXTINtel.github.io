<?php
$rows = 10; //行
$cols = 8; //列

$td_width = floor(100 / $cols)."%";
$tab_str = "<table border=\"1\" width=\"80%\" align=\"center\">\n";

for ($i = 0; $i < $rows; $i++)
{
    $tab_str.="<tr>\n";
    for ($k = 0; $k < $cols; $k++)
    {
        $j = $i * $cols + $k; //单元格序列
        $tab_str.= "<td width=\"$td_width\">$j</td>\n";
    }
    $tab_str.="</tr>\n";
}
$tab_str.="</table>\n";

print $tab_str;
?>