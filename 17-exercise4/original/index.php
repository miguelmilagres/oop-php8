<?php

require_once('Classes.php');

$veiculos = [];

$file = fopen('dados.csv','r');
while(!feof($file)) {
    $linha = fgetcsv($file);
    if ($linha) {
        switch ($linha[0]) {
            case 'automovel' :
                $veiculos[] = new Automovel($linha);
                break;
            case 'aviao' :
                $veiculos[] = new Aviao($linha);
                break;
            case 'barco' :
                $veiculos[] = new Barco($linha);
                break;
            default :
                break;
        }
    }
}
fclose($file);

$automoveis = [];
$avioes = [];
$barcos = [];

foreach($veiculos as $veiculo) {
    $ano = $veiculo->get_ano();
    if ($ano <= 2015) {
        $tipo = $veiculo->get_tipo();
        if ($tipo == 'automovel') {
            $automoveis[] = $veiculo;
        } elseif ($tipo == 'aviao') {
            $avioes[] = $veiculo;
        } else {
            $barcos[] = $veiculo;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Exercício 3</title>
</head>
<body>
    
    
    <h1>Automóveis</h1>
    <ul>
        <?php foreach ($automoveis as $automovel) : ?>
           <li><?= $automovel->apresentar(); ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Aviões</h1>
    <ul>
        <?php foreach ($avioes as $aviao) : ?>
           <li><?= $aviao->apresentar(); ?></li>
        <?php endforeach; ?>
    </ul>
    <h1>Barcos</h1>
    <ul>
        <?php foreach ($barcos as $barco) : ?>
           <li><?= $barco->apresentar(); ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>