<?php
//Conectar com o Banco de Dados
$servername = "localhost";
$username = "root";
$password = "root"; //substitua pela sua senha
$dbname = "cadastro_db";
 
//Criar a conexão
$conn = new mysqli($servername,$username,$password,$dbname);
 
//Verificar a conexão
if($conn -> connect_error){
    die("Falha na conexão: " . $conn -> connect_error);
}
 
//verifica se o formulário foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Obtem os dados do formulário e faz a sanitização
    $nome = $conn -> real_escape_string($_POST['nome']);
    $email = $conn -> real_escape_string($_POST['email']);
    $senha = password_hash($_POST['senha'],PASSWORD_BCRYPT);//criptografando a senha
 
    //SQL para inserir informações do usuário
    $sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome','$email','$senha')";
 
    //Executar uma consulta para verificar se os dados do usuário foi bem sucedido
    if($conn ->query($sql) == TRUE){
        echo "Usuáro cadastrado com sucesso!!!";
    }else{
        echo "Erro ao cadastrar usuário" . $conn->error;
    }
}
 
//Fecha a conexão
$conn->close();
?>