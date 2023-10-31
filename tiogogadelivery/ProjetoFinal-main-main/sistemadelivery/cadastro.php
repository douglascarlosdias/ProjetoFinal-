
<?php
header('Content-Type: text/html; charset=utf-8;');

include_once ("src/conexao.php");

# recebe os valores enviados do formulário via método post.
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha =md5($_POST['senha']);
$nivel = "cliente";

# solicita a conexão com o banco de dados e guarda na váriavel dbh.
$dbh = Conexao::getConexao();

# cria uma instrução SQL para inserir dados na tabela usuarios.
$query = "INSERT INTO tiogogadelivery.usuarios (nome, cpf, telefone, email, senha, nivel) 
                VALUES (:nome, :cpf, :telefone, :email, :senha, :nivel);";

 #prepara a execução da query e retorna para uma variável chamada stmt.
 $stmt = $dbh->prepare($query);

# com a variável stmt, usada bindParam para associar a cada um dos parâmetro
# e seu tipo (opcional).
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':nivel', $nivel);



# executa a instrução contida em stmt e se tudo der certo retorna uma valor maior que zero.
$result = $stmt->execute();
if ($result) {
    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
    echo "<script language='javascript'>window.location='login.php'; </script>";
} else {
    echo '<p>Não foi fossível inserir Usuário!</p>';
   

    # método da classe conexao que informa o error ocorrido na execução da query.
    $error = $dbh->errorInfo();
    print_r($error);
}
$dbh = null;
?>