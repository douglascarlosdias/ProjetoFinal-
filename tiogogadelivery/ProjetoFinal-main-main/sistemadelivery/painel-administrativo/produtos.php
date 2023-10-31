<?php

$pagina = 'produtos.php';


?>

<div class="container">
    <nav class=" navbar navbar-expand navbar-white navbar-light">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Novo Produto</button>
       
        <div class="direita">
            <!-- SEARCH FORM -->
            <form class="form-inline ml-3 float-right">
                <div class="input-group input-group-sm" class="fundo-search">
                    <input class="fundo-search" class="form-control form-control-navbar" type="search" placeholder="pesquisar produto" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </nav>

    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Nota</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagem</th>


                </tr>
            </thead>
            
        </table>
    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" >Novo produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="form" method="post" enctype="multipart/form-data" action="create.php">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira o nome " name="nome" required>
                    </div>
                    <div class="form-group">


                        <label for="exampleFormControlInput1">Descrição</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Insira a descrição da categoria " name="descricao" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nota</label>
                        <input type="text" class="form-control" id="nome" placeholder="Insira a nota " name="nota" required>
                    </div>
                    <div class="form-group">


                        <label for="exampleFormControlInput1">Valor</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Insira o valor" name="valor" required>
                    </div>

                    <div align="center" id="mensagem" class="">

                    </div>

            </div>
            <div class="modal-footer">


                <button id="btn-fechar" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <button type="submit" name="salvar" id="salvar" class="btn btn-primary">salvar</button>

            </div>
            </form>
        </div>
    </div>
</div>

<!-- chamada do modal novo -->
<?php



?>