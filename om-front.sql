/*
 Navicat Premium Data Transfer

 Source Server         : WSL2
 Source Server Type    : MySQL
 Source Server Version : 80034
 Source Host           : localhost:33061
 Source Schema         : om-front

 Target Server Type    : MySQL
 Target Server Version : 80034
 File Encoding         : 65001

 Date: 20/09/2023 14:31:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'paretnt 1', 0);
INSERT INTO `categories` VALUES (2, 'test_2', 0);
INSERT INTO `categories` VALUES (3, 'sdsfd fsdf', 4);
INSERT INTO `categories` VALUES (4, 'parent 22', 0);
INSERT INTO `categories` VALUES (5, 'test_5', 1);
INSERT INTO `categories` VALUES (6, 'test_6', 1);
INSERT INTO `categories` VALUES (7, 'test_7', 1);
INSERT INTO `categories` VALUES (8, 'test_8', 1);
INSERT INTO `categories` VALUES (9, 'test_9', 0);
INSERT INTO `categories` VALUES (10, 'test_10', 4);
INSERT INTO `categories` VALUES (11, 'tasdas', 4);
INSERT INTO `categories` VALUES (12, 'sdsfd fsdf', 4);

SET FOREIGN_KEY_CHECKS = 1;
