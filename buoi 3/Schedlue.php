<?php
    function printStarts(){
        echo "******************************"."\n";

     }
        printStarts();
    $n= $argv [1];
    function printSchedule($n){
        switch ($n){
            case 2: echo  "Thu Hai, hoc buoi sang"."\n";
                break;
            case 3: echo "Thu Ba, hoc buoi sang"."\n";
                break;
            case 4: echo "Thu Tu, hoc buoi chieu"."\n";
                break;
            case 5: echo "Thu Nam, hoc buoi sang"."\n";
                break;
            case 6: echo "Thu Sau, hoc buoi chieu"."\n";
                break;
            case 7: echo "Thu Bay, hoc buoi chieu"."\n";
                break;
            case 8: echo "Chu Nhat duoc nghi"."\n";
                break;

        }

    }
    printSchedule($n);
    printStarts();
?>