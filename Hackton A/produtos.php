<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Lojinha</title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>

    <div class="novoMenu">

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">

                <div class="logo">
                    <img src="assets/img/logo.png" alt="RaiodeEsperança" width="300px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->

                <!-- FIM   MENU NAVEGAÇÃO -->
                
                <a href="carrinho.php" title="">
                    <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">

                    </a>

                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!-- FIM NAVEGAÇÃO-->
            
        </div>
        <!-- FIM DO CONTEÚDO-->
        
    </div>


    <!-- INÍCIO PRODUTOS EM DESTAQUE-->
    <div class="corpo-categorias">

        <div class="linha linha2">
            <h2>Lojinha</h2>
           
        </div>


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->

        <div class="linha">

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/OIP1.png" alt="">

                <h4>Bolacha de Sal 10 pacotes</h4>
              
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                

                <p>R$ 13,00</p>
                <button class="btn" onclick="adicionarAoCarrinho('Bolacha de Sal 10 pacotes',13.00)">Adicionar ao Carrinho</button>

            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->


            
            <div class="col-4">
                <img src="assets/img/th.png" alt="">

                <h4>Kit Higiene</h4>
            
            
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>
                
                <p>R$ 14,99</p>
     
                <button class="btn" onclick="adicionarAoCarrinho('Kit Higiene', 14.99)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/cobertores.webp" alt="">

                <h4>Cobertores Uni</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50.00</p>
                <button class="btn" onclick="adicionarAoCarrinho('Cobertores', 50.00)">Adicionar ao Carrinho</button>


            </div>

            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->

            <div class="col-4">
                <img src="assets/img/roupa.png" alt="">

                <h4>Kit Moletom</h4>

                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 20,00</p>
                <button class="btn" onclick="adicionarAoCarrinho('Kit Moletom',20.00)">Adicionar ao Carrinho</button>


            </div>

            

            <div class="col-4">
                <img src="assets/img/meia.png" alt="">

                <h4>Kit meia cano curto</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 10,00</p>
                <button class="btn" onclick="adicionarAoCarrinho('Kit meia cano curto', 10.00)">Adicionar ao Carrinho</button>


            </div>


            <!-- FIM ITEM PRODUTO-->

            <!-- INÍCIO ITEM PRODUTO-->


            <!-- FIM ITEM PRODUTO-->

            <!-- FIM ITEM PRODUTO-->


        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->

    </div>
    <!-- FIM PRODUTOS EM DESTAQUE-->

    

    <!-- INÍCIO RODAPÉ-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">

                <div class="rodape-col-1">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="assets/img/google (1).png" alt="">
                        <img src="assets/img/apple (1).png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <img src="assets/img/logo-2.png" alt="">
                    <p>Venha conhecer nossa loja nas redes! </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons </li>
                        <li>Blog </li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>


                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook </li>
                        <li>Instagram </li>
                        <li>Youtube</li>
                        <li>Twiter</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. Raio de Esperança 2024.
            </p>

        </div>

    </footer>
    <!-- FIM RODAPÉ-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>

<script>
        
    function adicionarAoCarrinho(name, price) {
        const pedido = {
            nome: name,
            preco: price,
        };

        // Armazenar os dados do pedido em localStorage
        let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
        pedidos.push(pedido);
        localStorage.setItem('pedidos', JSON.stringify(pedidos));

        // Redirecionar para a página do carrinho
        window.location.href = 'carrinho.php';
    }
    </script>


</html>