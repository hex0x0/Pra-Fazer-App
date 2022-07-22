<?php

    session_start();
    require_once 'conexao.php';


    $query_result = mysqli_query($db_conexao, "SELECT * FROM task");


    while($dados = mysqli_fetch_array($query_result)){
        $id = $dados['id'];
        $nome = $dados['nome'];

        $_SESSION['id'] = $id;

        
        echo "
        <tr>
            <td>{$id}</td>
            <td>{$nome}</td>
            <td><a class='x_delete' href='apagar_task.php?id={$id}'>x</a></td>
        </tr>
        
    ";

    

    }


