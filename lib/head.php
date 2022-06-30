<?php
    
    $caminho = (isset($index) && $index) ? '' : '../../';

    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
    echo '<meta http-equiv="x-ua-compatible" content="ie=edge">';
        
    echo '<link rel="icon" href="'.$caminho.'img/favicon.jpg" type="image/x-icon">';
    echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">';
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />';
    echo '<link rel="stylesheet" href="'.$caminho.'css/style.css">';
    
    echo '<title>Segurança da Informação</title>';
?>