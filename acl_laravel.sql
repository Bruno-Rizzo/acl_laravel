/*
 Navicat Premium Data Transfer

 Source Server         : Xampp
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : acl_laravel

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 12/10/2021 23:56:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for permissoes
-- ----------------------------
DROP TABLE IF EXISTS `permissoes`;
CREATE TABLE `permissoes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcao` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `permissao` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissoes
-- ----------------------------
INSERT INTO `permissoes` VALUES (1, 'Administrador', 'show_usuario,edit_usuario,add_usuario,del_usuario,show_permissao,edit_permissao,add_permissao,del_permissao,show_menu_home,show_menu_usuarios,show_menu_lista_usuarios,show_menu_novo_usuario,show_menu_configuracoes,show_menu_lista_permissoes,show_menu_nova_permissao');
INSERT INTO `permissoes` VALUES (2, 'Master', 'show_usuario,edit_usuario,show_permissao,show_menu_home,show_menu_usuarios,show_menu_lista_usuarios,show_menu_configuracoes,show_menu_lista_permissoes');
INSERT INTO `permissoes` VALUES (3, 'Coordenador', 'show_menu_home');
INSERT INTO `permissoes` VALUES (4, 'Analista', 'show_menu_home');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_permissao` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Bruno Rizzo', 'brunorizzo@gmail.com', '$2y$10$DdHM/UXRt1mw3slSsBcwzObRibWmBRN7Uumu0P1u8oIWUCe/LQc3e', 1);
INSERT INTO `usuarios` VALUES (2, 'Usuário Master', 'master@gmail.com', '$2y$10$O6eDntSRyMaCMQcJI.fDTOHxZjqq/F6WPFoicWNtqvReXvQWQvEJ2', 2);
INSERT INTO `usuarios` VALUES (3, 'Usuário Coordenador', 'coordenador@gmail.com', '$2y$10$WqMQpaQCTy4AKAPErIo4CuvXsNkkHzK6vH9KK2YUFujWSqQZAM3/2', 3);
INSERT INTO `usuarios` VALUES (4, 'Usuário Analista', 'analista@gmail.com', '$2y$10$zTzKzWyCAsl7eqXPSvKmye3er.WntOSLM0P2Ax2fjcGgHtjN37lKu', 4);

SET FOREIGN_KEY_CHECKS = 1;
