<?php 
    function printStarts(){
        echo "******************************"."\n";

     }
        printStarts();
        $n = $argv [1];
        

        
    function vanpire($n){
        $x = $argv [2];
        $y = $argv [3];
        $z= $x*$y;
        if($z==$n){
            
            echo $n." la so vampire"."\n";
        }else {
            
            echo $n." khong phai la so vampire"."\n";
        }
            

    }
    vanpire($n);
    printStarts();
?>