<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>db</title>
</head>

<body><?php require 'db2.php';
   			dbInit();
			$sql="/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 80019
Source Host           : 127.0.0.1:3306
Source Database       : ebook

Target Server Type    : MYSQL
Target Server Version : 80019
File Encoding         : 65001

Date: 2020-07-07 09:40:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 1
-- ----------------------------
DROP TABLE IF EXISTS `1`;
CREATE TABLE `1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `内容` longtext CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 1
-- ----------------------------
INSERT INTO `1` VALUES ('1', '第一章  诞生');

-- ----------------------------
-- Table structure for sjj
-- ----------------------------
DROP TABLE IF EXISTS `sjj`;
CREATE TABLE `sjj` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `作者` varchar(255) DEFAULT NULL,
  `类别` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `简介` text,
  `时间` date DEFAULT NULL,
  `章节` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sjj
-- ----------------------------
INSERT INTO `sjj` VALUES ('5', '诡秘之主', '爱潜水的乌贼', '恐怖', '蒸汽与机械的浪潮中，谁能触及非凡？历史和黑暗的迷雾里，又是谁在耳语？我从诡秘中醒来，睁眼看见这个世界：枪械，大炮，巨舰，飞空艇，差分机；魔药，占卜，诅咒，倒吊人，封印物……光明依旧照耀，神秘从未远离，这是一段“愚者”的传说。', '2020-07-06', '1420');
INSERT INTO `sjj` VALUES ('6', '仙逆', '耳根', '神话', '逆为仙，顺为凡，只在一念间。。。。。。', '2020-07-06', '4258');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `id_m` varchar(255) DEFAULT NULL,
  `tim_id` varchar(255) DEFAULT NULL,
  `gm` int DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '112', '1', '5f02d9a65b971', '20200706', '1');

-- ----------------------------
-- Table structure for 类别
-- ----------------------------
DROP TABLE IF EXISTS `类别`;
CREATE TABLE `类别` (
  `id` int NOT NULL,
  `名称` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of 类别
-- ----------------------------
INSERT INTO `类别` VALUES ('1', '神话');
INSERT INTO `类别` VALUES ('2', '武侠');
INSERT INTO `类别` VALUES ('3', '恐怖');
INSERT INTO `类别` VALUES ('4', '科幻');
INSERT INTO `类别` VALUES ('5', '其他');
";
query($sql);
			 ?>
</body>
</html>