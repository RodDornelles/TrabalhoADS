<?php

    if(isset($_POST['submit']))
    {
       

      include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['tel'];
       $senha = $_POST['senha'];
       $data_nasc = $_POST['data_nascimento'];
       $genero = $_POST['gender'];
       $proeficiencia = $_POST['profeciency'];

       $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,senha,data_nasc,genero,prof) 
       VALUES ('$nome','$email','$telefone','$senha','$data_nasc','$genero','$proeficiencia')");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/style.css" media="all">
    
<title>Curso de PowerBi</title>
</head>
<body>   
    <div class="form">
    <h1>Cadastro para Curso de PowerBi</h1>
    <p>Preencha o cadastro abaixo para se inscrever no curso de PowerBi..</p>
    <form action="index.php" method="POST">
    <fieldset class="Primeira-parte">
      <legend>Contato</legend>
      <br>
      <label for="nome" class="inputUser">Nome:</label>
      <input type="text" name="nome" id="nome" class="inputUser" required> <br>
      <label for="email">Email:</label>
      <input type="email" name="email" id="iemail"> <br>
      <label for="tel">Fone:</label>
      <input type="tel" name="tel" id="itel" placeholder="(47)93323-2929" pattern="\(\d{2}\)\d{4,5}-\d{4}$" required> <br>
      <label for="isenha">Senha:</label>
      <input type="password" name="senha" id="isenha" required minlength="6" maxlength="8" autocomplete="new-password">  
    </fieldset>
    <br>
    <fieldset class="Segunda-parte">
        <legend>Informações pessoais</legend>
        <br>
        <label for="dob">Data Nascimento:</label>
        <input type="date" name="data_nascimento" id="dob"> <br>
          <label for="gender">Genero:</label>
        <input list="genders" name="gender" id="gender">
        <datalist id="genders">
          <option value="Masculino">
          <option value="Feminino">
          <option value="Outro">
          <option value="Prefiro não responder">
        </datalist><br>
       <div class="Proficiência">
        <label for="profeciency">Proficiência:</label>
        <input list="profeciencyes" name="profeciency" id="profeciency">
        <datalist id="profeciencyes">
          <option value="Sou expert e procuro formação">
          <option value="Tenho conhecimento mas quero aprender mais">
          <option value="Uso a ferramenta casualmente e quero aprender">
          <option value="Não tenho conhecimento da ferramenta">
        </datalist><br>
       </div>
       </fieldset>
       <div class="termos">
        <input type="checkbox" name="scales" id="scales" class="checkbox">
        <label for="scales">Eu concordo com os termos e condições de uso.</label>
     </div>  
     <input type="submit" name="submit" id="submit" value="Enviar">
    </form>  
</div>      
</body>
</html>