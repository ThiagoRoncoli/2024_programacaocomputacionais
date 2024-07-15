<?php
require_once('clsConexao.php');

class AtendimentoDAO{


    public static function inserir($atendimento){
        $tipo =  $atendimento-> tipo;
        $informacao = $atendimento->informacao;
        
        
        $sql = "INSERT INTO atendimento (tipo, informacao) VALUES ('$tipo', '$informacao');";
        $tipo = Conexao::executarComRetornoId($sql);
        return $tipo;
    }
    
    
    public static function getAtendimentoByTipo($tipo){
        $sql = "SELECT * FROM atendimento WHERE tipo = '$tipo'";
              
        $result = Conexao::consultar($sql);
            if (mysqli_num_rows($result) == 0){
                return null;
            }else{
                list($_tipo, $_informacao) = mysqli_fetch_row($result);
                $atendimento = new Atendimento($_tipo, $_informacao);
                return $atendimento;
            }
    }

    //EDITAR
public static function editar( $atendimento){
    $tipo =  $atendimento-> tipo;
    $informacao = $atendimento->informacao;
    

    $sql = "UPDATE atendimento SET tipo = '$tipo', 
informacao = '$informacao' WHERE tipo = $tipo";

    Conexao::executar( $sql );
}

//EXCLUIR
    public static function excluir($tipo){
            $sql = "DELETE FROM atendimento WHERE tipo = $tipo;";
            Conexao::executar($sql);
            }

    

}



?>