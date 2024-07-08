<?php
include('clsConexao.php');

class SolicitanteDAO{


    public static function inserir($solicitante){
        $id = $solicitante->id;
        $tipo_pessoa = $solicitante->tipo_pessoa;
        $tipo_solicitane = $solicitante->tipo_solicitane;
        $identificador_unico =  $solicitante->identificador_unico;
        $forma_atendimento = $solicitante->forma_atendimento;
        $nome = $solicitante->nome;
        $email = $solicitante->email;
        $telefone = $solicitante->telefone;
        $tipo_informacao = $solicitante->tipo_informacao;
        $descricao = $solicitante->descricao;
        $ativo = $solicitante->ativo;
        $data_registro = $solicitante->data_registro;


        
        $sql = "INSERT INTO solicitante (id, tipo_pessoa, tipo_solicitane, identificador_unico,
        forma_atendimento, nome, email, telefone, tipo_informacao, descricao, ativo, data_registro) VALUES 
        ('$id', '$tipo_pessoa', '$tipo_solicitane', '$identificador_unico','$forma_atendimento', 
        '$nome', '$email', '$telefone', '$tipo_informacao', '$descricao',
        '$ativo',  '$data_registro', 'S');";
        $identificador_unico = Conexao::executarComRetornoId($sql);
        return $identificador_unico;
    }
    
    
    public static function getAtendimentoByIdentificador_unico($identificador_unico){
        $sql = "SELECT * FROM solicitante WHERE identificador_unico = '$identificador_unico'";
              
        $result = Conexao::consultar($sql);
            if (mysqli_num_rows($result) == 0){
                return null;
            }else{
                list($_id, $_tipo_pessoa, $_tipo_solicitane, $_identificador_unico,
                $_forma_atendimento, $_nome, $_email, $_telefone, $_tipo_informacao, 
                $_descricao, $_ativo, $_data_registro) = mysqli_fetch_row($result);

                $solicitante = new Solicitante($_id, $_tipo_pessoa, $_tipo_solicitane, $_identificador_unico,
                $_forma_atendimento, $_nome, $_email, $_telefone, $_tipo_informacao, 
                $_descricao, $_ativo, $_data_registro);
                return $solicitante;
            }
    }

    //EDITAR
public static function editar( $solicitante){
        $id = $solicitante->id;
        $tipo_pessoa = $solicitante->tipo_pessoa;
        $tipo_solicitane = $solicitante->tipo_solicitane;
        $identificador_unico =  $solicitante->identificador_unico;
        $forma_atendimento = $solicitante->forma_atendimento;
        $nome = $solicitante->nome;
        $email = $solicitante->email;
        $telefone = $solicitante->telefone;
        $tipo_informacao = $solicitante->tipo_informacao;
        $descricao = $solicitante->descricao;
        $ativo = $solicitante->ativo;
        $data_registro = $solicitante->data_registro;


    $sql = "UPDATE solicitante SET id = '$id', tipo_pessoa = '$tipo_pessoa', 
tipo_solicitane = '$tipo_solicitane', identificador_unico = '$identificador_unico',
forma_atendimento = '$forma_atendimento', nome = '$nome', email = '$email',
telefone = '$telefone', tipo_informacao = '$tipo_informacao', descricao = '$descricao', 
ativo = '$ativo', data_registro = '$data_registro', WHERE identificador_unico = '$identificador_unico'";

    Conexao::executar( $sql );
}

//EXCLUIR
    public static function excluir($identificador_unico){
            $sql = "DELETE FROM solicitante WHERE identificador_unico = $identificador_unico;";
            Conexao::executar($sql);
            }

    

}



?>