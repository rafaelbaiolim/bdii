<?php
require_once APP_PATH . 'Pojo/PojoRequisicao.php';

class DaoRequisicao {

    public static $instance;
    private $db;

    public function __construct() {
        $this->db = Conexao::getInstance();
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoRequisicao();

        return self::$instance;
    }

    public function Cadastrar(PojoRequisicao $requisicao) {
        $consulta;
        try {
            $sql = "INSERT INTO requisicao(	
                numero_paciente,
                numero_protocolo,
                data_requisicao,
                sexo,
                idade,
                idade_informada,
                cod_grupo_convenio,
                cod_seguradora_convenio,
                total,
                val_pago,
                id_posto,
                orcamento,
                cod_medico,
                campo_variavel_2,
                desconto_percent ) 
                    VALUES (
                    :data_requisicao,
                    :sexo,
                    :idade,
                    :idade_informada,
                    :cod_grupo_convenio,
                    :cod_seguradora_convenio,
                    :total,
                    :val_pago,
                    :id_posto,
                    :orcamento,
                    :cod_medico,
                    :campo_variavel_2)";
            $this->db->beginTransaction();

            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":data_requisicao", $requisicao->getData_requisicao());
            $p_sql->bindValue(":numero_protocolo", $requisicao->getNumero_protocolo());
            $p_sql->bindValue(":numero_paciente", $requisicao->getNumero_paciente());
            $p_sql->bindValue(":sexo", $requisicao->getSexo());
            $p_sql->bindValue(":idade", $requisicao->getIdade_informada());
            $p_sql->bindValue(":idade_informada", $requisicao->getIdade());
            $p_sql->bindValue(":cod_grupo_convenio", $requisicao->getCod_grupo_convenio());
            $p_sql->bindValue(":cod_seguradora_convenio", $requisicao->getCod_seguradora_convenio());
            $p_sql->bindValue(":total", $requisicao->getTotal());
            $p_sql->bindValue(":val_pago", $requisicao->getVal_pago());
            $p_sql->bindValue(":id_posto", $requisicao->getId_posto());
            $p_sql->bindValue(":orcamento", $requisicao->getOrcamento());
            $p_sql->bindValue(":cod_medico", $requisicao->getCod_medico());
            $p_sql->bindValue(":campo_variavel_2", $requisicao->getCampo_variavel_2());

            $consulta = $p_sql->execute();
            $this->db->commit();

            if ($consulta) {
                echo "Dado inserido com sucesso";
                $stmt = $this->db->query("SELECT LAST_INSERT_ID() from requisicao");
                $lastId = $stmt->fetch(PDO::FETCH_NUM);
                return $lastId[0];
            }

            return $consulta;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
            $this->db->rollback();
        }
    }

    public function Alterar(PojoRequisicao $requisicao) {
        try {
            $sql = "UPDATE requisicao set
		requisicao(		
                 numero_paciente = :numero_paciente
                 numero_protocolo = :numero_protocolo
                 data_requisicao = :data_requisicao,
                 sexo = :sexo,
                 idade = :idade,
                 idade_informada = :idade_informada,
                 cod_grupo_convenio = :cod_grupo_convenio,
                 cod_seguradora_convenio = :cod_seguradora_convenio,
                 total = :total,
                 val_pago = :val_pago,
                 id_posto = :id_posto,
                 orcamento = :orcamento,
                 cod_medico = :cod_medico,
                 campo_variavel_2 = :campo_variavel_2  WHERE ?? ";

            $p_sql = $this->db->prepare($sql);

            $p_sql->bindValue(":numero_protocolo", $requisicao->getNumero_protocolo());
            $p_sql->bindValue(":numero_paciente", $requisicao->getNumero_paciente());
            $p_sql->bindValue(":data_requisicao", $requisicao->getData_requisicao());
            $p_sql->bindValue(":sexo", $requisicao->getSexo());
            $p_sql->bindValue(":idade", $requisicao->getIdade_informada());
            $p_sql->bindValue(":idade_informada", $requisicao->getIdade());
            $p_sql->bindValue(":cod_grupo_convenio", $requisicao->getCod_grupo_convenio());
            $p_sql->bindValue(":cod_seguradora_convenio", $requisicao->getCod_seguradora_convenio());
            $p_sql->bindValue(":total", $requisicao->getTotal());
            $p_sql->bindValue(":val_pago", $requisicao->getVal_pago());
            $p_sql->bindValue(":id_posto", $requisicao->getId_posto());
            $p_sql->bindValue(":orcamento", $requisicao->getOrcamento());
            $p_sql->bindValue(":cod_medico", $requisicao->getCod_medico());
            $p_sql->bindValue(":campo_variavel_2", $requisicao->getCampo_variavel_2());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function Deletar($numero_paciente, $numero_protocolo) {
        try {
            $sql = "DELETE FROM requisicao WHERE numero_paciente = :num_paciente AND numero_protocolo = :numero_protocolo";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":numero_paciente", $numero_paciente);
            $p_sql->bindValue(":numero_protocolo", $numero_protocolo);

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function BuscarPorCOD($numero_paciente, $numero_protocolo) {
        try {
            $this->db->beginTransaction();

            $sql = "SELECT * FROM requisicao WHERE numero_paciente = :numero_paciente AND numero_protocolo = :numero_protocolo";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":numero_paciente", $numero_paciente);
            $p_sql->bindValue(":numero_protocolo", $numero_protocolo);
            $p_sql->execute();

            $this->db->commit();

            return $this->popularPaciente($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();

            $this->db->rollback();
        }
    }

    private function popularPaciente($row = array()) {
        $pojo = new PojoRequisicao;
        "   numero_protocolo,
            numero_paciente
            data_requisicao,
            sexo,
            idade,
            idade_informada,
            cod_grupo_convenio,
            cod_seguradora_convenio,
            total,
            val_pago,
            id_posto,
            orcamento,
            cod_medico,
            campo_variavel_2";
        $pojo->setNumero_protocolo($row['numero_protocolo']);
        $pojo->setNumero_paciente($row['numero_paciente']);
        $pojo->setData_requisicao($row['data_requisicao']);
        $pojo->setSexo($row['sexo']);
        $pojo->setIdade($row['idade']);
        $pojo->setIdade_informada($row['idade_informada']);
        $pojo->setCod_grupo_convenio($row['cod_grupo_convenio']);
        $pojo->setCod_seguradora_convenio($row['cod_seguradora_convenio']);
        $pojo->setTotal($row['total']);
        $pojo->setVal_pago($row['val_pago']);
        $pojo->setId_posto($row['id_posto']);
        $pojo->setOrcamento($row['orcamento']);
        $pojo->setCod_medico($row['cod_medico']);
        $pojo->setCampo_variavel_2($row['campo_variavel_2']);
        return $pojo;
    }

}
