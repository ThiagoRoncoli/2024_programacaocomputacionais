<?php

class AtendimentoDAO{


    public static function inserir($atendimento){
        $idAtendimento = $atendimento->idAtendimento;
        $idFormaAtendimento = $atendimento->idFormaAtendimento;
        $idPerguntaPublico = $atendimento->idPerguntaPublico;
        $idUsuario = $atendimento->idUsuario;
        $dataCadastro =  $atendimento->dataCadastro;
        $ativo = $atendimento->ativo;
        $respostaAtendimento = $atendimento->respostaAtendimento;
        
        $sql = "INSERT INTO atendimento (idAtendimento, idFormaAtendimento, idPerguntaPublico, idUsuario,
        dataCadastro, ativo, respostaAtendimento) VALUES ('$idAtendimento', '$idFormaAtendimento', '$idPerguntaPublico', '$idUsuario',
        '$dataCadastro','$ativo', '$respostaAtendimento', 'S');";
        $id = Conexao::executarComRetornoId($sql);
        return $id;
    }
    
    
    public static function getAtendimentoById($idAtendimento){
        $sql = "SELECT * FROM atendimento WHERE idAtendimento = '$idAtendimento'";
              
        $result = Conexao::consultar($sql);
            if (mysqli_num_rows($result) == 0){
                return null;
            }else{
                list($_idAtendimento, $_idFormaAtentedimento, $_idPerguntaPublico, $_idUsuario,
                $_ativo, $_respostaAtendimento) = mysqli_fetch_row($result);
                $atendimento = new Atendimento($_idAtendimento, $_idFormaAtentedimento, $_idPerguntaPublico, $_idUsuario,
                $_ativo, $_respostaAtendimento);
                return $atendimento;
            }
    }

    //EDITAR
public static function editar( $atendimento, $idAtendimento ){
    $idFormaAtendimento = $atendimento->idFormaAtendimento;
    $idPerguntaPublico = $atendimento->idPerguntaPublico;
    $idUsuario = $atendimento->idUsuario;
    $dataCadastro = $atendimento->dataCadastro;
    $ativo = $atendimento->ativo;
    $respostaAtendimento = $atendimento->respostaAtendimento;

    $sql = "UPDATE atendimento SET idFormaAtendimento = '$idFormaAtendimento', 
idPerguntaPublico = '$idPerguntaPublico', idUsuario = '$idUsuario', dataCadastro = '$dataCadastro', 
ativo = '$ativo', respostaAtendimento = '$respostaAtendimento' WHERE idAtendimento = $idAtendimento";

    Conexao::executar( $sql );
}

//EXCLUIR
    public static function excluir($idAtendimento){
            $sql = "DELETE FROM atenndimento WHERE idAtendimento = $idAtendimento;";
            Conexao::executar($sql);
            }

    

}



?>