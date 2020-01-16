<?php 
    

    function printStarts(){
        echo "******************************"."\n";

    }
    printStarts();
    $x = $argv[1];
    function classifyFluid($x){
            if($x>40){
                echo "EXtra strong liquor";
            }else if (($x>20)&&($x<=40)){
                echo "Strong liquor";

            }else if (($x>15)&&($x<=20)){
                echo "Liquor";
            }else if (($x>12)&&($x<=15)){
                echo " Strong vine";
            }else if (($x>10.5)&&($x<=12)){
                echo "Normail vine";

            }else 
                echo "Light vine";

            echo "\n";
            
    }
    classifyFluid($x);
    printStarts();

?>