<?php
require_once APP_PATH . 'Pojo/PojoPaciente.php';
require_once APP_PATH . 'Db/conection.php';

class DaoPaciente {

    public static $instance;
    private $db;

    public function __construct() {
        $this->db = Conexao::getInstance();
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoPaciente();

        return self::$instance;
    }

    public function Cadastrar(PojoPaciente $paciente) {
        $consulta;
        try {
            $sql = "INSERT INTO paciente(		
                cod_grupo,
                cod_seguradora,
                data_nascimento,
                sexo,
                bairro,
                cep,
                cidade,
                uf,
                data_requisicao,
                flag_paciente,
                nome_paciente) 
                    VALUES (
                    :cod_grupo,
                    :cod_seguradora,
                    :data_nascimento,
                    :sexo,
                    :bairro,
                    :cep,
                    :cidade,
                    :uf,
                    :data_requisicao,
                    :flag_paciente,
                    :nome_paciente)";
            $this->db->beginTransaction();

            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":cod_grupo", $paciente->getCod_grupo());
            $p_sql->bindValue(":cod_seguradora", $paciente->getCod_seguradora());
            $p_sql->bindValue(":data_nascimento", $paciente->getData_nascimento());
            $p_sql->bindValue(":sexo", $paciente->getSexo());
            $p_sql->bindValue(":bairro", $paciente->getBairro());
            $p_sql->bindValue(":cep", $paciente->getBairro());
            $p_sql->bindValue(":cidade", $paciente->getCep());
            $p_sql->bindValue(":uf", $paciente->getCidade());
            $p_sql->bindValue(":data_requisicao", $paciente->getUf());
            $p_sql->bindValue(":flag_paciente", $paciente->getData_requisicao());
            $p_sql->bindValue(":nome_paciente", $paciente->getNome_paciente());

            $consulta = $p_sql->execute();
            $this->db->commit();

            if ($consulta) {
                echo "Dado inserido com sucesso";
                $stmt = $this->db->query("SELECT LAST_INSERT_ID() from paciente");
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

    public function Alterar(PojoPaciente $paciente) {
        try {
            $sql = "UPDATE paciente set
		paciente(		
                num_paciente = :num_paciente,
                cod_grupo = :cod_grupo,
                cod_seguradora = :cod_seguradora,
                data_nascimento = :data_nascimento,
                sexo = :sexo,
                bairro = :bairro,
                cep = :cep,
                cidade = :cidade,
                uf = :uf, 
                data_requisicao = :data_requisicao,
                flag_paciente = :flag_paciente,
                nome_paciente = :nome_paciente WHERE ?? ";

            $p_sql = $this->db->prepare($sql);

            $p_sql->bindValue(":num_paciente", $paciente->getNum_paciente());
            $p_sql->bindValue(":cod_grupo", $paciente->getCod_grupo());
            $p_sql->bindValue(":cod_seguradora", $paciente->getCod_seguradora());
            $p_sql->bindValue(":data_nascimento", $paciente->getData_nascimento());
            $p_sql->bindValue(":sexo", $paciente->getSexo());
            $p_sql->bindValue(":cep", $paciente->getBairro());
            $p_sql->bindValue(":cidade", $paciente->getCep());
            $p_sql->bindValue(":uf", $paciente->getCidade());
            $p_sql->bindValue(":data_requisicao", $paciente->getUf());
            $p_sql->bindValue(":flag_paciente", $paciente->getData_requisicao());
            $p_sql->bindValue(":flag_paciente", $paciente->getFlag_paciente());
            $p_sql->bindValue(":nome_paciente", $paciente->getNome_paciente());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function Deletar($num_paciente) {
        try {
            $sql = "DELETE FROM paciente WHERE num_paciente = :num_paciente";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":num_paciente", $num_paciente);

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function BuscarPorCOD($num_paciente) {
        try {
            $this->db->beginTransaction();

            $sql = "SELECT * FROM paciente WHERE num_paciente = :num_paciente";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":num_paciente", $num_paciente);
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
        $pojo = new PojoPaciente;
        " num_paciente,
                cod_grupo,
                cod_seguradora,
                data_nascimento,
                sexo,
                bairro,
                cep,
                cidade,
                uf,
                data_requisicao,
                flag_paciente,
                nome_paciente";

        $pojo->setNum_paciente($row['num_paciente']);
        $pojo->setCod_grupo($row['cod_grupo']);
        $pojo->setCod_seguradora($row['cod_seguradora']);
        $pojo->setData_nascimento($row['data_nascimento']);
        $pojo->setSexo($row['sexo']);
        $pojo->setBairro($row['bairro']);
        $pojo->setCep($row['cep']);
        $pojo->setCidade($row['cidade']);
        $pojo->setUf($row['uf']);
        $pojo->setData_requisicao($row['data_requisicao']);
        $pojo->setFlag_paciente($row['flag_paciente']);
        $pojo->setNome_paciente($row['nome_paciente']);
        return $pojo;
    }

}
