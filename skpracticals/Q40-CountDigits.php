<?php
$num = 1509;
function countdigits($num){
    $count = 0;
    while ($num >0){
        $num = (int)($num /10);
        $count ++;
    }
    return $count;
}
echo countdigits($num);
echo "<br> This program is written and executed by Shivani Kapoor-0221BCA140";
?>
