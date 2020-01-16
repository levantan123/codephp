<?php
        $argvPhay[1]= $argv;
        
        function countAndSum($argvPhay){
            $sum=0;
            $count=0;
            for($i=2;$i<=(($argvPhay[1])+1);$i++){
                $sum+=$argvPhay[$i];

                if($argvPhay[$i]%2==0){
                    $count++;
                }


            }
            echo "Tong cac so la: ".$sum.", co ".$count." so le";


        }

        countAndSum($argvPhay);

?>