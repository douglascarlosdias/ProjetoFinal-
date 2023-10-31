<?php
header('Content-Type: text/html; charset=utf-8;');

require_once __DIR__ . '/../src/dao/produtodao.php';


# recebe os valores enviados do formulário via método post.
$nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
$descricao = trim(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS));
$nota = trim(filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_SPECIAL_CHARS));
$valor = trim(filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS));

$dao = new ProdutoDAO();
$result = $dao->save($nome,$descricao,$nota,$valor);


if ($result) {
    header('location: index.php?msg=Cadastro atualizado com sucesso!');
} else {
    header('location: index.php?error=Não foi possível atualizar o cadastro!');
}