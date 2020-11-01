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
            
                <div class="box_produto" id="geladeira" style="display: inline-flexbox;">
                    <img src="./IMAGENS/geladeira-brastemp-2postas.jpeg" alt="Geladeira Brastemp Frost Free 540 litros" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Geladeira Brastemp Frost Free 2 portas 540 litros </p>
                    <hr>
                    <strike> R$ 6.389,00</strike>
                    <br>
                    <p class="valor_atual">R$ 5.019,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>
        
                <div class="box_produto" id="geladeira" style="display: inline-block;">
                    <img src="./IMAGENS/geladeirasamsung.jpeg" alt="Geladeira Samsung Black Inox 400 litros" width="150px" onclick="destaque(this)">
                    <br>
                   <p class="descricao"> Geladeira Samsung Black Inox 400 litros </p>
                    <hr>
                   <strike> R$ 5.389,00</strike>
                    <br>
                    <p class="valor_atual">R$ 4.389,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="geladeira" style="display: inline-block;">
                    <img src="./IMAGENS/geladeira-inox.jpeg" alt="Geladeira Frost Free Electrolux 433 litros" width="150px" onclick="destaque(this)">
                    <br>
                   <p class="descricao">Geladeira Frost Free Electrolux 433 litros</p>
                    <hr>
                    <strike> R$ 5.089,00</strike>
                    <br>
                    <p class="valor_atual"> R$ 4.830,00 </p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="fogao" style="display: inline-block;">
                    <img src="./IMAGENS/fogaoeletrolux.jpeg" alt="Fogão Electrolux 4 bocas" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Fogão Electrolux 4 bocas</p>
                    <hr>
                    <strike> R$ 689,00</strike>
                    <br>
                    <p class="valor_atual">R$ 530,00</p> 
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="fogao" style="display: inline-block;">
                    <img src="./IMAGENS/fogao-brastemp.png" alt="Fogão Brastemp Grill Inox 6 bocas" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Fogão Brastemp Grill Inox 4 bocas</p>
                    <hr>
                    <strike> R$ 729,00</strike>
                    <br>
                    <p class="valor_atual">R$ 670,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="lavaloucas" style="display: inline-block;">
                    <img src="./IMAGENS/lavalouca-eletrolux.jpeg" alt="Lava Louças Eletrolux" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Lava Louças Eletrolux 4 funções</p>
                    <hr>
                    <strike> R$ 1.729,00</strike>
                    <br>
                    <p class="valor_atual">R$ 1.670,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="lavaroupas" style="display: inline-block;">
                    <img src="./IMAGENS/maquinadelavar.jpeg" alt="Lava Roupas Brastemp 15kg" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Lava Roupas Brastemp 15kg</p>
                    <hr>
                    <strike> R$ 1.729,00</strike>
                    <br>
                    <p class="valor_atual">R$ 1.430,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="lavaroupas" style="display: inline-block;">
                    <img src="./IMAGENS/lavadora-panasonic.png" alt="Lava & Seca Panasonic 15kg" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Lava & Seca Panasonic 15kg</p>
                    <hr>
                    <strike> R$ 3.729,00</strike>
                    <br>
                    <p class="valor_atual">R$ 3.130,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="microondas" style="display: inline-block;">
                    <img src="./IMAGENS/microondas-panasonic.jpg" alt="Microondas Panasonic" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Microondas Panasonic Inox com função Grill</p>
                    <hr>
                    <strike> R$ 789,00</strike>
                    <br>
                    <p class="valor_atual"> R$ 630,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="microondas" style="display: inline-block;">
                    <img src="./IMAGENS/microondas-philco.png" alt="Microondas Philco" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Microondas Philco Vidro Espelhado</p>
                    <hr>
                    <strike> R$ 989,00</strike>
                    <br>
                    <p class="valor_atual">R$ 730,00 </p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="microondas" style="display: inline-block;">
                    <img src="./IMAGENS/microondas_panasonic_preto.jpeg" alt="Microondas Panasonic Preto" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Microondas Panasonic Preto Vidro Temperado</p>
                    <hr>
                    <strike> R$ 689,00</strike>
                    <br>
                    <p class="valor_atual">R$ 590,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>

                <div class="box_produto" id="lavaloucas" style="display: inline-block;">
                    <img src="./IMAGENS/lava-louca-electrolux-14 servicos.jpeg" alt="Lava Louça Electrolux 14 serviços" width="150px" onclick="destaque(this)">
                    <br>
                    <p class="descricao">Lava Louça Electrolux 14 serviços</p>
                    <hr>
                    <strike> R$ 4.349,00</strike>
                    <br>
                    <p class="valor_atual">R$ 4.000,00</p>
                    <br>
                    <button onclick= "msg_compra()"> Adicionar ao carrinho </button>
                    <br>
                </div>
            </div>
    
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