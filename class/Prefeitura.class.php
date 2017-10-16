<?php
 	class Prefeitura{
 		private $idprefeitura;
 		private $endereco;
 		private $telefone;
 		private $lat;
 		private $long;
 		private $email;
 		private $senha;
 		private $cidade;
 		
               
 		function __construct($_idprefeitura=null,$_endereco=null,$_telefone=null,$_senha=null,$_lat=null,$_long=null,$_email=null,$_cidade=null){
 			
 			$this->email= $_email;
            $this->lat= $_lat;
 			$this->idprefeitura=$_idprefeitura;
 			$this->telefone= $_telefone;
 			$this->endereco= $_endereco;
 			$this->long=$_long;
 			$this->senha=$_senha;
 			$this->cidade=$_cidade;

                      
 		}
 		function getId(){
 			return $this->idprefeitura;
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
        function getNomeCidade(){
            $sql="SELECT*from cidade where idCidade=$this->cidade";
            $resultado=$mysqli->query($sql);
            while($linha=$resultado->fetch_object()){
                $cidade=$linha->nome;
            }
            return $nome;
        }
        function setCidade($_cidade){
 			 $this->cidade=$_cidade;
 		}
 		function logar($mysqli){
            //global $mysqli;
            $query="SELECT * FROM Prefeitura WHERE email='" . $this->email . "' AND senha='".$this->senha . "'";
            $resultado=$mysqli->query($query);
            if($resultado->num_rows){
                while($linha=$resultado->fetch_object()){
                    $this->idUPrefeitura=$linha->idPrefeitura;
                    $this->cidade=$linha->idCidade;
                    session_start();
                    $_SESSION['idPrefeitura']=$linha->idPrefeitura;
                    $_SESSION['emailPrefeitura']=$linha->email;
                    $_SESSION['cidade']=$linha->idCidade;
                    setcookie("tempo","existe",time()+3600);
                    return true;
                }
            }else{
                return false;
            }
        }
        function inserirprefeitura($mysqli){
            $query= "insert into Prefeitura values" . "(NULL,'$this->endereco','$this->lat','$this->long','$this->telefone','$this->cidade','$this->email')";
            $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }

        }
        function editarcadastro($mysqli){
            $query="Update Prefeitura set endereco='$this->endereco', lat='$this->lat',long='$this->long', telefone='$this->telefone', email='$this->email' where idprefeitura='$this->idprefeitura'";
            $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }
        }
        function estoque($mysqli,$idcidade,$idmaterial,$qt){
            $quer1="Select qtd from Estoque_Prefeitura where idPrefeitura and idMaterial=$idmaterial and idCidade=$cidade";
            $resultado=$mysqli->query($query1);
            $linha=$resultado->fetch_array();
            if($mysqli->num_rows()>=1){
                $quantidade=$linha['qtd'];
                $total=$quanti+$quantidade;
                $sql="Update Estoque_Prefeitura set qtd=$total where idPrefeitura and idMaterial=$idmaterial and idCidade=$cidade";
            }
             $query ="insert into Estoque_Prefeitura values" . "('$this->idPrefeitura',$idcidade,'$idmaterial',$qtd)";
             $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }
        }
        function agendavenda($idprefeitura,$idempresa,$hora,$data){
            $query = "Insert into Agenda_Venda values" . "(null,$idprefeitura,$idempresa,$hora,$data)";
            $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }
        }
        function  Venda_material($idprefeitura,$idempresa,$idmaterial,$hora,$data,$valor){
            $query="Insert into Venda_material" . "(null,$idprefeitura,$idempresa,$idmaterial,$hora,$data,$valor";
            $mysqli->query($query);
            if($mysqli->affected_rows==1){
                return true;
            }else{
                return false;
            }
        }

        function setId($_id){
            $this->idUsuario=$_id;
        }
 		
}
?>
