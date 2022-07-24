<?php
session_start();
echo('<h3>Livros cadastrados:<\h3>');
foreach($_SESSION['Livro'] as $val){
  $oLivro = json_decode($val);
  echo($oLivro);
  echo('<br>');
}
echo('foi');
?>
