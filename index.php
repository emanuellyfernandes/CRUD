<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'login_page';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword, $dbName);

/*if($usuarios ->connect_errno)
{
  echo"erro";
}
else
{
 echo"conexao efetuada com sucesso";
}
*/

?>