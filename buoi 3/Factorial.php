<?php
    $n = $argv [1];
    function loopFactorial($n){
        $giaithua=1;
        for($i=1;$i<=$n;$i++){
            $giaithua*=$i;
            
        }
        return $giaithua;
        
        
    }
    echo "n!=".loopFactorial($n);

?>