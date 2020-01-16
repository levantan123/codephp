<?php
    $n= $argv[1];
    $m= $argv[2];
    
    
    function gcd($n,$m){
        $a=$m-$n;
        $b=$n-$m;
        if($n>$m){
            echo "Uoc chunng lon nhat la ".$b."\n";
        }else if($n<$m) {
            echo "Uoc chunng lon nhat la ".$a."\n";
        }           
    }
    gcd($n,$m);
    
    
    function lcm ($n,$m){
        $a=$m-$n;
    $c=($n*$m)/($a);
        echo "Boi chung nho nhat la ".abs($c);

}
    lcm($n,$m);
    

?>