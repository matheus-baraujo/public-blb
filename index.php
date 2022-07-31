<?php

$pagina = 'home';

if(isset($_GET['i'])) {
    $pagina = addslashes($_GET['i']);
}

include '../amare-blb/views/header.php';

switch ($pagina) {
    case 'home':
        include '../amare-blb/views/home.php';
        break;
    case 'about':
        include '../amare-blb/views/about_us.php';
        break;
    case 'services':
        include '../amare-blb/views/services.php';
        break;    
    case 'contact':
        include '../amare-blb/views/contact.php';
        break;    
    case 'where':
        include '../amare-blb/views/where_we_work.php';
        break;    
    case 'faq':
        include '../amare-blb/views/faq.php';
        break; 
    default:
        include '../amare-blb/views/home.php';
        break;
}

include '../amare-blb/views/footer.php';