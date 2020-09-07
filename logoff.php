<?php 
    session_start();
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // // remover indices do array de sessao
    // // unset()
    // unset($_SESSION['x']); // remve erro se existir

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';


    // // destruir a variavel de sessao 
    // // session_destroy()
    // session_destroy(); //será destruída , mas como a requisição já foi feita terá as variaveis session
    // //por isso é ideal forçar redirecionamento

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';


    session_destroy();
    header('Location: index.php');

?>