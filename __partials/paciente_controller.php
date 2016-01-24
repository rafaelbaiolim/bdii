<?php

require_once APP_PATH . 'Dao/DaoPaciente.php';
if (isset($_POST['requestPaciente'])) {
    $daoPaciente = new DaoPaciente();
    //$daoPaciente->Testar('',"nome");
    // var_dump($daoPaciente->BuscarPorCOD(20));
    
    /**
     * INSERE OS DADOS PARA SIMULAR
     */
    
    $paciente = new PojoPaciente();
    $paciente->setBairro("Bairro");
    $paciente->setCep("Cep");
    $paciente->setCidade("Maringa");
    $paciente->setCod_grupo("cod");
    $paciente->setCod_seguradora("100");
    $paciente->setData_nascimento("10/10/1994 00:00:00");
    $paciente->setData_requisicao("10/10/1994 00:00:00");
    $paciente->setFlag_paciente("Ativo");
    $paciente->setNome_paciente("Jose");
    $paciente->setSexo("M");
    $paciente->setUf("Pr");

    $isID = $daoPaciente->Cadastrar($paciente);
    if ($isID) {
        var_dump($daoPaciente->BuscarPorCOD($isID));
    }
}

