<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css" type="text/css">
        <script src="./JS/funcoes.js"></script>
    </head>

    <body>
     <!--Inicio do menu-->
     <?php 
        include ('menu.html');
     ?>
    <!--fim do menu-->
        <main>
         <h2> Seja Bem-vindx!</h2>
         <p>Aqui em nossa loja, <b>programadorxs tem desconto </b> nos produtos para sua casa!</p>  
         <hr>

         <p style="text-align: center;"><img src="./IMAGENS/full-stack-logo.png" alt="full-stack-logo" width="500px" onclick="ir_produtos()"></p>

         <br><br>
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