<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css" type="text/css">
        <script src="./JS/funcoes.js"></script>
        <!--links bootstrap-->
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
            <div class="jumbotron text-center bg-light">
                <h2 class="display-6"> Seja Bem-vindx!</h2>
                <hr class="my-4">
                <p class="lead">Aqui em nossa loja, <b>programadores tem desconto </b> nos produtos para sua casa!</p>  
            </div>

         <p style="text-align: center;"><img src="./IMAGENS/full-stack-logo.png" alt="full-stack-logo" width="500px"></p>

         <br><br>
        </main>
        
        <footer>
            <!-- carregar React component. -->
        <script src="rodape_react.js"></script>
        <div id="root"></div>
            <Rodape />
        </footer>

        <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
        <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script> 
        <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script> 

        
    </body>
</html>