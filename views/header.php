<!DOCTYPE html>
<html lang="pt-br">

<header>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>BLB Engenharia</title>
    <link rel="shortcut icon" href="../icon.ico" type="image/x-icon"/>

    <!-- Personal modifications -->
    <link rel="stylesheet" href="../amare-blb/css/menu-texto-footer.css">

    <?php 
        switch ($pagina) {
            case 'home':
                echo '<link rel="stylesheet" href="../amare-blb/css/home.css">';
                break;
            case 'about':
                echo '<link rel="stylesheet" href="../amare-blb/css/about.css">';
                break;
            case 'services':
                echo '<link rel="stylesheet" href="../amare-blb/css/services.css">';
                break;    
            case 'contact':
                echo '<link rel="stylesheet" href="../amare-blb/css/contact.css">';
                break;    
            case 'where':
                echo '<link rel="stylesheet" href="../amare-blb/css/where.css">';
                break;    
            case 'faq':
                echo '<link rel="stylesheet" href="../amare-blb/css/faq.css">';
                break; 
            default:
                echo '<link rel="stylesheet" href="../amare-blb/css/home.css">';
                break;
        }
    ?>

</header>

<body>

    <!-- div para limitar a largura da página -->
    <div class="container-fluid"> 

        <!-- Menu -->
        <nav class="menu navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand" href="?i=home"><img src="images/logo BLB 1.png" width="32px" height="20px"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-lg-center" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?i=home" <?php if($pagina=='home'){echo 'style="color:white; font-weight: bold;"';} ?>>INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?i=about" <?php if($pagina=='about'){echo 'style="color:white; font-weight: bold;"';} ?>>SOBRE NÓS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?i=services" <?php if($pagina=='services'){echo 'style="color:white; font-weight: bold;"';} ?>>SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?i=where" <?php if($pagina=='where'){echo 'style="color:white; font-weight: bold;"';} ?>>ONDE ATUAMOS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?i=faq" <?php if($pagina=='faq'){echo 'style="color:white; font-weight: bold;"';} ?>>FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?i=contact" <?php if($pagina=='contact'){echo 'style="color:white; font-weight: bold;"';} ?>>CONTATO</a>
                    </li>
                </ul>
            </div>
        </nav>