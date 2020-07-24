<?php


function validarNome($nome) : bool
 {
    if(empty($nome)) {
        $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio. Por favor, preencha-o novamente!';
        return false;
      }
      elseif (strlen($nome) < 3) {
        echo "O nome não pode conter menos de 3 caracteres!";
        
        $_SESSION['mensagem de erro'] = 'O nome não pode conter menos de 3 caracteres!';
        return false;
      }
      elseif (strlen($nome) >40) {
        $_SESSION['mensagem de erro'] = 'O nome não pode conter mais de 40 caracteres!';
        return false;
      }
      return true;
}
function validarIdade($idade) : bool
{
    if (!is_numeric($idade)) {
      $_SESSION['mensagem de erro'] = 'Informe números para a idade';
      return false;
    }
    return true;

}



?>