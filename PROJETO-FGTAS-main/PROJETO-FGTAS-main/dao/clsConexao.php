<?php
class Conexao {

//ABRIR
    private static function abrir(){
        $banco = "atendimentos";
        $local = "localhost";
        $user = "root";
        $senha = "";
        $conn = mysqli_connect ($local, $user, $senha, $banco);
        if ($conn){
            return $conn;
        }
    }



//FECHAR
    private static function fechar($conn){
        if ($conn) mysqli_close($conn);
    }

//CONSULTAR
    public static function consultar($sql){
        $conn = self::abrir();
        if ($conn){
            $result = mysqli_query($conn, $sql);
            self::fechar($conn);
            return $result;
        }else{
            return NULL;
        }
    }

//EXECUTAR
    public static function executar($sql):void
    {
        $conn = self::abrir();
        if ($conn){
            mysqli_query($conn, $sql);
            //self::fechar($conn);
            }
    }
    
//CONSULTAR COM RETORNO ID
    public static function executarComRetornoId($sql){
        $conn = self::abrir();
        $id = 0;
        if ($conn){
            mysqli_query($conn, $sql);
            $id = mysqli_insert_id($conn);
            self::fechar($conn);
            }
        return $id;
    }

    public static function executarStmt($stmt){
        $conn = self::abrir();
        $id = 0;
        if ($conn){
            if ($stmt->execute()) {
                $id = $stmt->insert_id;
            }
            $stmt->close();
            self::fechar($conn);
        }
        return $id;
    }



    //Talvez mudar o id para tipo, pode estar dando 
    //conflito pelo fate do CRUD Atendimento pegar pelo $tipo e não $id//
}