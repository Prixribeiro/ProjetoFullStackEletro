<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset=""UTF-8>
        <title> Nossas Lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600&display=swap" rel="stylesheet">    
    </head>
    <body>
        <!--Inicio do menu-->
     <!--Inicio do menu-->
     <?php 
        include ('menu.html');
     ?>
    <!--fim do menu-->
        <main>
            <header>
                <h2 class="container container-fluid text-center">Nossas Lojas</h2>
            </header>
            <hr>
            <section class="container">
                <div class="row">    
                        <h3 class="col text-danger">São Paulo </h3> 
                        <p class="col text-body">Avenida Paulista, 287</p>
                        <p class="col text-body">12 &ordm; andar</p>
                        <p class="col text-body">Bela Vista</p>
                        <p class="col text-body">(11) 4781-0000</p>
                </div>
                <div class="row"> 
                        <h3 class="col text-danger">Rio de Janeiro</h3> 
                        <p class="col text-body">Avenida Presidente Vargas, 5000</p>
                        <p class="col text-body">10 &ordm; andar</p>
                        <p class="col text-body">Centro</p>
                        <p class="col text-body">(21) 3344-0000</p>
                </div>
                <div class="row"> 
                        <h3 class="col text-danger">Porto Alegre</h3> 
                        <p class="col text-body">Avenida Brasil, 400</p>
                        <p class="col text-body">5 &ordm; andar</p>
                        <p class="col text-body">Centro</p>
                        <p class="col text-body">(51) 2222-0000</p>
                </div>
            </section>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>

            <hr>
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