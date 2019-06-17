<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>
<div id="site">
    

    <div id="conteudo-produto">
        
        <p align="left"><button id="voltar"><a href="desafio.php">Voltar para Lista</button></a> </p>

        <?php 
        foreach ($produtos as $chave => $value) {
       
           if ($value["id"] == $_GET["id"]){
        ?>
        
        <div id="conteudo-produto-left">
            
            <img src="<?= $value["imagemProduto"];?>" alt="" width="400px" height="400px">
        </div>
        <div id="conteudo-produto-right">
            <h2><?= $value["nomeProduto"];?></h2>
            <h6>categoria</h6>
            <p><?= $value["categoriaProduto"];?></p>
            <h6>Descrição</h6>
            <p><?= $value["descricaoProduto"];?></p>
            <table width="500px">
                <tr>
                    <td><b>Qtde</b></td>                    
                    <td><b>Preço</b></td>                
                </tr>
                <tr>
                    <td><?= $value["qtdeProduto"];?></td>                    
                    <td>R$ <?= $value["precoProduto"];?></td>                
                </tr>
            </table>
        </div>
        <?php               
           }        
       }
       ?> 

        
    </div>
</div>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>