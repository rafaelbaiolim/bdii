<?php
require_once '/Dao/DaoRequisicao.php';

if (isset($_POST['requestRequisicao'])) {
    $daoRequisicao = new DaoRequisicao();
//$daoPaciente->Testar('',"nome");
 var_dump($daoRequisicao->BuscarPorCOD(20,2));
 
 /**
  * INSERE OS DADOS PARA SIMULAR
  */
 
//    $requisicao = new PojoRequisicao();
//    $requisicao->setNumero_paciente($row['numero_paciente']);
//    $requisicao->setNumero_protocolo($row['numero_protocolo']);
//    $requisicao->setData_requisicao($row['data_requisicao']);
//    $requisicao->setSexo($row['sexo']);
//    $requisicao->setIdade($row['idade']);
//    $requisicao->setIdade_informada($row['idade_informada']);
//    $requisicao->setCod_grupo_convenio($row['cod_grupo_convenio']);
//    $requisicao->setCod_seguradora_convenio($row['cod_seguradora_convenio']);
//    $requisicao->setTotal($row['total']);
//    $requisicao->setVal_pago($row['val_pago']);
//    $requisicao->setId_posto($row['id_posto']);
//    $requisicao->setOrcamento($row['orcamento']);
//    $requisicao->setCod_medico($row['cod_medico']);
//    $requisicao->setCampo_variavel_2($row['campo_variavel_2']);
//
//    $isID = $daoRequisicao->Cadastrar($requisicao);
//    if ($isID) {
//        var_dump($daoRequisicao->BuscarPorCOD($isID('numero_paciente'), $isID('numero_protocolo')));
//    }
}

