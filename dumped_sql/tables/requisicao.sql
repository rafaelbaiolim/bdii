/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : BDII

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-01-24 03:14:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `requisicao`
-- ----------------------------
DROP TABLE IF EXISTS `requisicao`;
CREATE TABLE `requisicao` (
  `numero_paciente` int(11) NOT NULL DEFAULT '0',
  `numero_protocolo` int(11) NOT NULL DEFAULT '0',
  `data_requisicao` datetime DEFAULT NULL,
  `sexo` varchar(4) DEFAULT NULL,
  `idade` varchar(6) DEFAULT NULL,
  `idade_informada` varchar(14) DEFAULT NULL,
  `cod_grupo_convenio` int(16) DEFAULT NULL,
  `cod_seguradora_convenio` int(21) DEFAULT NULL,
  `total` varchar(21) DEFAULT NULL,
  `desconto` varchar(8) DEFAULT NULL,
  `val_pago` varchar(7) DEFAULT NULL,
  `id_posto` varchar(7) DEFAULT NULL,
  `orcamento` varchar(12) DEFAULT NULL,
  `cod_medico` varchar(9) DEFAULT NULL,
  `campo_variavel_2` varchar(14) DEFAULT NULL,
  `desconto_percent` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numero_paciente`,`numero_protocolo`),
  KEY `num_paciente_fk` (`numero_paciente`),
  KEY `num_protocolo_fk` (`numero_protocolo`),
  CONSTRAINT `num_paciente_fk` FOREIGN KEY (`numero_paciente`) REFERENCES `paciente` (`num_paciente`) ON UPDATE CASCADE,
  CONSTRAINT `num_protocolo_fk` FOREIGN KEY (`numero_protocolo`) REFERENCES `resultado_exame` (`num_protocolo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of requisicao
-- ----------------------------
INSERT INTO `requisicao` VALUES ('20', '2', '2012-03-04 00:00:00', '1', '17804', ' 48 A', '0', '0', '0', '0', '', 'CC', '0', 'nbm', '', '0');
INSERT INTO `requisicao` VALUES ('21', '30', '2016-01-22 20:24:42', 'M', '10', '18', '1', '1', '100', '10', '100', '1', '1', '1', null, null);
INSERT INTO `requisicao` VALUES ('21', '1259854', '0003-02-04 00:00:00', '1', '12281', ' 33 A', '0', '0', '0', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('22', '1260649', '0002-01-04 00:00:00', '1', '25625', ' 70 A', '0', '0', '8', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('23', '1260650', '0002-01-04 00:00:00', '2', '20874', ' 57 A', '0', '0', '8', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('24', '1260662', '0002-01-04 00:00:00', '2', '19695', ' 53 A', '0', '0', '16', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('25', '1260674', '0002-01-04 00:00:00', '2', '9360', ' 25 A', '0', '0', '12', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('28', '1260704', '0002-01-04 00:00:00', '1', '29687', ' 81 A', '0', '0', '0', '0', '', 'CC', '0', 'vgf', '', '0');
INSERT INTO `requisicao` VALUES ('29', '1260716', '0002-01-04 00:00:00', '2', '8969', ' 24 A', '0', '0', '26', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('31', '1260730', '0002-01-04 00:00:00', '2', '12420', ' 34 A', '0', '0', '35', '0', '', 'CC', '0', 'x', '', '0');
INSERT INTO `requisicao` VALUES ('32', '1260819', '0003-01-04 00:00:00', '2', '28043', ' 76 A', '0', '0', '396', '10', '', 'CC', '0', 'db', '', '0');
