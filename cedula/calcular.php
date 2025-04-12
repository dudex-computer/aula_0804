<?php    
    $valor = $_POST['num'];
    $i = 0;
    // $tamanho = $_POST ['tamanho'];
    $v = $valor;

    // 100
    $i = 0;
    
    do
    {
        $v -= 100;
        $i++;
    } while ($v >= 100);

    echo "<br>R$ 100,00: ".$i;

    // 50
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 50;
        $i++;
    } while ($v >= 50);

    echo "<br>R$ 50,00: ".$i;

    // 20
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 20;
        $i++;
    } while ($v >= 20);

    echo "<br>R$ 20,00: ".$i;

    // 10
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 10;
        $i++;
    } while ($v >= 10);

    echo "<br>R$ 10,00: ".$i;

    // 5
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 5;
        $i++;
    } while ($v >= 5);

    echo "<br>R$ 5,00: ".$i;

    // 2
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 2;
        $i++;
    } while ($v >= 2);

    echo "<br>R$ 2,00: ".$i;

    // 1
    $i = 0;
    $v = $valor;

    do
    {
        $v -= 1;
        $i++;
    } while ($v >= 1);

    echo "<br>R$ 1,00: ".$i;

    
    // $notas = [100, 50, 20, 10, 5, 2, 1];
    // $tamanho = count($notas);
    //  echo "<h2>Notas necessárias para R$$valor:</h2>";

    //  do { 
    //     $nota = $notas[$i];
    //     $qtd = $valor / $nota; 

    //     if ($qtd >= 1) { 
    //         echo "Notas de R$$nota: " . (int)$qtd . "<br>"; 
    //         $valor -= (int)$qtd * $nota; 
    //     }
    // } while ($i = 0; $i < $tamanho; $i++);
?>