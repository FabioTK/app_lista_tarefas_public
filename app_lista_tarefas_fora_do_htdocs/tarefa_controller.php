<?php
    require "app_lista_tarefas_fora_do_htdocs/tarefa.model.php";
    require "app_lista_tarefas_fora_do_htdocs/tarefa.service.php";
    require "app_lista_tarefas_fora_do_htdocs/conexao.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $tarefa = new Tarefa();
    $tarefa-> __set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    
    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';

    $tarefaService->inserir();

    
?>