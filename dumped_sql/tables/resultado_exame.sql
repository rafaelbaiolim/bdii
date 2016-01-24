/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : BDII

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-24 03:14:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `resultado_exame`
-- ----------------------------
DROP TABLE IF EXISTS `resultado_exame`;
CREATE TABLE `resultado_exame` (
  `num_protocolo` int(11) NOT NULL AUTO_INCREMENT,
  `cod_exame` varchar(8) DEFAULT NULL,
  `num_item` varchar(7) DEFAULT NULL,
  `num_atributo` varchar(11) DEFAULT NULL,
  `nome_atributo` varchar(31) DEFAULT NULL,
  `tipo` varchar(4) DEFAULT NULL,
  `visivel` varchar(7) DEFAULT NULL,
  `informado` varchar(9) DEFAULT NULL,
  `calculado` varchar(9) DEFAULT NULL,
  `formula` varchar(7) DEFAULT NULL,
  `texto_valor_normal` varchar(68) DEFAULT NULL,
  `resultado_padrao` varchar(15) DEFAULT NULL,
  `unidade` varchar(10) DEFAULT NULL,
  `normalidade` varchar(11) DEFAULT NULL,
  `resultado` varchar(9) DEFAULT NULL,
  `num_exame` varchar(8) DEFAULT NULL,
  `impresso` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`num_protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=40229 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resultado_exame
-- ----------------------------
INSERT INTO `resultado_exame` VALUES ('2', 'hiv', '1', '40', 'Anti-HIV', '', '1', '1', '0', '', 'Negativo ou ausente', '', '', '1', 'POSITIVO', '', '1');
INSERT INTO `resultado_exame` VALUES ('36', 'amc', '4', '33', 'Ac. anti-microssomal', 'N', '1', '1', '0', '', 'Não reativo: menor ou igual  a 0,26 \r\nReativo: maior ou igual a 0,38', '', '', '1', 'NEGATIVO', '', '1');
INSERT INTO `resultado_exame` VALUES ('668', 'acu', '162', '375', 'Ácido úrico', 'N', '1', '1', '0', '', '', '', 'mg/dL', '1', '', '', '1');
INSERT INTO `resultado_exame` VALUES ('1211', 'testo', '230', '203', 'Testosterona plasmática', 'N', '1', '1', '0', '', '', '', 'ng/dL', '1', '', '', '1');
INSERT INTO `resultado_exame` VALUES ('3372', 'subs', '1409', '194', 'Substâncias redutoras nas fezes', '', '1', '1', '0', '', '', '', '', '1', '', '', '1');
INSERT INTO `resultado_exame` VALUES ('8187', 'fruto', '6793', '127', 'Frutose', '', '1', '1', '0', '', '', '', '', '1', '', '', '1');
INSERT INTO `resultado_exame` VALUES ('33455', 'acu', '37415', '375', 'Ácido úrico', 'N', '1', '1', '0', '', '', '', 'mg/dL', '1', '', '', '1');
INSERT INTO `resultado_exame` VALUES ('40228', 'hemog', '44345', '215', 'Eritrócitos', 'N', '1', '1', '1', 'Erit', '', '', 'milhões/ul', '1', '', '', '1');
