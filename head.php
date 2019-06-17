<?php 
include "funcoes.php";

// A função file_get_contents() é utilizada para leitura de um arquivo
// inteiro em uma string.
// Funciona como uma espécie de de atalho se comparado a sequência
// de comandos: fopen -> fread -> fclose
$jsonProdutos = file_get_contents("Produtos.json");

// $logado = false;

// json_decode(), transforma um JSON em um objeto contendo um array associativo.
$produtos = json_decode($jsonProdutos, true);

//este comando "entra" dentro do Produtos definido no Json
$produtos = $produtos["Produtos"];

// $logado = false;
// $produtos = [
//     "produto1" => ["id"=> 11,
//                   "nome"=>"Black Keys",
//                   "categoria"=>"camiseta",
//                   "descricao"=>"Camiseta preta, 20% algodão, 80% polyester com estampa colorida",
//                   "qtde"=> 50,
//                   "preco"=> 65,
//                   "img"=> "image/prod-1.jpg"],
//     "produto2" => ["id"=> 12,
//                   "nome"=>"The Beatles",
//                   "categoria"=>"camiseta",
//                   "descricao"=>"Camiseta branca, 100% algodão com estampa preta",
//                   "qtde"=> 60,
//                   "preco"=> 45,
//                   "img"=> "image/prod-2.jpg"],              
//     "produto3" => ["id"=> 13,
//                   "nome"=>"Queen",
//                   "categoria"=>"camiseta",
//                   "descricao"=>"Camiseta branca, 100% algodão com estampa colorida",
//                   "qtde"=> 70,
//                   "preco"=> 55,
//                   "img"=> "image/prod-3.jpg"],          
//     "produto4" => ["id"=> 14,
//                     "nome"=>"Foo Fighters",
//                     "categoria"=>"camiseta",
//                     "descricao"=>"Camiseta colorida, 100% algodão com estampa preta",
//                     "qtde"=>80,
//                     "preco"=> 60,
//                     "img"=> "image/prod-4.jpg"]           

// ];

// $produtos = addProduto("Curso UX","descrição",2000,"image/prod-5.jpg",$produtos);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio PHP</title>
        
    <link type="text/css" rel="stylesheet" media="screen" href="css/estilos.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
