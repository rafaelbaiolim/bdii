<?php

require_once '/Dao/DaoResultadoExame.php';

if (isset($_POST['requestResultadoExame'])) {
    $daoResultadoExame = new DaoResultadoExame();
//$daoResultadoExame->Testar('',"nome");
    var_dump($daoResultadoExame->BuscarPorCOD(2));

    /**
     * INSERE OS DADOS PARA SIMULAR
     */
//    $resultado_exame = new PojoResultadoExame();
//    $resultado_exame->setBairro("Bairro");
//    $resultado_exame->setCep("Cep");
//    $resultado_exame->setCidade("Maringa");
//    $resultado_exame->setCod_grupo("cod");
//    $resultado_exame->setCod_seguradora("100");
//    $resultado_exame->setData_nascimento("10/10/1994 00:00:00");
//    $resultado_exame->setData_requisicao("10/10/1994 00:00:00");
//    $resultado_exame->setFlag_paciente("Ativo");
//    $resultado_exame->setNome_paciente("Jose");
//    $resultado_exame->setSexo("M");
//    $resultado_exame->setUf("Pr");
//    $isID = $daoResultadoExame->Cadastrar($resultado_exame);
//    if ($isID) {
//        var_dump($daoResultadoExame->BuscarPorCOD($isID));
//    }
}

