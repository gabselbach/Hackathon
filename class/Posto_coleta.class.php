<?php

 	class Posto_coleta{
 		private $idPosto_coleta;
        private $nome;
 		private $endereco;
 		private $lat;
 		private $long;
 		private $cidade;
 		private $cota;
 		private $qtd_atual;
 		
               
 		function __construct($_idPosto_coleta=null,$_nome=null,$_endereco=null,$_lat=null,$_long=null,$_cidade=null,$_cota=null,$_qtd_atual=null){
 			
 			$this->nome= $_nome;
            $this->lat= $_lat;
 			$this->idPosto_coleta=$_idPosto_coleta;
 			$this->lat= $_lat;
 			$this->endereco= $_endereco;
 			$this->long=$_long;
 			$this->cidade=$_cidade;
            $this->cota=$_cota;
            $this->qtd_atual=$_qtd_atual;
                      
 		}
 		function getId(){
 			return $this->idPosto_coleta;
 		}
 		function getNome(){
 			return $this->nome;
 		}
 		function setNome($_nome){
 			$this->nome=$_nome;
 		}
 		function getCota(){
 			return $this->cota;
 		}
 		function setCota($_cota){
 			$this->cota=$_cota;
 		}
        function getQtd_Atual(){
            return $this->qtd_atual;
        }
        function setQtd_Atual($_qtd_atual){
            $this->qtd_atual=$_qtd_atual;
        }
 		function getEndereco(){
 			return $this->endereco;
 		}
 		function setEndereco($_endereco){
 		 $this->endereco=$_endereco;
 		}
 		function getSenha(){
 			return $this->senha;
 		}
 		function setSenha($_senha){
 			return $this->senha=$_senha;
 		}
 		function getLat(){
 			return $this->lat;
 		}
                
                function setLat($_lat){
 			 $this->lat=$_lata;
 		}
 		function getLong(){
 			return $this->long;
 		}
                
                function setLong($_long){
 			 $this->long=$_long;
 		}
 		function getCidade(){
            return $this->cidade;
        }
                
                function setCidade($_cidade){
             $this->cidade=$_cidade;
        }
 		function InserirPosto($mysqli){
 			$query= "insert into Posto_coleta Values" . "(NULL,'$this->nome','$this->endereco','$this->lat','$this->long','$this->cidade','$this->cota)";
            $mysqli->query($query);
		  if($mysqli->affected_rows==1){
			return true;
		}else{
			return false;
		}
 		}
        function estoque($mysqli,$idmaterial,$posto){
            $quer1="Select qtd from Estoque_Posto_coleta where idPosto_coleta=$idposto and idMaterial=$idmaterial ";
            $resultado=$mysqli->query($query);
            $linha=$resultado->fetch_array();
            if($mysqli->num_rows()>=1){
                $quantidade=$linha['qtd'];
                $total=$quanti+$quantidade;
                $sql="Update Estoque_Posto_coleta set qtd=$total where idPosto_coleta=$idposto and idMaterial=$idmaterial)";
            }else{
                $query = "insert into Estoque_Posto_coleta values" . "('$this->idPosto_coleta',$idmaterial,$qtd)";
                $mysqli->query($query);
                if($mysqli->affected_rows==1){
                    return true;
                }else{
                    return false;
                }
            }
        }
        function selectPosto_coleta($mysqli){
            $query="SELECT * FROM Posto_coleta;";
            echo "<select name=\"post\">";
            $result=$mysqli->query($query);
                while($linha=$result->fetch_object()){
                    echo "<option value=\"" . $linha->idPosto_coleta . " \"> " . $linha->nome . "</option>";

                }
                echo "</Select>";

        }
 		
}
?>