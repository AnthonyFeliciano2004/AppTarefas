<?php
class Tarefa {         
    private $id;
    private $data;
    private $status;
    private $tarefa;

    public function __get($valor){
        return $this->$valor;
    }
    
    public function __set($valor, $atr){
        $this->$valor = $atr;
    }
}

?>