<?php
    $b = rand(0, 100);
    $t = 0;

    echo "Número base gerado: ".$b."<br><br>";
    echo "Números gerados:<br>";
    
    do {
        $g = rand(0, 100);
        echo $g."<br>";
        $t++;
    } while ($g != $b);

    echo "<br>A quantia de números gerados até o acerto foi de ".$t."<br><br>";
?>