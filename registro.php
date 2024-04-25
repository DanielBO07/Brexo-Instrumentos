<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Registro</title>
  <link rel="stylesheet" href="estilo/styleLogin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Galada&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<?php include"cabecalho.inc";?>
  <form action="" class="form2">
    <h1>Registro</h1>
    <input type="name" name="nome" class="boxreg" placeholder="Nome">
    <input type="name" name="Sobrenome" class="boxreg" placeholder="Sobrenome">
    <input type="email" name="email" class="boxreg" placeholder="Email">
    <input type="password" name="Password" class="boxreg" placeholder="Criar Senha">
    <input type="submit" value="Criar conta"> 
    <a href="index.php">Página inicial</a>
  </form>
  <?php include"rodape.inc";?>
</body>
</html>