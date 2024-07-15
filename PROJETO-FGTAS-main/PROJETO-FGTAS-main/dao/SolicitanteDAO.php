<?php
require_once('clsConexao.php');

class SolicitanteDAO{


    public static function inserir($solicitante){
        $nome_solicitante = $solicitante->nome_solicitante;
        //$tipo_pessoa = $solicitante->tipo_pessoa;
        $tipo_solicitante = $solicitante->tipo_solicitante;
        //$identificador_unico =  $solicitante->identificador_unico;
        $forma_atendimento = $solicitante->forma_atendimento;
        //$nomePublico = $solicitante->nomePublico;
        //$emailSolicitante = $solicitante->emailSolicitante;
        //$telefoneSolicitante = $solicitante->telefoneSolicitante;
        //$tipo_informacao = $solicitante->tipo_informacao;
        //$descricaoAtividade = $solicitante->descricaoAtividade;
        //$ativo = $solicitante->ativo;
        //$data_registro = $solicitante->data_registro;


        
       
        $sql = "INSERT INTO solicitante ( id_usuario, nome,  tipo_solicitante,
        forma_atendimento) VALUES (1, '$nome_solicitante', '$tipo_solicitante', '$forma_atendimento');";
        $identificacaoAtendente = Conexao::executar($sql);
        return $identificacaoAtendente;

    }


    
        
    
    public static function getAtendimentoByIdentificador_unico($id){
        $sql = "SELECT * FROM solicitante WHERE id = '$id'";
              
        $result = Conexao::consultar($sql);
            if ($result != NULL ){
                $row = mysqli_fetch_assoc($result);
                if($row){ 
                    $solicitante = new Solicitante($row['tipo_pessoa'] , $row['tipo_solicitante'], 
                    $row['identificador_unico'], $row['forma_atendimento'], $row['nome'], 
                    $row['email'], $row['telefone'], $row['tipo_informacao'] , $row['descricao'], 
                    $row['ativo'], $row['data_registro_soli']);
                    return $solicitante;
                }
            }
    }

    //EDITAR
    public static function editar( $solicitante){
        $tipo_pessoa = $solicitante->tipo_pessoa;
        $tipo_solicitante = $solicitante->tipo_solicitante;
        $identificador_unico =  $solicitante->identificador_unico;
        $forma_atendimento = $solicitante->forma_atendimento;
        $nomePublico = $solicitante->nomePublico;
        $emailSolicitante = $solicitante->emailSolicitante;
        $telefoneSolicitante = $solicitante->telefoneSolicitante;
        $tipo_informacao = $solicitante->tipo_informacao;
        $descricaoAtividade = $solicitante->descricaoAtividade;
        $ativo = $solicitante->ativo;
        $data_registro = $solicitante->data_registro;


        $sql = "UPDATE solicitante SET tipo_pessoa = '$tipo_pessoa', 
        tipo_solicitante = '$tipo_solicitante', identificador_unico = '$identificador_unico',
        forma_atendimento = '$forma_atendimento', nomePublico = '$nomePublico', emailSolicitante = '$emailSolicitante',
        telefoneSolicitante = '$telefoneSolicitante', tipo_informacao = '$tipo_informacao', descricaoAtividade = '$descricaoAtividade', 
        ativo = '$ativo', data_registro = '$data_registro',  WHERE identificador_unico = '$identificador_unico'";

    Conexao::executar( $sql );
}

//EXCLUIR
    public static function excluir($identificador_unico){
            $sql = "DELETE FROM solicitante WHERE identificador_unico = $identificador_unico;";
            Conexao::executar($sql);
            }

    

}



