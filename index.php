<?php
    session_start();
    require './config/functions.php';
    require './config/config.php';
    
    require './views/static/head.view.php';
    require './views/static/header.view.php';
    // cuerpo
    require './views/index.view.php';
    // modal trahs and new form
    require './components/trash_modal.php';
    require './components/new.php';
    // footer
    require './views/static/footer.view.php';
?>