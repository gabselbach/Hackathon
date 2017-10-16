<?php

    class Deposita{
        private $idusuario;
        private $idPosto_coleta;
        private $idmaterial;
        private $qtd;
        
               
        function __construct($_idusuario=null,$_idPosto_coleta=null,$_idmaterial=null,$_qtd=null){
            
            $this->idusuario= $_idusuario;
            $this->idPosto_coleta= $_idPosto_coleta;
            $this->idmaterial=$_idmaterial;
            $this->qtd= $_qtd;
            

                      
        }
        function getIdusuario(){
            return $this->idusuario;
        }
        function setIdusuario($_idusuario){
            $this->idusuario=$_idusuario;
        }
        function getIdPosto_coleta(){
            return $this->idPosto_coleta;
        }
        
        function setIdPosto_coleta($_idPosto_coleta){
            $this->idPosto_coleta=$_idPosto_coleta;
        }
        
        function getIdmaterial(){
            return $this->idmaterial;
        }
        function setIdmaterial($_idmaterial){
            $this->idmaterial= $_idmaterial;
        }
        
        function getQtd(){
            return $this->qtd;
        }
        function setQtd($_qtd){
         $this->qtd=$_qtd;
        }
        
        function deposito($idusuario,$idposto,$idmaterial,$quanti,$mysqli){
           
            $sql="INSERT INTO Deposita (idDeposita,idUsuario,idPosto_coleta,idMaterial,qtd) VALUES
(NULL, $idusuario, $idposto, $idmaterial, '$quanti')";
        $mysqli->query($sql);
        if($mysqli->affected_rows==1){
            $testa=$mysqli->query("Select qtd from Estoque_Posto_coleta where idPosto_coleta=$idusuario and 
             idmaterial=$idmaterial");
           // echo $testa->num_rows;
            if($testa->num_rows==0){
                //var_dump($testa);
                //$sql="Update Estoque_Posto_coleta set qtd=$total where idPosto_coleta=$idposto";
                //$mysqli->query($sql);
                $sql1="INSERT INTO Estoque_Posto_coleta (idPosto_coleta,idMaterial,qtd) VALUES ($idposto,
                    $idmaterial,$quanti)";
                $mysqli->query($sql1);

            }else{
                $linha=$testa->fetch_object();
                $quantidade=$linha->qtd;
                $total=$quanti+$quantidade;
                $sql="Update Estoque_Posto_coleta set qtd=$total where idPosto_coleta=$idposto";
                $mysqli->query($sql);

            }
        }

        }
        function raking($mysqli,$idusuario){
            $cont=1;
            $query="Select Usuario.idUsuario,Usuario.nome,sum(Deposita.qtd) as 'total' from Usuario inner join Deposita on (Usuario.idUsuario=Deposita.idUsuario) group by Usuario.nome order by Deposita.qtd ASC";
            $resultado= $mysqli->query($query);
            while($linha = $resultado->fetch_array()){
                if($linha['idUsuario']==$idusuario){
                    echo"<tr><td border=\"4px\">". $cont ."</td>
                            <td>" . $linha['nome']."</td>
                            <td>". $linha['total'] ."</td></tr>";
                            $cont++;
                

            }else{
                 echo"<tr><td>". $cont ."</td>
                            <td>" . $linha['nome'] ."</td>
                            <td>". $linha['total'] ."</td></tr>";
                            $cont++;
            }

        }
    }
    }
?>