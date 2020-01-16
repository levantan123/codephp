<?php
    $string = "hoc lap trinh php va hoc lap trinh web";
    $a = substr_count($string,"hoc");
    $b = substr_count($string,"lap");
    $c = substr_count($string,"trinh");
    $d = substr_count($string,"php");
    $e = substr_count($string,"va");
    $f = substr_count($string,"web");
    echo "hoc: ".$a." lan"."\n"."lap: ".$b." lan"."\n"."trinh: ".$c." lan"."\n"."php: ".$d." lan"."\n".
    "va: ".$e." lan"."\n"."web: ".$f." lan"."\n";

?>