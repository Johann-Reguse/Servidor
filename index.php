<?php
   session_start();
   //$_SESSION['livro'][]=header();
//Inserir livros
   if (isset ($_POST['nomeAutor'])){
            $_SESSION['Livro'][] = json_encode($_POST);
            echo ('<h3>Livro Inserido</h3>');
   }
//Limpar cache
   if (isset($_POST['limpar'])){
      $_SESSION['Livro'] = [];   
   }
//Mostrar os livros
   if (isset($_POST['mostrar'])){

      header('Location: https://trab3.herokuapp.com/mostrar.php');
   
   }
//Mostrar um livro específico
   if (isset($_POST['MostrarTudo'])){
      $_SESSION['LivroEspecifico'] = $_POST['LivroEspecifico'];
      //header( #ADICIONAR CAMINHO PARA O MOSTRAR ESPECÍFICO);
   }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>pagina de requisição GET e POST</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="nomeAutor" placeholder="Nome autor">
            <br>
            <input type="text" name="sobrenome" placeholder="Sobrenome autor">
            <br>
            <input type="text" name="titulo" placeholder="Título do livro">
            <br>
            <input type="text" name="editora" placeholder="Editora">
            <br>
            <input type="text" name="cidade" placeholder="Cidade da publicação">
            <br>
            <input type="text" name="ano" placeholder="Ano da publicação">
            <br>
            <input type="text" name="paginas" placeholder="Quantidade de páginas">
            <br>
            <input type="text" name="isbn" placeholder="ISBN">
            <br>
            <input type="text" name="assuntos" placeholder="Assuntos abordados no livro">
            <br>
            <input type="submit" value="Inserir Livro">
        </form>
        <form method="post">
            Preencher para mostrar <br>
            Livro específico:(código) <br>
            <input type="text" name="LivroEspecifico"><br><br>
            <input type="submit" name="mostrar" value="Mostrar Livros">
            <br><br>
            <input type="submit" name="MostrarTudo" Value="Mostrar tudo">
           
         </form>
         <br>
         <form method="post">
            <input type="submit" name="limpar" value="limpar cache">
         </form><br>
    </body>    
</html>
