<?php
function debug($value)
{

  echo '<pre>';
  var_dump($value);
  echo '</pre>';

}

//debug($_POST);
$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
$email = isset( $_POST['email'] ) ? $_POST['email'] : '';
$message = isset( $_POST['message'] ) ? $_POST['message'] : '';

echo "Hola {$name},
 tu correo es {$email}, 
 tu mensaje es {$message}";