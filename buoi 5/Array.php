<?php
    /*$arr = explode(" ",$argv[1]);
    print_r ($arr);
    function check($x){
        $sum = 0;
        for($i=1;$i<$x;$i++){
            if($x%$i==0){
                $sum+=$i;
            }
        }
        if($sum==$x){
            return true;
        }
            return false;

    }

    function kq($x){
        count =0;
        check($x);
        for ($i=0;$i<count($arr);$i++){
            check($arr[$i]);
        }
        echo $x."la so hoan hao";

    }
    kq($x);*/
    $arr = explode(" ",$argv[1]);
    /* for($i=0;$i<count($arr)-1;$i++){
        if(($arr[$i])*($arr[$i+1])<0){
            echo "la mang dan dau";

        }
            echo "khong la mang dan dau";
    }*/

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<$i;$j++){
            if($arr[$j])==($arr[$i]){
                unset ($arr[$i]);
            }
        }
    }



?>