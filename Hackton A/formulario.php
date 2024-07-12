<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Doação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="assets/img/imagelogo.png" type="image/x-icon">
    <style>
        .check-icon {
            color: green;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="banner">
    <div class="container2">
        <div class="navbar">
            <div class="logo">
                <img src="assets/img/logo.png" alt="RaiodeEsperança" width="200px">
            </div>
           
        </div>
    </div>
</div>

<!-- Título e ícone estilizado -->
<h1 class="titulo">
    Quero doar!
</h1>

<div class="titulo2">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
        <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path>
    </svg>
    Informe abaixo qual será o tipo da doação.
</div>

<div class="titulo2">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
        <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path>
    </svg>
    Aguarde o nosso contato com detalhes sobre como entregar sua doação em nosso posto de coleta, em São Paulo - SP.
</div>
<br>

<!-- Conteúdo do Formulário de Doação -->
<div class="container">
    <h2>Formulário de Doação</h2>

    <!-- Informações Pessoais -->
    <div class="divider">
        <h3>Informações Pessoais</h3>
        <form action="processa_doacao.php" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo*</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone*</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço*</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <!-- Seleção do Tipo de Doação -->
            <div class="form-group">
                <label for="tipo_doacao">Tipo de Doação*</label>
                <select class="form-control" id="tipo_doacao" name="tipo_doacao" required>
                    <option value="">Selecione o tipo de doação</option>
                    <option value="Roupas">Roupas</option>
                    <option value="Alimentos lacrados">Alimentos Lacrados</option>
                    <option value="Medicamentos">Medicamentos</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            
            <!-- Mensagem Opcional -->
            <div class="form-group">
                <label for="mensagem">Mensagem (opcional)</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar Doação</button>
        </form>
    </div>
</div>
<br>

<footer class="rodape">
    <div class="container">
        <div class="linha">
            <div class="rodape-col-1">
                <h3>Baixe o nosso aplicativo</h3>
                <p>Nas melhores plataformas</p>
                <div class="app-logo">
                    <img src="assets/img/google (1).png" alt="">
                    <img src="assets/img/apple (1).png" alt="">
                </div>
            </div>
            <div class="rodape-col-2">
                <img src="assets/img/hopeassistence_logo_sf.png" alt="">
                <p></p>
            </div>
            <div class="rodape-col-3">
                <h3>Mais Informações</h3>
                <ul>
                    <li>Cupons</li>
                    <li>Blog</li>
                    <li>Política de Privacidade</li>
                    <li>Contatos</li>
                </ul>
            </div>
            <div class="rodape-col-4">
                <h3>Redes Sociais</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="direitos">&#169; Todos os Direitos Reservados Raio de Esperança</p>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="assets/js/app.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
