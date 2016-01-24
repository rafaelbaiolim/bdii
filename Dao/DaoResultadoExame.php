<?php

require_once APP_PATH . 'Pojo/PojoResultadoExame.php';

class DaoResultadoExame {

    public static $instance;
    private $db;

    public function __construct() {
        $this->db = Conexao::getInstance();
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoResultadoExame();

        return self::$instance;
    }

    public function Cadastrar(PojoResultadoExame $resultadoExame) {
        $consulta;
        try {
            $sql = "INSERT INTO resultado_exame(		
                num_protocolo,
                cod_exame,
                num_item,
                num_atributo,
                nome_atributo,
                tipo,
                visivel,
                informado,
                calculado,
                formula,
                texto_valor_normal,
                resultado_padrao,
                unidade,
                normalidade,
                resultado,
                num_exame,
                impresso,
                ) 
                    VALUES (
                    :num_protocolo,
                    :cod_exame,
                    :num_item,
                    :num_atributo,
                    :nome_atributo,
                    :tipo,
                    :visivel,
                    :informado,
                    :calculado,
                    :formula,
                    :texto_valor_normal,
                    :resultado_padrao
                    :unidade
                    :normalidade
                    :resultado
                    :num_exame
                    :impresso
                )";
            $this->db->beginTransaction();

            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":num_protocolo", $resultadoExame->getNum_protocolo());
            $p_sql->bindValue(":cod_exame", $resultadoExame->getCod_exame());
            $p_sql->bindValue(":num_item", $resultadoExame->getNum_item());
            $p_sql->bindValue(":num_atributo", $resultadoExame->getNum_atributo());
            $p_sql->bindValue(":nome_atributo", $resultadoExame->getNome_atributo());
            $p_sql->bindValue(":tipo", $resultadoExame->getTipo());
            $p_sql->bindValue(":visivel", $resultadoExame->getVisivel());
            $p_sql->bindValue(":informado", $resultadoExame->getInformado());
            $p_sql->bindValue(":calculado", $resultadoExame->getCalculado());
            $p_sql->bindValue(":formula", $resultadoExame->getFormula());
            $p_sql->bindValue(":texto_valor_normal", $resultadoExame->getTexto_valor_normal());
            $p_sql->bindValue(":resultado_padrao", $resultadoExame->getResultado_padrao());
            $p_sql->bindValue(":texto_valor_normal", $resultadoExame->getTexto_valor_normal());
            $p_sql->bindValue(":unidade", $resultadoExame->getUnidade());
            $p_sql->bindValue(":normalidade", $resultadoExame->getNormalidade());
            $p_sql->bindValue(":resultado", $resultadoExame->getResultado());
            $p_sql->bindValue(":num_exame", $resultadoExame->getNum_exame());
            $p_sql->bindValue(":impresso", $resultadoExame->getImpresso());

            $consulta = $p_sql->execute();
            $this->db->commit();

            if ($consulta) {
                echo "Dado inserido com sucesso";
                $stmt = $this->db->query("SELECT LAST_INSERT_ID() from resultadoExame");
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

    public function Alterar(PojoResultadoExame $resultadoExame) {
        try {
            $sql = "UPDATE resultado_exame set
		resultado_exame(		
                num_protocolo = :num_protocolo,
                cod_exame = :cod_exame,
                num_item = :num_item,
                num_atributo = :num_atributo, 
                nome_atributo = :nome_atributo,
                tipo = :tipo,
                visivel = :visivel,
                informado = :informado,
                calculado = :calculado,
                formula  = :formula,
                texto_valor_normal = :texto_valor_normal, 
                resultado_padrao = :resultado_padrao,
                unidade  = :unidade
                normalidade = :normalidade
                resultado = :resultado
                num_exame = :num_exame
                impresso = :impresso WHERE ?? ";

            $p_sql = $this->db->prepare($sql);

            $p_sql->bindValue(":num_protocolo", $resultadoExame->getNum_protocolo());
            $p_sql->bindValue(":cod_exame", $resultadoExame->getCod_exame());
            $p_sql->bindValue(":num_item", $resultadoExame->getNum_item());
            $p_sql->bindValue(":num_atributo", $resultadoExame->getNum_atributo());
            $p_sql->bindValue(":nome_atributo", $resultadoExame->getNome_atributo());
            $p_sql->bindValue(":tipo", $resultadoExame->getTipo());
            $p_sql->bindValue(":visivel", $resultadoExame->getVisivel());
            $p_sql->bindValue(":informado", $resultadoExame->getInformado());
            $p_sql->bindValue(":calculado", $resultadoExame->getCalculado());
            $p_sql->bindValue(":formula", $resultadoExame->getFormula());
            $p_sql->bindValue(":texto_valor_normal", $resultadoExame->getTexto_valor_normal());
            $p_sql->bindValue(":resultado_padrao", $resultadoExame->getResultado_padrao());
            $p_sql->bindValue(":texto_valor_normal", $resultadoExame->getTexto_valor_normal());
            $p_sql->bindValue(":unidade", $resultadoExame->getUnidade());
            $p_sql->bindValue(":normalidade", $resultadoExame->getNormalidade());
            $p_sql->bindValue(":resultado", $resultadoExame->getResultado());
            $p_sql->bindValue(":num_exame", $resultadoExame->getNum_exame());
            $p_sql->bindValue(":impresso", $resultadoExame->getImpresso());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function Deletar($num_resultadoExame) {
        try {
            $sql = "DELETE FROM resultado_exame WHERE num_resultadoExame = :num_resultadoExame";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":num_resultadoExame", $num_resultadoExame);

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.\n";
            echo $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }

    public function BuscarPorCOD($num_protocolo) {
        try {
            $this->db->beginTransaction();

            $sql = "SELECT * FROM resultado_exame WHERE num_protocolo = :num_protocolo";
            $p_sql = $this->db->prepare($sql);
            $p_sql->bindValue(":num_protocolo", $num_protocolo);
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
        $pojo = new PojoResultadoExame;
        "num_protocolo,
         cod_exame,
         num_item,
         num_atributo,
         nome_atributo,
         tipo,
         visivel,
         informado,
         calculado,
         formula,
         texto_valor_normal,
         resultado_padrao,
         unidade,
         normalidade,
         resultado,
         num_exame,
         impresso";

        $pojo->setNum_protocolo($row['num_protocolo']);
        $pojo->setCod_exame($row['cod_exame']);
        $pojo->setNum_item($row['num_item']);
        $pojo->setNum_atributo($row['num_atributo']);
        $pojo->setNome_atributo($row['nome_atributo']);
        $pojo->setTipo($row['tipo']);
        $pojo->setVisivel($row['visivel']);
        $pojo->setInformado($row['informado']);
        $pojo->setCalculado($row['calculado']);
        $pojo->setFormula($row['formula']);
        $pojo->setTexto_valor_normal($row['texto_valor_normal']);
        $pojo->setResultado_padrao($row['resultado_padrao']);
        $pojo->setUnidade($row['unidade']);
        $pojo->setNormalidade($row['normalidade']);
        $pojo->setResultado($row['resultado']);
        $pojo->setNum_exame($row['num_exame']);
        $pojo->setImpresso($row['impresso']);
        return $pojo;
    }

}
