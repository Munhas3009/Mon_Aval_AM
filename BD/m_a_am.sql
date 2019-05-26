/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  gimo
 * Created: May 19, 2019
 */
/**
*Estrutura de tabelas de de Admin
*/
-- ------------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passkey` varchar(13) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `timeout` timestamp NULL DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Super', 'Possui autorização de super admin', '2019-05-08 20:16:30', '2019-05-08 20:16:30');
INSERT INTO `roles` VALUES ('2', 'Admin', 'Gestão da aplicação', '2019-05-08 20:19:29', '2019-05-08 20:19:29');
INSERT INTO `roles` VALUES ('3', 'Médico', 'Tem autorização para acessar a área médica', '2019-05-08 20:28:55', '2019-05-08 20:28:55');
INSERT INTO `roles` VALUES ('4', 'Técnico de Saúde', 'Tem autorização para acessar a área médica', '2019-05-08 20:30:02', '2019-05-08 20:30:02');
INSERT INTO `roles` VALUES ('5', 'Tecnico Admin', 'Gestão de relatórios e áreas administrativas', '2019-05-08 20:31:56', '2019-05-08 20:31:56');

-- ----------------------------
-- Table structure for controllers
-- ----------------------------
DROP TABLE IF EXISTS `controllers`;
CREATE TABLE `controllers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of controllers
-- ----------------------------
INSERT INTO `controllers` VALUES ('1', 'Users', 'Utilizadores', '2019-05-14 08:37:18', '2019-05-14 08:37:18');
INSERT INTO `controllers` VALUES ('2', 'Roles', 'Rolo de Utilizadores', '2019-05-15 11:04:24', '2019-05-15 11:04:24');
INSERT INTO `controllers` VALUES ('3', 'Actions', 'Acções', '2019-05-15 11:06:58', '2019-05-15 11:06:58');
INSERT INTO `controllers` VALUES ('4', 'Controllers', 'Controladores', '2019-05-15 11:08:42', '2019-05-15 11:08:42');
INSERT INTO `controllers` VALUES ('5', 'Acos', 'Controlador_acesso_objectos', '2019-05-15 11:11:19', '2019-05-15 11:11:19');
INSERT INTO `controllers` VALUES ('6', 'AcosRoles', 'Rolo_Acesso_Objecto', '2019-05-15 11:14:58', '2019-05-15 11:14:58');
INSERT INTO `controllers` VALUES ('7', 'Aros', 'Requisição_Acesso_Objecto', '2019-05-15 11:18:32', '2019-05-15 11:18:32');
INSERT INTO `controllers` VALUES ('8', 'Pages', 'Pagina Principal', '2019-05-15 11:21:17', '2019-05-16 08:11:54');

