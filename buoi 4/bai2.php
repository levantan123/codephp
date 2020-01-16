
<?php
        $string = "hoc php full stack";
        $a = substr_count($string,"hoc");
        $b = substr_count($string,"php");
        $c = substr_count($string,"full");
        $d = substr_count($string,"stack");

        $e=$a+$b+$c+$d;

        echo "Chuỗi đã cho có ".$e. " tu";
?>