<?php 
    session_start();

    
        $titulo= str_replace('#','-',$_POST['titulo']);
        $categoria= str_replace('#','-',$_POST['categoria']);
        $descricao= str_replace('#','-',$_POST['descricao']);
    
        $texto = $_SESSION['id']. '#' .$titulo.'#'.$categoria.'#'. $descricao .PHP_EOL;
    
    // colocando as infos em um arquivo de texto
    //abrir,escrever e fechar o arquivo
    $arquivo = fopen('arquivo.hd','a');
    fwrite($arquivo,$texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>