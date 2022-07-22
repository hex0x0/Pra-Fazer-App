<?php
    session_start();
    include_once 'conexao.php';

    $idTask = $_SESSION['id'];

    // if($idTask){
    //     echo 'entra no meu cu';
    //     echo $idTask;
    // }else{
    //     echo 'tira essa piroca';
    // }

    $sql = "DELETE FROM task WHERE id = '$idTask'";


    $result_set = mysqli_query($db_conexao, $sql);


    header('Location: index.php');

    