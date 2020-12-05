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
                <h2 class= "container container-fluid text-center">Produtos</h2>
                <hr>
                <div class="categorias">
                    <ul>
                        <li class="nav-item dropdown text-center"></li>
                            <a class= "nav-link dropdown-toggle text-white border-danger bg-danger" href="#" id="navardrop_categoria" data-toggle="dropdown">Categorias</a>
                        <div class="dropdown-menu navbar-expand-lg">
                            <li class="dropdown-item" onclick="exibir_todos()">Todos (12)</li>
                            <li class="dropdown-item" onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                            <li class="dropdown-item" onclick="exibir_categoria('fogao')">Fogões (2)</li>
                            <li class="dropdown-item" onclick="exibir_categoria('microondas')">Microondas (3)</li>
                            <li class="dropdown-item" onclick="exibir_categoria('lavaroupas')">Máquina de Lavar (2)</li>
                            <li class="dropdown-item" onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
                        </div>
                    </ul>
                </div>  
            
        </header>
        
        <br><br><br><br><br><br><br><br>

        <?php 
            $sql = "select * from produto";
            $result = $conn->query($sql);

            if ($result ->num_rows > 0) {
            while ($rows = $result->fetch_assoc()){
        ?>
        
            <div class="box_produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block">
                <div class="card bg-white ml-5" style="width: 15rem; height: 30rem">
                    <img src="<?php echo $rows["imagem"]; ?>"class="justify-content-center" alt="<?php echo $rows["imagem"]; ?>" width="150px" onclick="destaque(this)">
                    <div class="card-body text-center">
                        <p class="card-text font-weight-bold " style="font-size: 0.8rem;"><?php echo $rows["descricao"]; ?></p>
                        <h6 class="card-title" style="text-decoration: line-through;">R$ <?php echo $rows["precoantigo"]; ?></h6>
                        <h5 class="card-title text-danger font-weight-bold">R$ <?php echo $rows["precoatual"]; ?></h5>
                        <button class="btn btn-outline-danger bg-danger text-white" onclick= "msg_compra()"> Adicionar ao carrinho </button>
                        <br>
                    </div>
                </div>
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