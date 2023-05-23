<?php
    
    class Conexao{
        private $host = 'localhost';
        private $db_name = 'tarefas_app';
        private $user = 'root';
        private $senha = '';

        public function conectar(){
            try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->db_name",
                "$this->user",
                "$this->senha"
            );

            return $conexao;

            } catch (PDOException $e){
                echo '<p>'.$e->getMessege(). '</p>';

            } 
        }

    }
?>