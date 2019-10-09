<?php include("app/controllers/leads.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />

    <title>bê a BLÁ</title>
</head>

<body>
    <div class="container">
        <img src="assets/images/ativo-6@2x.png" alt="background" class="container-bg">
        <div class="conteudo">
            <!-- <div class="barra-esquerda"></div> -->
            <div class="texto">
                <div class="componentes-texto">
                    <a href="index.html"><img src="assets/images/home@2x.png" alt="home" class="home"></a>
                    <div class="titulo">Título Texto</div>
                    <div></div>
                </div>
                <div class="corpo-texto">
                    <div class="auth-content">
                        <form action="download.php" method="POST" target="_blank">
                            <h2 class="form-title">
                                Informe seu nome e e-mail
                            </h2>
                            <div>
                                <label>Nome Completo</label>
                                <input type="text" name="nm_lead" class="text-input">
                            </div>
                            <div>
                                <label>Email</label>
                                <input type="email" name="ds_email_lead" class="text-input">
                            </div>
                            <div>
                                <button type="submit" name="download-btn" class="btn tbn-big">Submeter</button>
                            </div>
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