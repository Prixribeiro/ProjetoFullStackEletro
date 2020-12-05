<?php 
    $servername = 'localhost';
    $username = 'root' ;
    $password = 'root' ;
    $database = 'fullstackeletro';
     
    //criando a conexão
    $conn = mysqli_connect ($servername, $username, $password, $database);

    // verificando conexão
    if (!$conn){
        die ("A conexão ao BD falhou: " .mysqli_connect_error());
    }

    if (isset($_POST['nome'])&&isset($_POST['msg'])){
        $nome=$_POST['nome'];
        $msg=$_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="./JS/funcoes.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600&display=swap" rel="stylesheet">    
    </head>
    <body>
      <!--Inicio do menu-->
      <?php 
        include ('menu.html');
     ?>
    <!--fim do menu-->
        <main> 
            <header>
                <h2 class= "container container-fluid text-center"> Contato </h2>
            </header>
            <hr>
            <section class="container text-center">
            <div class="contato">
                <img src="./IMAGENS/email.png" alt="Email" width="100px"><br><br>
                contato@fullstackeletro.com.br
            </div>
            <div class="contato">
                <img src="./IMAGENS/whatsapp.png" alt="WhatsApp" width="150px"><br><br>
                (11) 94786-0000
            </div>
            </section>
            <section class="container text-center">
                <div class="form-group-sm">
                    <form method="post" action="#">
                        <h2 class="row-center text-danger ">Dúvidas, Sugestões e Elogios</h2><br>
                        <h5 class="row-sm-center">Nome:</h5>
                        <input class="form-control-center" type="text" name="nome" style="width:400px;"> <br>
                        <h5 class="row-sm-center">Mensagem:</h5>
                        <textarea class="form-control-center" name="msg" style="width:400px;" placeholder="Digite sua mensagem aqui..."></textarea><br>
                        <input class="btn-outline-dark bg-sucess btn-lg text-dark" type="submit" value="Enviar" onclick="alerta()">
                        <input class="btn-outline-dark bg-danger btn-lg text-white justify-content-end" type="submit" value="Reset">
                    </form>
                </div>
                <br><br><br>
            </section>

                <?php 
                    $sql= "select * from comentarios";
                    $result = $conn->query($sql);

                    if ($result->num_rows < 0){
                        while ($rows = $result = fetch_assoc()){
                            echo "Nome: ", $rows['nome'], "<br>";
                            echo "Comentário: ", $rows['msg'], "<br>";
                            echo "Recebido em: ", $rows['recebido_em'], "<br>";
                            echo "<hr>";
                        }
                    }else {
                        echo "Nenhum comentário ainda.";
                    }
                ?>
            
        </main>  
        <hr>
        <br><br><br><br>
        <footer>
            <div id="pgto">
                <p>Formas de Pagamento </p>
                <img src="IMG_0678.jpg" alt="Formas de pagamento" height="80px" width="400px">
                <p id="rodape">&copy; Recode Pro</p>
            </div>
        </footer>

    </body>
</html>