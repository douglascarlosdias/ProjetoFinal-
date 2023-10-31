<?php

require_once __DIR__ . '/../../src/dao/produtodao.php';


# cria a variavel $id com valor igual a 1. 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? 0;

# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new ProdutoDAO();
$produtos = $dao->getById($id);

if (!$produtos) {
    header('location: index.php?error=Perfil não encontrado!');
    exit;
}
?>
<main>
<link rel="stylesheet" href="css/list_format.css">
<div class="list_container">
        <h1>Alterar cadastro</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?= ($produtos['id'] ?? '') ?>">
            <label>Nome:</label><br>
            <input type="text" name="nome" placeholder="Informe seu nome" size="80" required value="<?= htmlspecialchars($produtos['nome'] ?? '') ?>"><br>
            <label>Descrição:</label><br>
            <input type="text" name="descricao" placeholder="Informe a descrição" size="80" required value="<?= htmlspecialchars($produtos['descricao'] ?? '') ?>"><br>

            <br>
            <button class="btn" type="submit">Salvar</button>
            </div>

        </form>
    </main>';
