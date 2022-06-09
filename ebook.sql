/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 80019
Source Host           : 127.0.0.1:3306
Source Database       : ebook

Target Server Type    : MYSQL
Target Server Version : 80019
File Encoding         : 65001

Date: 2020-07-13 21:15:46
*/

SET FOREIGN_KEY_CHECKS=0;

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
INSERT INTO `sjj` VALUES ('7', '归向', '核动力战舰', '神话', '这是一个前代文明和名为神灵星辰生命同黄昏后的世代。人类努力重建第二代文明，淘汰曾经的思想，不，其实是替代。蒸汽世代：钢铁轰鸣，重炮轰鸣，铆钉战船纵横大洋。电气世代：电灯闪烁，飞艇，无人机蜂起。以及那辉煌的核子曙光。启明世代：金融在运作，社会在赛博和社会化之间左右徘徊，新思潮，新武器，新战术。行星航行世代：战舰控制，行星际穿梭的核能战机驾驶者，以及星表指挥官。...', '2020-07-08', '7');
INSERT INTO `sjj` VALUES ('8', '龙族V 悼亡者归来', '江南', '其他', '热血龙族，少年归来！这是地狱中的魔王们相互撕咬。铁剑和利爪撕裂空气，留下霜冻和火焰的痕迹，血液刚刚飞溅出来，就被高温化作血红色的蒸汽，冲击波在长长的走廊上来来去去，早已没有任何完整的玻璃，连这座建筑物都摇摇欲坠。', '2020-07-08', '50');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '112', '1', '5f06fd590c48a', '20200709', '1');
INSERT INTO `user` VALUES ('2', '1212', '1212', '5f083d8f9c3da', '20200710', '1');
INSERT INTO `user` VALUES ('3', '孟凡杰', '孟凡杰', '5f083a11a4666', '20200710', '1');
INSERT INTO `user` VALUES ('4', '4', '4', '5f083a310e383', '20200710', null);

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
