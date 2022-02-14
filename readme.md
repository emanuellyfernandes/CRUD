# login_page
 Página de cadastro e login



     /* <?php

        //verificar se clicou no botao
        if (isset($_POST['razao'])){

            $razao = addslashes($_POST['razaos']);
            $cpf = addslashes($_post['cpf']);
            $email = addslashes($_post['email']);
            $senha = addslashes($_post['senha']);

            //verificar se está ´preenchido

            if(!empty($razao) && !empty($cpf) && !empty($email) && !empty($senha)){

                $u->conectar("login_page", "localhost", "root", "miguel0501");
                
                if($u->msgErro ** ""){ // se está tudo certo
                    
                    if ($u-> cadastrar($razao,$cpf,$email,$login)){

                        echo "Cadastrado com sucesso";

                    }else{
                        echo "email ja cadastrado";
                    }
                
                }else{
                    
                    echo "Erro: ".$u->msgErro;
                }

           
            }else{

                echo "Preencha todos os campos!";

            }



        }
    
        
        ?>



        //<?php

class usuario{

  private $pdo;
  public $msgErro = "";

  public function conectar($email, $host,$senha ){

            global $pdo;
            global $msgErro;

            try {
            $pdo= new PDO("mysql:dbname:".$email.";host=".$host,$email,$senha);
            } catch (PDOExcepion $e) {
            $msgErro = $e -> getMessage();
            }
            


  }

  public function cadastrar($razao, $cnpj,$email,$senha){

        global $pdo;
        global $msgErro;

            //verificar se já existe um email
            
            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios
                        WHERE email = :e");
                    $sql ->bindValue(":e",$email);
                    $sql ->execute();
                    if($sql->rowCount() >0)
                    {
                        return false; // ja está cadastrado
                    }
                    else
                    {
                        //caso nao, cadastrar

                        $sql = $pdo->prepare("INSERT INTO usuarios(razao,cnpj,email,senha) VALUES (:r,:c,:e,:s)");
                        
                        $sql -> bindValue(":r",$razao);
                        $sql -> bindValue(":c",$cnpj);
                        $sql -> bindValue(":e",$email);
                        $sql -> bindValue(":s",md5 ($senha));
                        $sql -> execute();
                        return true;


                    }

            //caso não, cadastrar
  }


public function logar($email,$senha){

  global $pdo;
  global $msgErro;

        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado[''];
            return true;

        }
        else
        {
            return false;

        }

}

}

?>