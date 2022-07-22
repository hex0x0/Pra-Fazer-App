<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
        <title>To-Do List App</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body>


        <div class="main">

            <div class="header">
                <h1>Todo List Made App with PHP & MYSQL</h1>
            </div>

            <div class="add">

                <form action="criaTask.php" method="POST">
                    <input style="text-align:center;" type="text" name="title" placeholder="Campo obrigatório"/>
                    <button type="submit"> Adicionar &nbsp;<span>&#43;</span></button> 
                </form>

            </div>

            <!-- <div class="show-todo">   
                <h2><?=$_SESSION['task']?></h2>
                <br>
                <small><?= 'Created: '. date('d/m/Y') ?></small>
            </div> -->

            <table class="table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Nro.</th>
                        <th>Tarefa</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                        include_once 'buscaTasks.php';

                    ?>
                </tbody>

            </table>

        </div>

       
    </body>
</html>