<?php 
 
    function addProduto($nomeProduto, $categoriaProduto, $descricaoProduto, $qtdeProduto, $precoProduto, $imagemProduto){
        // A função file_get_contents() é utilizada para leitura de um arquivo
        // inteiro em uma string.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fread -> fclose
        $jsonProdutos = file_get_contents("Produtos.json");
        // json_decode(), transforma um JSON em um objeto contendo um array associativo.
        $produtos = json_decode($jsonProdutos, true);
        
        //este comando "entra" dentro do Produtos definido no Json
        // $produtos = $produtos["Produtos"];

        $itensProdutos = is_array($produtos['Produtos'])?count($produtos['Produtos']):0;
        $chave = $itensProdutos + 1;

        $novoProduto = ["id"=>"produto$chave","nomeProduto"=>$nomeProduto, "categoriaProduto"=>$categoriaProduto, "descricaoProduto"=>$descricaoProduto, "qtdeProduto"=>$qtdeProduto, "precoProduto"=>$precoProduto, "imagemProduto"=>$imagemProduto];
        
        $produtos["Produtos"][]=$novoProduto;
        
        //json_encode(), é utilizada para gerar um JSON.
        $jsonProdutos = json_encode($produtos);

        //A função file_put_contents() é utilizada para gravar dados em um arquivo.
        // Funciona como uma espécie de de atalho se comparado a sequência
        // de comandos: fopen -> fwrite -> fclose
        file_put_contents('Produtos.json', $jsonProdutos);

        return true;
    }

    function deleteProduto($id){
        echo "<pre>";
        echo "função = ".$id."<br><br>";
        
        $jsonProdutos = file_get_contents("Produtos.json");
        echo "jsonProdutos = ".$jsonProdutos."<br><br>";

        // json_decode(), transforma um JSON em um objeto contendo um array associativo.
        $produtos = json_decode($jsonProdutos, true);
        // echo "....produtos = ".var_dump($produtos)."<br><br>";
        
        $input = $produtos["Produtos"];
        $key = array_search($id, array_column($input, 'id'));
        // array_key_exists('first', $search_array);
        var_dump($input);
        var_dump($key);
        var_dump($input[$key]);
        unset($input[$key]);
        $produtos['Produtos'] = $input;
        //json_encode(), é utilizada para gerar um JSON.
        $jsonProdutos = json_encode($produtos);

        file_put_contents('Produtos.json', $jsonProdutos);
        
        return true;
    }