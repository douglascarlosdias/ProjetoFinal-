<?php
header('Content-Type: text/html; charset=utf-8;');

require_once __DIR__ . '/../../src/dao/categoriadao.php';

# recebe os valores enviados do formulário via método post.
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$descricao = trim(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS));
# cria um objeto da classe PerfilDAO e chama método para realizar ação.
$dao = new CategoriaDAO();
$result = $dao->save($nome, $descricao);

if ($result) {
    header('location: index.php?msg=Categoria adicionado com sucesso!');
} else {
    header('location: index.php?error=Não foi possível adicionar o Categoria!');
}