<?php
    require('tarefas_modal.php');
    require('conexao.php');
    require('tarefas_service.php');

<<<<<<< HEAD
   $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

=======

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
>>>>>>> 5bcafffa5034574be59b15ecd92c3e9f8350c57c

    if ($acao == 'inserir'){
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
        
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        header('Location: nova_tarefa.php?inclusao=1');
    } else if ($acao == 'recuperar'){
        $tarefa = new Tarefa();
        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();

    } else if ($acao == 'atualizar'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        if ($tarefaService->atualizar()){
<<<<<<< HEAD
            if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
                header('location: index.php');
            } else {
            header('location: todas_tarefas.php');
            }
        }

    } else if ($acao == 'remover'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->remover();
        if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
            header('location: index.php');
        } else {
        header('location: todas_tarefas.php');
        }

    } else if ($acao == 'marcarRealizada'){
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('status', 2);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->marcarRealizada();
        if(isset($_GET['pag']) && $_GET['pag'] == 'index'){
            header('location: index.php');
        } else {
        header('location: todas_tarefas.php');
        }
    } else if ($acao == 'recuperarTarefasPendentes'){
        $tarefa = new Tarefa();
        $tarefa->__set('status',1);

        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperarTarefasPendentes();
       // header('location: index.php');
=======
            header('location: todas_tarefas.php');
        }

>>>>>>> 5bcafffa5034574be59b15ecd92c3e9f8350c57c
    }
?>