
 <?php
session_start();
if(isset($_POST['cadastro']))
{
    //print_r('Razão Social: '.$_POST['razaos']);
    //print_r('<br>');
    //print_r('CNPJ: '.$_POST['cpf']);
    //print_r('<br>');
    //print_r('EMAIL: '.$_POST['email']);
    //rint_r('<br>');

    include_once('index.php');
    
    $razao = $_POST['razaos'];
    $cnpj = $_POST['cpf'];
    $email = $_POST['email'];
    $senha =$_POST['senha'];

    $result = mysqli_query($conexao,"INSERT INTO usuarios(razao, cnpj, email, senha) VALUES ('$razao', '$cnpj', '$email',' $senha')");
};

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Página Restrita</title>
</head>


<body class="boddy">


    
    
        <div class="container-fluid dados">

            <div class="bloco">
                <br><br><h2><u>Dados do Usuário</u></h2> <br>

               <h5> Razão Social</h5>
                <?php echo "<p><br>$razao</p>"  ?>
                <h5> CNPJ</h5>

                <?php echo "<p><br>$cnpj</p>"  ?>

                <h5>Email</h5>
                <?php echo "<p><br>$email</p>"  ?>
                  

            </div>

        </div>


   


    
    <script src="js/teste.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>