
<?php

 
 if(isset($_POST['btlogin']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        include_once('index.php');

        $email = $_POST ['email'];
        $senha = $_POST ['senha'];
        $razao = $_POST['razaos'];

        $sql = "SELECT * FROM usuarios WHERE email = ('$email') and senha = ('$senha')";

        

        $result = $conexao->query($sql);

   
        

        
  
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
           <div class="col-sm">
            
            <form class="fazer-login" action="pagina-usuario.php"  method="POST">
                <div><h2>Seja Bem-Vindo</h2></div>
               
                <div class="email">
                    <input type="email" name="email" id="emaillogin" placeholder="Email"  aria-describedby="emailHelp">
                </div>
                
                <div class="senha">
                    <input type="password"  name = "senha" id="senhalogin"  placeholder="Insira sua senha">
                </div>

                <div class="login">
                    <button type="submit" name="btlogin" class="btn btn-outline-dark " id="botaologin">Login</button>
                </div>
            </form>          
                     
          </div>

          <div class="col-7">

            <form class="criar-perfil" action="pagina-cadastro.php" method="post">
                <h2>Crie sua conta</h2>

                <div class="nome">
                  <input type="text" placeholder="Nome Completo / Razão Social"  id="nomecadastro">
                </div>
      
                <div class="cpf">
                   <input type="cpf" class="cpf-mask" placeholder="CPF / CNPJ" >
                </div>

                <div class="iestadual">
                  <input type="text"  placeholder="Inscrição Estadual">
                </div>
      
                <div class="email">
                    <input type="email"  placeholder="Email" aria-describedby="emailHelp" >
                </div>
      
                <div class="senha">
                  <input type="password"  placeholder="Insira uma senha" >
                </div>
      
                <div class="cadastrar">
                  <button type="submit" class="btn btn-outline-dark " id="botaocadastro"  onclick="acesso()">Cadastre-se</button>
                </div>
               
            </form>

          </div>
        </div>
    </div>


    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>