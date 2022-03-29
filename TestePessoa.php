<?php
require_once("Pessoa.class.php"); //importando atributos do arquivo (classe pessoa) Pessoa.class.php 

  $pessoa = new Pessoa(); //instanciando o objeto pessoa
  $pessoa->setNome("Thainá Ferreira da Silva"); //setando um nome para a variável nome
  echo $pessoa->getNome(); //imprimindo o valor setado na variável pessoa

?>