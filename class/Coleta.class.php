<?php

 	class Coleta{
 		private $idprefeitura;
 		private $idPosto_coleta;
 		private $qtd;
 		private $data;
 		private $idmaterial;
 		
               
 		function __construct($_idprefeitura=null,$_idPosto_coleta=null,$_qtd=null,$_data=null,$_idmaterial=null){
 			
 			$this->idprefeitura= $_idprefeitura;
            $this->idPosto_coleta= $_idPosto_coleta;
 			$this->qtd=$_qtd;
 			$this->data= $_data;
 			$this->idmaterial= $_idmaterial;
 			

                      
 		}
 		function getIdprefeitura(){
 			return $this->idprefeitura;
 		}
 		function getPosto_coleta(){
 			return $this->idPosto_coleta;
 		}
 		function setPost_coleta($_idPosto_coleta){
 			$this->idPosto_coleta=$_idPosto_coleta;
 		}
 		function getQtd(){
 			return $this->qtd;
 		}
 		function setQtd($_qtd){
 		 $this->qtd=$_qtd;
 		}
 		function getData(){
 			return $this->data;
 		}
 		function setData($_data){
 			return $this->data=$_data;
 		}
 		function getIdmaterial(){
 			return $this->idmaterial;
 		}
                
                function setIdmaterial($_idmaterial){
 			 $this->idmaterial=$_idmaterial;
 		}
 		function inserircoleta($mysqli){
 			$query= "insert into Usuario Values" . "(NULL,'$this->nome','$this->login','$this->senha','$this->tipo','$this->foto','$this->nascimento','$this->nomeusuario')";
                        $mysqli->query($query);
		if($mysqli->affected_rows==1){
			$b="usuario cadastrado com sucesso";
                        return $b;
		}else{
			echo "Erro : $mysqli->error";
		}

 		}
 		
}
?>
