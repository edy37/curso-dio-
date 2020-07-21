<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST["nome"];
$idade = $_POST["idade"];
//print_r($_POST);

if(empty($nome)) {
  $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio. Por favor, preencha-o novamente!';
  header('location: index.php');
  return;
}
elseif (strlen($nome) < 3) {
  echo "O nome não pode conter menos de 3 caracteres!";
  
  $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres!';
  header('location: index.php');
  return;
}
elseif (strlen($nome) >40) {
  $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres!';
  header('location: index.php');
  return;
}
elseif (!is_numeric($idade)) {
  $_SESSION['mensagem de erro'] = 'Informe números para a idade';
  header('location: index.php');
  return;
}

if($idade >=6 && $idade <=12)
{
  for($i =0; $i < count($categorias); $i++)
  {
      if($categorias[$i] == 'infantil')
              $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
              header('location: index.php');
              return;
    }
}
elseif($idade >=13 && $idade <=18)
{
  for($i =0; $i < count($categorias); $i++)
  {
      if ($categorias[$i] == 'adolescente') 
        $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
        header('location: index.php');
        return;
     }
}
else {
  for ($i =0; $i < count($categorias); $i++)
  {
    if ($categorias[$i] == 'adulto') 
    {
      $_SESSION['mensagem de erro'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
      header('location: index.php');
      return;
    }
  }
}


?>
