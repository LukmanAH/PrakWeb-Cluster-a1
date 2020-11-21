<?php 

function cekharga($a, $b="merah"){
    $c=strlen($a);

    if($c<=10){
        $harga= 300*$c;
    }else if($c<=20){
        $harga=500*$c;
    }else{
        $harga=700*$c;
    }
    echo "<br>Nama : ".$a.", <br>Harga : ". $harga.", <br>Warna : ".$b."<br>";
}


function faktorial($a){
    $x=$a;
    for($i=1; $i<$a; $i++){
        $x=$x*$i;
    }
    return $x;
}


?>