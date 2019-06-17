<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>
<div id="site">
    <div id="conteudo">
        <div id="conteudo-left">
            <table class="table">
                <h4>Todos os produtos</h4>
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    if ($produtos){
                    foreach ($produtos as $chave=>$produto): ?>
                        <tr>
                            <th scope="row"><?php echo $produto["nomeProduto"];?></th>
                            <td><?php echo $produto["categoriaProduto"];?></td>
                            <td><?php echo $produto["precoProduto"];?></td>
                            <td><a href="produto.php?id=<?=$produto["id"];?>"<i class="fa fa-edit"></i></a></td>
                            <td><a href="deletarProduto.php?id=<?=$produto["id"];?>"<i class="fa fa-trash"></i></a></td>
                        </tr>
                    <?php endforeach;
                    } ?>
                </tbody>
            </table>
        </div>

        <!-- <div id="conteudo-center">aaa</div> -->

        <div id="conteudo-right">
            <form id="formulario" action="salvarProduto.php" method="post" enctype="multipart/form-data">
            <h6>Cadastrar Produto</h6>                    
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" id="nomeProduto" placeholder="digite o nome do produto" name="nomeProduto">
            </div>
            <div class="form-group">
                <label for="categoriaProduto">Categoria do Produto</label>
                <select name="categoriaProduto" class="form-control" id="categoriaProduto">
                    <option selected disabled>Selecione a Categoria</option>
                    <option value="camiseta">Camiseta</option>
                    <option value="bone">Boné</option>
                    <option value="blusa">Blusa</option>                    
                </select>
            </div>
            <div class="form-group">
                <label for="descricaoProduto">Descrição Completa</label>
                <textarea class="form-control" name="descricaoProduto" id="descricaoProduto" cols="30" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="qtdeProduto">Qtde do Produto</label>
                <input type="text" class="form-control" id="qtdeProduto" placeholder="digite a qtde do produto" name="qtdeProduto">
            </div>
            <div class="form-group">
                <label for="precoProduto">Preço</label>
                <input type="number" step="any" class="form-control" id="precoProduto" placeholder="digite o preço do produto" name="precoProduto">
            </div>
            <div class="form-group">
                <label for="imagemProduto">Foto do Produto</label>
                <input type="file" name="arquivo" id="imagemProduto">
            </div>

            <button class="btn btn-success" type="submit">Finalizar cadastro</button>
                
            </form>
        </div>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>