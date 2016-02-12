<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Dao/DaoPaciente.php';
$daoPaciente = new DaoPaciente();


if (isset($_POST['buscar'])) {
    if (isset($_POST['codPaciente'])) {
        $id = $_POST['codPaciente'];
    }
    echo $id;

   $paciente = $daoPaciente->BuscarPorCOD($id);
   var_dump($paciente);
}


if (isset($_POST['requestPacienteUpdatePartial'])) {
    $cidade = 'Default';
    if (isset($_POST['cidade'])) {
        $cidade = $_POST['cidade'];
        echo $cidade;
    }

    echo "ok";
    $daoPaciente->startUpdatePartial($cidade);
}

if (isset($_POST['requestPacienteUpdate'])) {
    $cidade = 'Default';
    if (isset($_POST['cidade2'])) {
        $cidade = $_POST['cidade2'];
    }


    $daoPaciente->startUpdate($cidade);
}


if (isset($_POST['requestPaciente'])) {

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

