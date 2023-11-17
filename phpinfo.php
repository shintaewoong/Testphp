<?php   
    echo "시간당급여";
    echo "- 주간 근무 : 9,500원";
    echo "- 야간 근무 : 주간 시급 * 1.5";

    $Priced = 9500;
    $WorkD = "주간";
    $WorkT = 8;

    if($WorkD == "주간") {
        $pay = $WorkT*$Priced;
    } else {
        $pay = $WorkT*$Priced * 1.5;
    }

    echo $pay;
    ?>