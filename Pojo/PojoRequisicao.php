<?php

class PojoRequisicao {

    private $numero_paciente;    //PK
    private $numero_protocolo;   //PK
    private $data_requisicao;
    private $sexo;
    private $idade;
    private $idade_informada;
    private $cod_grupo_convenio;
    private $cod_seguradora_convenio;
    private $total;
    private $desconto;
    private $val_pago;
    private $id_posto;
    private $orcamento;
    private $cod_medico;
    private $campo_variavel_2;
    private $desconto_percent;

    function getNumero_paciente() {
        return $this->numero_paciente;
    }

    function getNumero_protocolo() {
        return $this->numero_protocolo;
    }

    function getData_requisicao() {
        return $this->data_requisicao;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getIdade() {
        return $this->idade;
    }

    function getIdade_informada() {
        return $this->idade_informada;
    }

    function getCod_grupo_convenio() {
        return $this->cod_grupo_convenio;
    }

    function getCod_seguradora_convenio() {
        return $this->cod_seguradora_convenio;
    }

    function getTotal() {
        return $this->total;
    }

    function getDesconto() {
        return $this->desconto;
    }

    function getVal_pago() {
        return $this->val_pago;
    }

    function getId_posto() {
        return $this->id_posto;
    }

    function getOrcamento() {
        return $this->orcamento;
    }

    function getCod_medico() {
        return $this->cod_medico;
    }

    function getCampo_variavel_2() {
        return $this->campo_variavel_2;
    }

    function getDesconto_percent() {
        return $this->desconto_percent;
    }

    function setNumero_paciente($numero_paciente) {
        $this->numero_paciente = $numero_paciente;
    }

    function setNumero_protocolo($numero_protocolo) {
        $this->numero_protocolo = $numero_protocolo;
    }

    function setData_requisicao($data_requisicao) {
        $this->data_requisicao = $data_requisicao;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setIdade_informada($idade_informada) {
        $this->idade_informada = $idade_informada;
    }

    function setCod_grupo_convenio($cod_grupo_convenio) {
        $this->cod_grupo_convenio = $cod_grupo_convenio;
    }

    function setCod_seguradora_convenio($cod_seguradora_convenio) {
        $this->cod_seguradora_convenio = $cod_seguradora_convenio;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    function setVal_pago($val_pago) {
        $this->val_pago = $val_pago;
    }

    function setId_posto($id_posto) {
        $this->id_posto = $id_posto;
    }

    function setOrcamento($orcamento) {
        $this->orcamento = $orcamento;
    }

    function setCod_medico($cod_medico) {
        $this->cod_medico = $cod_medico;
    }

    function setCampo_variavel_2($campo_variavel_2) {
        $this->campo_variavel_2 = $campo_variavel_2;
    }

    function setDesconto_percent($desconto_percent) {
        $this->desconto_percent = $desconto_percent;
    }

}
