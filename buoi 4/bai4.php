<?php
    /*
    $s1= $argv[1];
    $s2 = $argv[2];
    echo "s1: ".$s1."\n"."s2: ".$s2."\n";

    if(strlen($s1)<strlen($s2)){
        echo "Sau s2 chua sau s1"."\n";

    }else if(strlen($s1)==strlen($s2)){
        echo "Sau s1 và sau s2 khong chua nhau"."\n";
    }else if(strlen($s1)>strlen($s2)){
       echo "Sau s1 chua sau s2"."\n";
    }
    */

    $s1= $argv[1];
    $s2 = $argv[2];
    echo "s1: ".$s1."\n"."s2: ".$s2."\n";

    if(strcmp($s1,$s2)>0){
        echo "Sau s1 chua sau s2"."\n";

    }else if(strcmp($s1,$s2)==0){
        echo "Sau s1 và sau s2 khong chua nhau"."\n";
    }else if(strcmp($s1,$s2)<0){
       echo "Sau s2 chua sau s1"."\n";
    }
    
    
?>