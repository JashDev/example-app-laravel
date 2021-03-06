/*
 Navicat Premium Data Transfer

 Source Server         : Localhost 8
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3307
 Source Schema         : basic_api

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 06/03/2021 11:03:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int NOT NULL,
  `usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'user', '123412432');
INSERT INTO `usuarios` VALUES (2, 'usuario2', '12312');
INSERT INTO `usuarios` VALUES (3, 'usuario2', '12312');
INSERT INTO `usuarios` VALUES (5, 'j', 'jp');
INSERT INTO `usuarios` VALUES (34, 'asdfasdf', 'jaszcvxvdklfj');
INSERT INTO `usuarios` VALUES (100, 'jhojhan', 'jasdklfj');

SET FOREIGN_KEY_CHECKS = 1;
