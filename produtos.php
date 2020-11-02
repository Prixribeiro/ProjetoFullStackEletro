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
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=""UTF-8>
        <title> Produtos - Full Stack Eletro</title>
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
            <h2>Produtos</h2>
        </header>
        <hr>
     <!--INICIO PRODUTOS-->
        <div class="categorias">
            <h3>Categorias</h3>
                <ul>
                    <li onclick="exibir_todos()">Todos (12)</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                    <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                    <li onclick="exibir_categoria('lavaroupas')">Máquina de Lavar (2)</li>
                    <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
                </ul>
        </div>  
            <br> <br> <br>
            <br><br><br>
            <div class="produtos">

            <?php 
                $sql = "select * from produto";
                $result = $conn->query($sql);

                if ($result ->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()){
            ?>
            
                <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block;">
                    <img src="<?php echo $rows["imagem"]; ?>" alt="Geladeira Brastemp Frost Free 540 litros" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php echo $rows["descricao"]; ?> </p>
                    <hr>
                    <strike> R$ <?php echo $rows["precoantigo"]; ?></strike>
                    <br>
                    <p class="valor_atual">R$ <?php echo $rows["precoatual"]; ?></p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

            <?php
                }
            } else {
                echo "Nenhum produto cadastrado." ;
            }
            ?>
    
            <!--FIM PRODUTOS-->
            <br> <br> <br>
            <br> <br> <br>
        </main> 
        <footer>
            <div id="pgto">
                <p>Formas de Pagamento </p>
                <img src="IMG_0678.jpg" alt="Formas de pagamento" height="80px" width="400px">
                <p id="rodape">&copy; Recode Pro</p>
            </div>
        </footer>
    
    </body>
</html>