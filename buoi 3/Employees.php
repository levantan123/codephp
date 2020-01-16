<?php
    function printStarts(){
        echo "******************************"."\n";

     }
        printStarts();
            
            $i = $argv [1];
            echo "Cong ty lua chon ".$i." nhan vien la: ";
        
        
    function createContract(){
            while(($i>=1)&&($i<=10)){
                switch ($i){
                    case 1: echo "Le Van A"."\n";
                        break;
                    case 2: echo "Le Van B"."\n";
                        break;
                    case 3: echo "Le Van C"."\n";
                        break;
                    case 4: echo "Le Van D"."\n";
                        break;
                    case 5: echo "Le Van E"."\n";
                        break;
                    case 6: echo "Le Van F"."\n";
                        break;
                    case 7: echo "Le Van G"."\n";
                        break;
                    case 8: echo "Le Van H"."\n";
                        break;
                    case 9: echo "Le Van I"."\n";
                        break;
                    case 10: echo "Le Van K"."\n";
                        break;
                    case 0: 
                        break;
                }
                
            }
            
        }


    
    createContract();
    printStarts();

?>