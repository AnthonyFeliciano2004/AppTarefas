<?php

    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }
        public function inserir(){
            $query = '
            INSERT INTO tb_tarefa (tarefa) VALUES (:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar() {
            $query ='SELECT
                        A.id, B.status, A.tarefa 
                    FROM 
                        tb_tarefa AS A
                    LEFT JOIN 
                        tb_status AS B 
                    ON 
                        (B.id = A.fk_status)';

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } 

        public function atualizar(){
            $query= 'UPDATE tb_tarefa SET tarefa = :tarefa WHERE id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt-> bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt-> bindValue(':id', $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function remover(){
<<<<<<< HEAD
            $query= 'DELETE FROM tb_tarefa WHERE id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function marcarRealizada(){
            $query='UPDATE tb_tarefa SET fk_status = :fk_status WHERE id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':fk_status', $this->tarefa->__get('status'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function recuperarTarefasPendentes(){
            $query='SELECT A.id, B.status, A.tarefa
                    FROM tb_tarefa AS A
                    LEFT JOIN tb_status AS B ON (B.id = A.fk_status)
                    WHERE A.fk_status = :id_status';

                    $stmt = $this->conexao->prepare($query);
                    $stmt->bindValue('id_status', $this->tarefa->__get('status'));
                    $stmt->execute();
                    return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
=======
            
        }
        
>>>>>>> 5bcafffa5034574be59b15ecd92c3e9f8350c57c
    }
?>