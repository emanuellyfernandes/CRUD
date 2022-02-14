



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Cadastro Completo</title>
</head>
<body>

    
    

        <form class="container cadastro-completo" action="pagina-usuario.php"  method="POST">

          <div class="col colunas">

            <div class="coluna1 col">

                    <h5>Dados da empresa</h5><br>

                    <div class="col razao">
                        Razão Social<br>
                        <input type="text" id="razaosocial" name="razaos">
                    </div>

                    <div class="col cad-cpf">
                        CPF / CNPJ<br>
                        <input type="cpf" class="cpf-mask" id="cpfcadastro" name="cpf">
                    </div>
        

                    <div class="cad-email">
                        Email<br>
                        <input type="email" name="email" id="emailcadastro" placeholder=" example@hotmail.com" aria-describedby="emailHelp">
                    </div>

                    <div class="senha">
                        Senha<br>
                        <input type="password"  placeholder="Insira uma senha"  id="senhacadastro" name="senha">
                    </div>

            </div>

            <div class="coluna2 col">
                
                    <h5>Endereço</h5><br>
        
                    <div class="colum cad-end">
                        Rua<br>                      
                        <input type="text" id="rua">                                  
                        <input type="text" id="cad-num" placeholder="Número">
                    </div>
        
                    <div class="col cad-city" id="city">
                        Cidade<br>
                        <input type="text">
                    </div>

                    <div class="cad-es">
                         Estado<br>
                          <select>
                            <option selected>escolha</option>
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                          </select>
                    </div>

                    <div class="cad-cep" id="cep" >
                         Cep<br>
                        <input type="text" onclick = "consultaEndereco()" >
                    </div>
            </div>
          </div>

            <div class="col finalizarcad">
                <button type="submit" name="cadastro" class="btn btn-outline-dark botao" value="final" >Finalizar Cadastro</button>
            </div>

        </form>  

   
    



    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>