-- ----------------------------
-- Table structure for actions
-- ----------------------------
DROP TABLE IF EXISTS `actions`;
CREATE TABLE `actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
-- ----------------------------
-- Records of actions
-- ----------------------------
INSERT INTO `actions` VALUES ('1', 'index', 'Index', '2019-05-14 08:43:13', '2019-05-14 08:43:13');
INSERT INTO `actions` VALUES ('2', 'add', 'Adicionar', '2019-05-14 08:43:36', '2019-05-14 08:43:36');
INSERT INTO `actions` VALUES ('3', 'view', 'Visualizar', '2019-05-14 08:44:15', '2019-05-14 08:44:15');
INSERT INTO `actions` VALUES ('4', 'edit', 'Editar', '2019-05-14 08:45:14', '2019-05-15 06:27:04');
INSERT INTO `actions` VALUES ('5', 'delete', 'Apagar', '2019-05-14 08:45:42', '2019-05-15 06:27:59');
INSERT INTO `actions` VALUES ('6', 'login', 'Entrar', '2019-05-14 08:46:02', '2019-05-15 06:28:31');
INSERT INTO `actions` VALUES ('7', 'logout', 'Sair', '2019-05-14 16:39:30', '2019-05-15 06:29:02');
INSERT INTO `actions` VALUES ('8', 'display', 'Visualizar a Pagina Principal', '2019-05-16 08:13:45', '2019-05-16 08:13:45');

-- ----------------------------
-- Table structure for aros
-- ----------------------------
DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros
-- ----------------------------
INSERT INTO `aros` VALUES ('1', '1', '1', '2019-05-14 08:30:18', '2019-05-14 08:30:18');
INSERT INTO `aros` VALUES ('2', '2', '2', '2019-05-14 08:30:48', '2019-05-14 08:30:48');
INSERT INTO `aros` VALUES ('3', '3', '3', '2019-05-15 19:05:43', '2019-05-15 19:05:43');

-- ----------------------------
-- Table structure for acos
-- ----------------------------
DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `controller_id` int(11) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('1', '1', '1', '2019-05-14 09:07:38', '2019-05-14 09:07:38');
INSERT INTO `acos` VALUES ('2', '1', '2', '2019-05-14 09:08:38', '2019-05-14 09:08:38');
INSERT INTO `acos` VALUES ('3', '1', '3', '2019-05-14 09:09:01', '2019-05-14 09:10:41');
INSERT INTO `acos` VALUES ('4', '1', '4', '2019-05-14 09:11:04', '2019-05-14 09:11:04');
INSERT INTO `acos` VALUES ('5', '1', '5', '2019-05-14 09:11:31', '2019-05-14 09:11:31');
INSERT INTO `acos` VALUES ('6', '1', '6', '2019-05-14 09:11:53', '2019-05-14 09:11:53');
INSERT INTO `acos` VALUES ('7', '1', '7', '2019-05-14 16:43:07', '2019-05-14 16:43:07');
INSERT INTO `acos` VALUES ('8', '2', '1', '2019-05-15 17:09:03', '2019-05-15 17:09:03');
INSERT INTO `acos` VALUES ('9', '2', '3', '2019-05-15 17:11:47', '2019-05-15 17:11:47');
INSERT INTO `acos` VALUES ('10', '3', '1', '2019-05-15 17:13:37', '2019-05-15 17:13:37');
INSERT INTO `acos` VALUES ('11', '3', '3', '2019-05-15 17:14:00', '2019-05-15 17:14:00');
INSERT INTO `acos` VALUES ('12', '4', '1', '2019-05-15 17:14:36', '2019-05-15 17:14:36');
INSERT INTO `acos` VALUES ('13', '4', '2', '2019-05-15 17:15:04', '2019-05-15 17:15:04');
INSERT INTO `acos` VALUES ('14', '4', '3', '2019-05-15 17:15:31', '2019-05-15 17:15:31');
INSERT INTO `acos` VALUES ('15', '4', '4', '2019-05-15 17:16:02', '2019-05-15 17:16:02');
INSERT INTO `acos` VALUES ('16', '5', '1', '2019-05-15 17:16:46', '2019-05-15 17:16:46');
INSERT INTO `acos` VALUES ('17', '5', '3', '2019-05-15 17:17:08', '2019-05-15 17:17:08');
INSERT INTO `acos` VALUES ('18', '6', '1', '2019-05-15 17:18:34', '2019-05-15 17:18:34');
INSERT INTO `acos` VALUES ('19', '6', '2', '2019-05-15 17:19:20', '2019-05-15 17:19:20');
INSERT INTO `acos` VALUES ('20', '6', '3', '2019-05-15 17:19:35', '2019-05-15 17:19:35');
INSERT INTO `acos` VALUES ('21', '6', '4', '2019-05-15 17:20:32', '2019-05-15 17:20:32');
INSERT INTO `acos` VALUES ('22', '7', '1', '2019-05-15 17:23:04', '2019-05-15 17:23:04');
INSERT INTO `acos` VALUES ('23', '7', '2', '2019-05-15 17:23:51', '2019-05-15 18:05:22');
INSERT INTO `acos` VALUES ('24', '7', '3', '2019-05-15 18:06:12', '2019-05-15 18:06:12');
INSERT INTO `acos` VALUES ('25', '7', '4', '2019-05-15 18:06:35', '2019-05-15 18:06:35');
INSERT INTO `acos` VALUES ('26', '8', '8', '2019-05-16 08:15:25', '2019-05-16 08:15:25');

-- ----------------------------
-- Table structure for acosroles
-- ----------------------------
DROP TABLE IF EXISTS `acosroles`;
CREATE TABLE `acosroles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aco_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `allowed` bit(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acosroles
-- ----------------------------
INSERT INTO `acosroles` VALUES ('1', '1', '1', '', '2019-05-14 09:21:03', '2019-05-14 09:21:03');
INSERT INTO `acosroles` VALUES ('2', '2', '1', '', '2019-05-14 09:21:43', '2019-05-14 09:21:43');
INSERT INTO `acosroles` VALUES ('3', '3', '1', '', '2019-05-14 09:22:31', '2019-05-14 09:22:31');
INSERT INTO `acosroles` VALUES ('4', '4', '1', '', '2019-05-14 09:23:08', '2019-05-14 09:23:08');
INSERT INTO `acosroles` VALUES ('5', '5', '1', '', '2019-05-14 09:23:27', '2019-05-14 09:23:27');
INSERT INTO `acosroles` VALUES ('6', '6', '1', '', '2019-05-14 09:23:43', '2019-05-14 09:24:02');
INSERT INTO `acosroles` VALUES ('7', '7', '1', '', '2019-05-15 07:21:48', '2019-05-15 07:21:48');
INSERT INTO `acosroles` VALUES ('8', '8', '1', '', '2019-05-15 18:24:01', '2019-05-15 18:24:01');
INSERT INTO `acosroles` VALUES ('9', '9', '1', '', '2019-05-15 18:24:35', '2019-05-15 18:24:35');
INSERT INTO `acosroles` VALUES ('10', '10', '1', '', '2019-05-15 18:25:05', '2019-05-15 18:25:05');
INSERT INTO `acosroles` VALUES ('11', '11', '1', '', '2019-05-15 18:25:41', '2019-05-15 18:25:41');
INSERT INTO `acosroles` VALUES ('12', '12', '1', '', '2019-05-15 18:33:30', '2019-05-15 18:33:30');
INSERT INTO `acosroles` VALUES ('13', '13', '1', '', '2019-05-15 18:34:03', '2019-05-15 18:34:03');
INSERT INTO `acosroles` VALUES ('14', '14', '1', '', '2019-05-15 18:34:54', '2019-05-15 18:34:54');
INSERT INTO `acosroles` VALUES ('15', '15', '1', '', '2019-05-15 18:35:20', '2019-05-15 18:35:20');
INSERT INTO `acosroles` VALUES ('16', '16', '1', '', '2019-05-15 18:36:50', '2019-05-15 18:36:50');
INSERT INTO `acosroles` VALUES ('17', '17', '1', '', '2019-05-15 18:38:19', '2019-05-15 18:38:19');
INSERT INTO `acosroles` VALUES ('18', '18', '1', '', '2019-05-15 18:38:33', '2019-05-15 18:39:35');
INSERT INTO `acosroles` VALUES ('19', '19', '1', '', '2019-05-15 18:38:56', '2019-05-15 18:40:07');
INSERT INTO `acosroles` VALUES ('20', '20', '1', '', '2019-05-15 18:41:23', '2019-05-15 18:41:23');
INSERT INTO `acosroles` VALUES ('21', '21', '1', '', '2019-05-15 18:42:07', '2019-05-15 18:42:07');
INSERT INTO `acosroles` VALUES ('22', '22', '1', '', '2019-05-15 18:43:15', '2019-05-15 18:43:15');
INSERT INTO `acosroles` VALUES ('23', '23', '1', '', '2019-05-15 18:44:36', '2019-05-15 18:44:36');
INSERT INTO `acosroles` VALUES ('24', '24', '1', '', '2019-05-15 18:45:31', '2019-05-15 18:45:31');
INSERT INTO `acosroles` VALUES ('25', '25', '1', '', '2019-05-15 18:46:36', '2019-05-15 18:46:36');
INSERT INTO `acosroles` VALUES ('26', '1', '2', '', '2019-05-15 19:07:40', '2019-05-15 19:12:33');
INSERT INTO `acosroles` VALUES ('27', '2', '2', '', '2019-05-15 19:13:15', '2019-05-15 19:13:15');
INSERT INTO `acosroles` VALUES ('28', '3', '2', '', '2019-05-15 19:13:47', '2019-05-15 19:13:47');
INSERT INTO `acosroles` VALUES ('29', '6', '2', '', '2019-05-15 19:16:42', '2019-05-15 19:16:42');
INSERT INTO `acosroles` VALUES ('30', '7', '2', '', '2019-05-15 19:17:00', '2019-05-15 19:17:00');
INSERT INTO `acosroles` VALUES ('31', '26', '1', '', '2019-05-16 08:21:02', '2019-05-16 08:21:02');
INSERT INTO `acosroles` VALUES ('32', '26', '2', '', '2019-05-16 08:21:32', '2019-05-16 08:21:32');
INSERT INTO `acosroles` VALUES ('33', '26', '3', '', '2019-05-16 08:23:10', '2019-05-16 08:23:10');
INSERT INTO `acosroles` VALUES ('34', '26', '4', '', '2019-05-16 08:23:39', '2019-05-16 08:23:39');
INSERT INTO `acosroles` VALUES ('35', '22', '2', '', '2019-05-16 08:27:01', '2019-05-16 08:36:15');
INSERT INTO `acosroles` VALUES ('36', '23', '2', '', '2019-05-16 08:27:26', '2019-05-16 09:41:31');

/**
*Estrutura de tabelas de MeA
*/

-- ----------------------------
-- Table structure for distritos
-- ----------------------------
DROP TABLE IF EXISTS `distritos`;
CREATE TABLE `distritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of distritos
-- ----------------------------
INSERT INTO `distritos` VALUES ('1', 'Distrito Municipal KaMpfumo', 'Distrito Municipal 1 - Distrito Municipal KaMpfumo.', null, null);
INSERT INTO `distritos` VALUES ('2', 'Distrito Municipal KaNhlamankulu', 'Distrito Municipal 2 - Distrito Municipal de Nhlamankulu.', null, null);
INSERT INTO `distritos` VALUES ('3', 'Distrito Municipal KaMaxakeni', 'Distrito Municipal 3 - Distrito Municipal KaMaxakeni', null, null);
INSERT INTO `distritos` VALUES ('4', 'Distrito Municipal KaMavota', 'Distrito Municipal 4. - Distrito Municipal KaMavota.', null, null);
INSERT INTO `distritos` VALUES ('5', 'Distrito Municipal KaMabukwana', 'Distrito Municipal 5 - Distrito Municipal KaMabukwana.', null, null);
INSERT INTO `distritos` VALUES ('6', 'Distrito Municipal KaTembe', 'Distrito Municpal da Catembe - Distrito Municipal Ka Tembe.', null, null);
INSERT INTO `distritos` VALUES ('7', 'Distrito Municipal KaNyaka', 'Distrito Municipal de Inhaca - Distrito Municipal KaNyaka.', null, null);

-- ----------------------------
-- Table structure for classificacaos
-- ----------------------------
DROP TABLE IF EXISTS `classificacaos`;
CREATE TABLE `classificacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of classificacaos
-- ----------------------------
INSERT INTO `classificacaos` VALUES ('1', 'Hospital Central', 'Geralmente podem ser centros de ensino e especialização', null, '2019-05-11 18:25:40');
INSERT INTO `classificacaos` VALUES ('2', 'Hospital Geral', 'Para o ensino e especializado', '2019-05-11 18:29:17', '2019-05-11 18:29:17');
INSERT INTO `classificacaos` VALUES ('3', 'Centro de Saúde', 'Pode ser de local de residência e trabalho', '2019-05-11 18:33:11', '2019-05-11 18:33:11');
INSERT INTO `classificacaos` VALUES ('4', 'Posto de Saúde', 'Pode ser de local de residência e de trabalho', '2019-05-11 18:36:33', '2019-05-11 18:36:33');
INSERT INTO `classificacaos` VALUES ('5', 'Clínica médica', 'Local de prestação de cuidados de saúde ', '2019-05-11 18:43:10', '2019-05-11 18:43:10');
INSERT INTO `classificacaos` VALUES ('6', 'Consultório médico', '', '2019-05-11 18:44:13', '2019-05-11 18:44:13');
INSERT INTO `classificacaos` VALUES ('7', 'Centro de reabilitação física e psíquica', 'Local de reabilitação de doentes toxico dependentes', '2019-05-11 18:50:42', '2019-05-11 18:50:42');
INSERT INTO `classificacaos` VALUES ('8', 'Postos de enfermagem', '', '2019-05-11 18:52:21', '2019-05-11 18:52:21');
INSERT INTO `classificacaos` VALUES ('9', 'Centro de diagnóstico', '', '2019-05-11 18:53:48', '2019-05-11 18:53:48');
INSERT INTO `classificacaos` VALUES ('10', 'Centro de formação de saúde', '', '2019-05-11 18:54:57', '2019-05-11 18:54:57');
INSERT INTO `classificacaos` VALUES ('11', 'Centro de transporte de doente', '', '2019-05-11 18:55:55', '2019-05-11 18:55:55');
INSERT INTO `classificacaos` VALUES ('12', 'Assistência médica ao domicílio ', '', '2019-05-11 18:59:01', '2019-05-11 18:59:01');
INSERT INTO `classificacaos` VALUES ('13', 'Centro de enfermagem', '', '2019-05-11 19:03:47', '2019-05-11 19:03:47');

-- -----------------------------
-- Table structure for unidades
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `nuit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_fundacao` date NOT NULL,
  `classificacao_id` int(11) NOT NULL,
  `distrito_id` int(11) NOT NULL,
  `numero_camas` int(3) NOT NULL,
  `endereco` text NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `unidade_esta_num_distrito` (`distrito_id`) USING BTREE,
  KEY `unidade_possui_uma_classificacao` (`classificacao_id`) USING BTREE,
  CONSTRAINT `unidade_esta_num_distrito` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `unidade_possui_uma_classificacao` FOREIGN KEY (`classificacao_id`) REFERENCES `classificacaos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES ('1', 'Clínica Sommechild', 'O nosso maior valor é a vida.', '12345678', 'info@sommechild.co.mz', '2019-04-30', '5', '1', '20', 'Av. Karl Max, Nº 1234', 'Está clinica trata todo tipo de doenças com máquina.', null, '2019-05-11 20:05:43');
INSERT INTO `unidades` VALUES ('2', 'ClineCare', 'O nosso maior valor e a vida', '145687598', 'clincare@unidade.mz', '2014-07-05', '5', '1', '50', 'Bairro da Sommerchild, Av. Armando Tivane ', 'Clinica especializada em tratamento de diversas doenças', '2019-05-03 22:36:23', '2019-05-11 20:06:25');

-- ----------------------------
-- Table structure for diagnosticos
-- ----------------------------
DROP TABLE IF EXISTS `diagnosticos`;
CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sintoma` varchar(255) DEFAULT NULL,
  `metodo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of diagnosticos
-- ----------------------------
INSERT INTO `diagnosticos` VALUES ('1', 'Malaria', 'Dores nas articulações, calafrios  ', 'Laboratório', '2019-05-03 23:02:24', '2019-05-03 23:02:24');
INSERT INTO `diagnosticos` VALUES ('2', 'Bronquite', 'Ma respiração, dores no diafragma e infecção no pulmão', 'Laboratório', '2019-05-03 23:04:28', '2019-05-03 23:04:28');

-- ----------------------------
-- Table structure for campanhas
-- ----------------------------
DROP TABLE IF EXISTS `campanhas`;
CREATE TABLE `campanhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desc_campanha` varchar(255) NOT NULL,
  `dose` int(10) NOT NULL,
  `unidade_sanitaria` int(10) NOT NULL,
  `brigada_movel` int(10) NOT NULL,
  `agente_comun_saude` int(10) NOT NULL,
  `interv_idade` varchar(10) NOT NULL,
  `mulheres_p_parto` int(10) NOT NULL,
  `comentario` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for pacientes
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `area_trabalho` varchar(255) DEFAULT NULL,
  `residencia` varchar(255) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacto` (`contacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) NOT NULL,
  `rght` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tratamentos
-- ----------------------------
DROP TABLE IF EXISTS `tratamentos`;
CREATE TABLE `tratamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contador_mensal` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `diagnostico_id` int(11) NOT NULL,
  `tratament` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `s_vacinacao` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
