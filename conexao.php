<?php

    $db_conexao = new \mysqli('localhost', 'root', 'admin123', 'tasks');



    if(mysqli_connect_error()){
        echo 'Deu erro';
    }