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
                <form>
                    <p>Dúvidas, Sugestões e Elogios</p>
                    <h4>Nome:</h4>
                    <input type="text" style="width:400px;">
                    <h4>Mensagem:</h4>
                    <textarea style="width:400px;" placeholder="Digite sua mensagem aqui..."></textarea><br>
                    <input type="submit" value="Enviar" onclick="alerta()">
                </form>
            </section>
            <br><br><br><br>
            <br><br><br><br>
        </main>  
        <hr>
        <footer>
            <div id="pgto">
                <p>Formas de Pagamento </p>
                <img src="IMG_0678.jpg" alt="Formas de pagamento" height="80px" width="400px">
                <p id="rodape">&copy; Recode Pro</p>
            </div>
        </footer>

    </body>
</html>