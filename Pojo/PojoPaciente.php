<?php


class PojoPaciente {
    
    private $num_paciente; // Chave primária 
    private $cod_grupo;
    private $cod_seguradora;
    private $data_nascimento;
    private $sexo;
    private $bairro;
    private $cep;
    private $cidade;
    private $uf;
    private $data_requisicao;
    private $flag_paciente;
    private $nome_paciente;
    
    function getNum_paciente(){
         return $this->num_paciente;
    }
    
    function getCod_grupo() {
        return $this->cod_grupo;
    }

    function getCod_seguradora() {
        return $this->cod_seguradora;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getData_requisicao() {
        return $this->data_requisicao;
    }

    function getFlag_paciente() {
        return $this->flag_paciente;
    }

    function getNome_paciente() {
        return $this->nome_paciente;
    }

    function setNum_paciente($num_paciente) {
        $this->num_paciente = $num_paciente;
    }

    function setCod_grupo($cod_grupo) {
        $this->cod_grupo = $cod_grupo;
    }

    function setCod_seguradora($cod_seguradora) {
        $this->cod_seguradora = $cod_seguradora;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setData_requisicao($data_requisicao) {
        $this->data_requisicao = $data_requisicao;
    }

    function setFlag_paciente($flag_paciente) {
        $this->flag_paciente = $flag_paciente;
    }

    function setNome_paciente($nome_paciente) {
        $this->nome_paciente = $nome_paciente;
    }

}

?>


