<?php

 	class Empresa_coletora{
 		private $idempresa;
        private $nome;
 		private $endereco;
 		;
 		
               
 		function __construct($_idempresa=null,$_nome=null,$_endereco=null){
            $this->idempresa=$_idempresa;
 			$this->nome= $_nome;
 			$this->endereco= $_endereco;
 		}
 		function getIdempresa(){
 			return $this->idempresa;
 		}
        function setIdempresa($_idempresa){
            $this->idempresa=$_idempresa;
        }
 		function getNome(){
 			return $this->nome;
 		}
 		function setNome($_nome){
 			$this->nome=$_nome;
 		}
 		
        
 		function getEndereco(){
 			return $this->endereco;
 		}
 		function setEndereco($_endereco){
 		 $this->endereco=$_endereco;
 		}
 		
 		function InserirEmpresa($mysqli){
 			$query= "insert into Empresa_coletora Values" . "(NULL,'$this->nome','$this->endereco')";
            $mysqli->query($query);
    		if($mysqli->affected_rows==1){
    			return true;
    		}else{
    			return false;
    		}

 		}
         function editarEmpresa($mysqli){
            $query="Update Empresa set endereco='$this->endereco', nome='$this->nome' where idEmpresa_coletora='$this->idempresa'";
            $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }
        }
 		
}
?>