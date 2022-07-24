<?php
session_start();

foreach($_SESSION['Livro'] as $val){
  $oLivro = json_decode($val);
  echo($oLivro);
  echo('<br>');
}
echo('foi');
echo('<h3>Livros cadastrados:<\h3>');
?>
