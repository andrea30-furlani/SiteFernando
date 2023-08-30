<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>


<body>

<div id="container">
    <div id="menu">
     <h1>Tecnologia e Informação</h1>
    </div>


    <div class="nav-bar">
      <a href="index.php" class="active">Home</a>
      <a href="if.php"><i class="fa fa-fw fa-home"></i>If</a>
      <a href="for.php"><i class="fa fa-search"></i>For</a>
      <a href="while.php"><i class="fa fa-envelope"></i>While</a>
      <a href="function.php"><i class="fa fa-globe"></i>Function</a>
      <a href="variavel.php"><i class="fa fa-trash"></i>Variavel</a>
    </div>

   
    <div id="conteudo"> -->
    <?php include "cabecalho.php"; ?>
      
      <div class="p">
          <h1>Bem vindo ao meu site!</h1>
        <p>Instruções condicionais são usadas para executar ações diferentes com base em condições diferentes.
        Declarações Condicionais PHP
        Muitas vezes, quando você escreve código, deseja executar diferentes ações para diferentes condições. 
        Você pode usar instruções condicionais em seu código para fazer isso.
        Em PHP, temos as seguintes declarações condicionais:
        ifdeclaração - executa algum código se uma condição for verdadeira
        if...elsedeclaração - executa algum código se uma condição for verdadeira e outro código se essa condição for falsa
        if...elseif...elseinstrução - executa códigos diferentes para mais de duas condições
        switchdeclaração - seleciona um dos muitos blocos de código a serem executados</p>
        </div>
      
    
        <div class="responsive">
          <div class="galeria">
            <a target="_blank" href="galeria/2.png">
              <img src="galeria/2.png" alt="Cinque Terre">
            </a>
            <p class="desc">Add a description of the image herea aaaaaa</p>
          </div>
          <div class="galeria">
            <a target="_blank" href="galeria/3.png">
               <img src="galeria/3.png" alt="Cinque Terre">
            </a>
            <p class="desc">Add a description of the image here</p>
          </div>
          <div class="galeria">
            <a target="_blank" href="galeria/4.png">
               <img src="galeria/4.png" alt="Cinque Terre">
            </a>
            <p class="desc">Add a description of the image here</p>
          </div>
          
        </div>
      </div>
    </div>


    <?php include "rodape.php"; ?>