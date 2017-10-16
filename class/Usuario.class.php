<?php
 	class Usuario{
 		private $idusuario;
 		private $nome;
 		private $sobrenome;
 		private $telefone;
 		private $endereco;
 		private $cidade;
 		private $senha;
 		private $email;
               
 		function __construct($_idusuario=null,$_nome=null,$_sobrenome=null,$_senha=null,$_telefone=null,$_endereco=null,$_cidade=null,$_email=null){
 			$this->nome= $_nome;
            $this->sobrenome= $_sobrenome;
 			$this->idusuario=$_idusuario;
 			$this->telefone= $_telefone;
 			$this->endereco= $_endereco;
 			$this->cidade=$_cidade;
 			$this->senha=$_senha;
 			$this->email=$_email;               
 		}
 		function getId(){
 			return $this->idusuario;
 		}
 		function getNome(){
 			return $this->nome;
 		}
 		function setNome($_nome){
 			$this->nome=$_nome;
 		}
 		function getEmail(){
 			return $this->email;
 		}
 		function setEmail($_email){
 			$this->email=$_email;
 		}
 		function getSobrenome(){
 			return $this->sobrenome;
 		}
 		function setSobrenome($_Sobrenome){
 			$this->sobrenome=$_Sobrenome;
 		}
 		function getTelefone(){
 			return $this->telefone;
 		}
 		function setTelefone($_telefone){
 			$this->telefone= $_telefone;
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
 		function getCidade(){
 			return $this->cidade;
 		}
                
        function setCidade($_cidade){
 			 $this->cidade=$_cidade;
 		}
 		function inserirUsuario($mysqli){
 			$query= "insert into Usuario Values" . "(NULL,'$this->nome','$this->sobrenome','$this->endereco','$this->telefone','$this->cidade','$this->senha','$this->email')";
            $mysqli->query($query);
			if($mysqli->affected_rows==1){
				$id=$mysqli->insert_id;
            	return $id;
			}else{
				return false;
			}

 		}
 		function logar($mysqli){
			//global $mysqli;
			$query="SELECT * FROM Usuario WHERE email='" . $this->email . "' AND senha='".$this->senha . "' ";
				$resultado=$mysqli->query($query);
				if($resultado->num_rows==1){
					while($linha=$resultado->fetch_object()){
						$this->idUsuario=$linha->id_usuario;
						session_start();
						$_SESSION['idUsuario']=$linha->idUsuario;
						$_SESSION['emailUsuario']=$linha->email;
						$_SESSION['usuario']=$linha->nome;
						setcookie("tempo","existe",time()+3600);
						return true;
					}
				}else{

					return false;
			
				}
		}
		
		function editarCadastro($mysqli){
			$query="update Usuario set nome='$this->nome', sobrenome='$this->sobrenome', endereco='$this->endereco', telefone='$this->telefone'";
			 $mysqli->query($query);
			if($mysqli->affected_rows==1){
            	return true;
			}else{
				return false;
			}

		}
		function votar($mysqli){

		}
		function setId($_id){
			$this->idUsuario=$_id;
		}
		function selectCidade($mysqli){
			$query="SELECT * FROM Cidade;";
			echo "<select name=\"cidade\">";
			$result=$mysqli->query($query);
			
				while($linha=$result->fetch_object()){
					echo "<option value=\"" . $linha->idCidade . " \"> " . $linha->nome . "</option>";

				}
				echo "</Select>";

		}
		function getUsuario($mysqli){
			$query="SELECT* FROM Usuario WHERE idUsuario='$this->idusuario'";
			
			$result=$mysqli->query($query);
			
				while($linha=$result->fetch_object()){
					$this->nome= $linha->nome;
					$this->sobrenome = $linha->sobrenome;
					$this->telefone = $linha->telefone;
					$this->endereco = $linha->endereco;
				}
		}
 		
}
?>
