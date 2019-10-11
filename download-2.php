<?php include("app/controllers/leads-2.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <title>bê a BLÁ</title>
</head>

<body>
    <div class="container">
        <img src="assets/images/ativo-6@2x.png" alt="background" class="container-bg">
        <div class="conteudo">
            <div class="texto">
                <div class="componentes-texto">
                    <a href="index-2.html"><img src="assets/images/home@2x.png" alt="home" class="home"></a>
                    <div class="titulo">Download Ebook</div>
                    <div></div>
                </div>
                <div class="corpo-texto">
                    <div class="auth-content">
                        <form action="download-2.php" method="POST" target="_blank">
                            <h2 class="form-title">
                                Informe seu nome e e-mail
                            </h2>
                            <div class="form-group">
                                <label for="inputNome">Nome Completo</label>
                                <input type="text" class="form-control" id="inputNome" name="nm_lead" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="ds_email_lead" aria-describedby="emailHelp" required>
                            </div>
                            
                            <button type="submit" name="download-btn" class="btn btn-primary">Submeter</button>
                        </form>
                    </div>
                </div>
                <div class="rodape">
                    <div></div>
                    <!-- <div class="baixar">
                        <input type="image" src="assets/images/download@2x.png" class="botao-baixar">
                    </div> -->
                    <div></div>
                </div>
            </div>
            <!-- <div class="barra-direita"></div> -->
        </div>
    </div>
</body>
</html>