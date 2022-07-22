<?php

    include_once 'conexao.php';


    if(isset($_POST['title'])){
        $task = $_POST['title'];

    

        $sql = "INSERT INTO task (nome) VALUES('$task')";

        $con_query = mysqli_query($db_conexao, $sql);

        header('Location: index.php');



    }   