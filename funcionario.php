<?php

class funcionario {
   
   protected $nome;
   protected $empresa;
   protected $cargo;
   
   public function setNome($nome){
       
       $this->nome = $nome;
       return $this;
       
   }
   
   public function setEmpresa($empresa){
       
       $this->empresa = $empresa;
       return $this;
       
   }
   
   public function setCargo($cargo){
       
       $this->cargo = $cargo;
       return $this;
       
   }
   
   public function setNivel($nivel){
       
       $this->nivel = $nivel;
       return $this;
       
   }
   
   
   public function getNome(){
       return $this->nome;
   }
   
   public function getEmpresa(){
       return $this->empresa;
   }
   
   public function getCargo(){
       return $this->cargo;
   }
   
   public function getNivel(){
       return $this->nivel;
   }
   
}



