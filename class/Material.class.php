<?php

 	class Material{
 		private $idmaterial;
 		private $nome;
               
 		function __construct($_idmaterial=null,$_nome=null){
 			
 			$this->nome= $_nome;
 			$this->idmaterial=$_idmaterial;
 			
                      
 		}
 		function getId(){
 			return $this->id;
 		}
 		function getNome(){
 			return $this->nome;
 		}
 		function setNome($_nome){
 			$this->nome=$_nome;
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
 		function selectMaterial($mysqli){
			$query="SELECT * FROM Material;";
			echo "<select name=\"material\">";
			$result=$mysqli->query($query);
				while($linha=$result->fetch_object()){
					echo "<option value=\"" . $linha->idMaterial . " \"> " . $linha->nome . "</option>";

				}
				echo "</Select>";

		}
 		
}
?>
