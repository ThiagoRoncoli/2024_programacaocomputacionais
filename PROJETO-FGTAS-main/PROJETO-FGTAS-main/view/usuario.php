<?php
require("../dao/clsConexao.php");
require("../dao/SolicitanteDAO.php");
require("../model/clsSolicitante.php");

$solicitante = SolicitanteDAO::getAtendimentoByIdentificador_unico($identificador_unico);




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/ds.css">
    <title>Usuário</title>
</head>

<body>

    <body>
        <section class="centralizado mv0-5">
            <h1 class="formulario__titulo">Solicitante</h1>
            <table class="tabela w95 centralizado mc">
                <tbody class="centralizado" >
                <tr class="cabecalho">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Tipo da Pessoa</th>
                    <th>Tipo do Solicitante</th>
                    <th>Forma de Atendimento</th>
                    <th>Tipo de Informação</th>
                    <th>Data do registro</th>
                    <th>Ativo</th>
                </tr>
            <?php
            foreach($solicitante as $solicitantes){
                $tipo_pessoa = $solicitantes->tipo_pessoa;
                $tipo_solicitante = $solicitantes->tipo_solicitante;
                $identificador_unico =  $solicitantes->identificador_unico;
                $forma_atendimento = $solicitantes->forma_atendimento;
                $nomePublico = $solicitantes->nomePublico;
                $emailSolicitante = $solicitantes->emailSolicitante;
                $telefoneSolicitante = $solicitantes->telefoneSolicitante;
                $tipo_informacao = $solicitantes->tipo_informacao;
                $descricaoAtividade = $solicitantes->descricaoAtividade;
                $ativo = $solicitantes->ativo;
                $data_registro = $solicitantes->data_registro;
                echo "   <tr>  
                <td>1</td>
                    <td>$tipo_pessoa</td>
                    <td>$tipo_solicitante</td>
                    <td>$identificador_unico</td>
                    <td>$forma_atendimento</td>
                    <td>$nomePublico</td>
                    <td>$emailSolicitante</td>
                    <td>$tipo_informacao</td>
                    <td>$telefoneSolicitante</td>
                    <td>$descricaoAtividade</td>
                    <td>$ativo</td>
                    <td>$data_registro</td>

                <td><a href='editarSolicitante.php?id=$id'><button>Editar</button></a></td>
                        
                        <td><a onclick='return confirm(\"Você tem certeza que deseja apagar?\")'
                        href='../controller/salvarSolicitante.php?excluir&id=$id'>
                                <button>Excluir</button></a></td>
                    </tr>";
            }
                ?>
                        <i class="fa-solid fa-pen icone"></i>
                        <a href="./editar_solicitante.php" class="tabela__link">Editar</a>
                    </td>
                    <td>
                        <i class="fa-solid fa-x icone"></i>
                        <a href="../src/controller/excluir_solicitante.php" class="tabela__link">Excluir</a>
                    </td>
                </tbody>
            </table>
        </section>
        <section class="centralizado mt1">
            <h1 class="formulario__titulo">Atendimento</h1>
            <table class="tabela w95 centralizado mc">
                <tr class="cabecalho">
                    <th>Id</th>
                    <th>Id_Solicitante</th>
                    <th>Tipo</th>
                    <th>Informação</th>
                    <th>Data Registro</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Carteira de Trabalho, SD, Vagas</td>
                    <td>Carteira de trabalho física e digital</td>
                    <td>01/01/2024 14:00:23 </td>
                    <td>
                        <i class="fa-solid fa-pen icone"></i>
                        <a href="./editar_atendimento.php" class="tabela__link">Editar</a>
                    </td>
                    <td>
                        <i class="fa-solid fa-x icone"></i>
                        <a href="../src/controller/excluir_atendimento.php" class="tabela__link">Excluir</a>
                    </td>
                </tr>
            </table>
        </section>
        <div class="centralizado mt1">
            <a href="./relatorio.php" class="formulario__botao__padrao formulario__botao">Gerar Relatório</a>
        </div>
        <script src="https://kit.fontawesome.com/df85906e6a.js" crossorigin="anonymous"></script>
    </body>
</body>

</html>