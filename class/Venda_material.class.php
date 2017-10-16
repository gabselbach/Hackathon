<?php

 	class Venda_material{
 		private $idprefeitura;
 		private $idempresa_coleta;
 		private $hora;
 		private $data;
 		private $idmaterial;
 		private $valor;
 		
               
 		function __construct($_idprefeitura=null,$_idempresa_coleta=null,$_horaq=null,$_data=null,$_idmaterial=null,$_valor){
 			
 			$this->idprefeitura= $_idprefeitura;
            $this->idPosto_coleta= $_idPosto_coleta;
 			$this->hora=$_hora;
 			$this->data= $_data;
 			$this->idmaterial= $_idmaterial;
 			$this->valor= $_valor;

                      
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
 		function getHora(){
 			return $this->hora;
 		}
 		function setHora($_hora){
 		 $this->qtd=$_hora;
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
 		function getValor(){
 			return $this->valor;
 		}
                
                function setValor($_valor){
 			 $this->valor=$_valor;
 		}
 		function InserirUsuario($mysqli){
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
