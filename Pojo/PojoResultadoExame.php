<?php

class PojoResultadoExame{

    private $num_protocolo;
    private $cod_exame;
    private $num_item;
    private $num_atributo;
    private $nome_atributo;
    private $tipo;
    private $visivel;
    private $informado;
    private $calculado;
    private $formula;
    private $texto_valor_normal;
    private $resultado_padrao;
    private $unidade;
    private $normalidade;
    private $resultado;
    private $num_exame;
    private $impresso;

    function getNumero_paciente() {
        return $this->numero_paciente;
    }

    function getNumero_protocolo() {
        return $this->numero_protocolo;
    }

    function getNum_protocolo() {
        return $this->num_protocolo;
    }

    function getCod_exame() {
        return $this->cod_exame;
    }

    function getNum_item() {
        return $this->num_item;
    }

    function getNum_atributo() {
        return $this->num_atributo;
    }

    function getNome_atributo() {
        return $this->nome_atributo;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getVisivel() {
        return $this->visivel;
    }

    function getInformado() {
        return $this->informado;
    }

    function getCalculado() {
        return $this->calculado;
    }

    function getFormula() {
        return $this->formula;
    }

    function getTexto_valor_normal() {
        return $this->texto_valor_normal;
    }

    function getResultado_padrao() {
        return $this->resultado_padrao;
    }

    function getUnidade() {
        return $this->unidade;
    }

    function getNormalidade() {
        return $this->normalidade;
    }

    function getResultado() {
        return $this->resultado;
    }

    function getNum_exame() {
        return $this->num_exame;
    }

    function getImpresso() {
        return $this->impresso;
    }

    function setNumero_paciente($numero_paciente) {
        $this->numero_paciente = $numero_paciente;
    }

    function setNumero_protocolo($numero_protocolo) {
        $this->numero_protocolo = $numero_protocolo;
    }

    function setNum_protocolo($num_protocolo) {
        $this->num_protocolo = $num_protocolo;
    }

    function setCod_exame($cod_exame) {
        $this->cod_exame = $cod_exame;
    }

    function setNum_item($num_item) {
        $this->num_item = $num_item;
    }

    function setNum_atributo($num_atributo) {
        $this->num_atributo = $num_atributo;
    }

    function setNome_atributo($nome_atributo) {
        $this->nome_atributo = $nome_atributo;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setVisivel($visivel) {
        $this->visivel = $visivel;
    }

    function setInformado($informado) {
        $this->informado = $informado;
    }

    function setCalculado($calculado) {
        $this->calculado = $calculado;
    }

    function setFormula($formula) {
        $this->formula = $formula;
    }

    function setTexto_valor_normal($texto_valor_normal) {
        $this->texto_valor_normal = $texto_valor_normal;
    }

    function setResultado_padrao($resultado_padrao) {
        $this->resultado_padrao = $resultado_padrao;
    }

    function setUnidade($unidade) {
        $this->unidade = $unidade;
    }

    function setNormalidade($normalidade) {
        $this->normalidade = $normalidade;
    }

    function setResultado($resultado) {
        $this->resultado = $resultado;
    }

    function setNum_exame($num_exame) {
        $this->num_exame = $num_exame;
    }

    function setImpresso($impresso) {
        $this->impresso = $impresso;
    }

}
