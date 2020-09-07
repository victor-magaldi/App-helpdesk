<?php 
    // o get é um comportamento padrao de submeter um formulario
    // porem ele deixar o padra ira expor na url os dados 
    // $_GET ['email'];
    // $_GET ['senha'];

    // print_r($_GET)
    
    // proteger algumas paginas por session 
    session_start();

    $usuario_atenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;
    //----------------------------------------------
    $perfis =[1=>'adm', 2=>'usuario'];


    // o ideal seria colocar como um banco de dados
    $usuarios_app = [
        ['id' => 1 ,'email' => 'adm@teste.com', 'senha'=> '1234','perfil_id'=>1],
        ['id' => 2 ,'email' => 'joao@teste.com', 'senha'=> '1234','perfil_id'=>1],
        ['id' => 3 ,'email' => 'maria@teste.com', 'senha'=> '1234','perfil_id'=>2],
        ['id' => 4 ,'email' => 'jose@teste.com', 'senha'=> '1234','perfil_id'=>2],
    ];

    // ultizando POST para manter a seguranca
    // os campos precisam ter os names definido corretamente para sereme recuperados (ex: email, senha)
    foreach ($usuarios_app as $usuario){
        if(  $_POST ['email'] == $usuario['email'] &&$_POST['senha'] == $usuario['senha']){
            $usuario_atenticado = true;
            $usuario_id = $usuario['id'];
            $usuario_perfil_id = $usuario['perfil_id'];
        }
    }

    if($usuario_atenticado){
        echo 'usuario autenticado';
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location:home.php');
    }else{
        // forçar um endereço 
        header('Location:index.php?login=erro');
        echo 'error na autenticação, verifique novamente sua senha';
        $_SESSION['autenticado'] = false;

    }

?>
