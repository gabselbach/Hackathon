<?php
	$idusuario=2;
	$idposto=1;
	$idmaterial=1;
	$quanti=505;
	include("includes/conexao.php");
	$query="INSERT INTO Deposita (idDeposita,idUsuario,idPosto_coleta,idMaterial,qtd) VALUES
(NULL, $idusuario, $idposto, $idmaterial, '$quanti')";

             $mysqli->query($query);
            if($mysqli->affected_rows){
             $query1="Select qtd from Estoque_Posto_coleta where idPosto_coleta=$idusuario and 
             idmaterial=$idmaterial";
            $res=$mysqli->query($query1);
            var_dump($res);
            if($res){
            $linha=$res->fetch_object();
            $quantidade=$linha->qtd;
            $total=$quanti+$quantidade;
                $sql="Update Estoque_Posto_coleta set qtd=$total where idPosto_coleta=$idposto";
                $mysqli->query($sql);
                
            }else{
                
                $sql1="INSERT INTO Estoque_Posto_coleta (idPosto_coleta,idMaterial,qtd) VALUES ($idposto,$idmaterial,$quanti)";
                $mysqli->query($sql1);
                
            }
        }

?>