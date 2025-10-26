<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php 
        
        require_once 'ControleRemoto.php';

        $cr1 = new ControleRemoto();

        $cr1->ligar();

        
        $cr1->maisVolume();
        
        $cr1->abrirMenu();
        

        
        // var_dump($cr1);




        ?>
    </pre>
    
</body>
</html>