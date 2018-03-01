<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
//-----teste de conexão------

try{
  $conn = new PDO('mysql:host=localhost;dbname=seminarioteste','root','');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO  user (nome, email, senha, cpf, endereco, telefone)
   VALUES(:nome , :email , :senha , :cpf , :endereco , :telefone);";

   	$sql = $conn->prepare($sql);
  	$sql->bindValue(":nome", $nome);
  	$sql->bindValue(":email", $email);
  	$sql->bindValue(":senha", $senha);
  	$sql->bindValue(":cpf", $cpf);
    $sql->bindValue(":endereco", $endereco);
    $sql->bindValue(":telefone", $telefone);
  	$sql->execute();

echo ("Dados inseridos com sucesso");




}catch (PDOException $e){
  echo "ERRO: " . $e -> getMessage();
}

// inserindo dados na tabela


 ?>
