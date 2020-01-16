<?php
    $a= $argv [1];
    $b= $argv [2];
    $c= $argv [3];
    if($a==0){
        echo "Khong phai phuong trinh bac hai mot an";
        
    }else {
        function solve($a,$b,$c){
            $delta=$b*$b-4*$a*$c;
            $x=(-$b+sqrt($delta))/(2*$a);
            $y=(-$b-sqrt($delta))/(2*$a);
            $z=-$b/(2*$a);
            
            if($delta<0){
                echo " Phuong trinh vo nghiem ";
            }else if ($delta==0){
                    echo "Phuong trình co nghiem kep x1=x2=".$z;
            }else {
                echo "Phuong trinh co 2 nghiem phan biet x1=".$y."\t"."x2=".$x;
            }
            
        }
        solve($a,$b,$c);

    }
    
    
?>