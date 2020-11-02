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
        <meta charset=""UTF-8>
        <title> Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <script src="./JS/funcoes.js"></script>
    </head>
    <body>
      <!--Inicio do menu-->
      <?php 
        include ('menu.html');
     ?>
    <!--fim do menu-->
        <main> 
            <header>
                <h2> Contato </h2>
            </header>
            <hr>
            <section>
            <div class="contato">
                <img src="./IMAGENS/email.png" alt="Email" width="100px"><br><br>
                contato@fullstackeletro.com.br
            </div>
            <div class="contato">
                <img src="./IMAGENS/whatsapp.png" alt="WhatsApp" width="150px"><br><br>
                (11) 94786-0000
            </div>
            </section>
            <section class="msg">
                <form method="post" action="">
                    <p>Dúvidas, Sugestões e Elogios</p>
                    <h4>Nome:</h4>
                    <input type="text" name="nome" style="width:400px;">
                    <h4>Mensagem:</h4>
                    <textarea name="msg" style="width:400px;" placeholder="Digite sua mensagem aqui..."></textarea><br>
                    <input type="submit" value="Enviar" onclick="alerta()">
                </form>
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