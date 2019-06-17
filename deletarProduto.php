<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio PHP</title>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php 
include_once "funcoes.php";

        // foreach ($produtos as $chave => $value) {

        //    if ($value["id"] == $_GET["id"]){
            $idproddel = $_GET["id"];
            $retorno = deleteProduto($idproddel);
            if($retorno == true){
                echo "<h1>Produto deletado com sucesso</h1>";
                echo "<a class='btn btn-primary' href='desafio.php'>Voltar</a>";    
            }
        // }
    // }
?>