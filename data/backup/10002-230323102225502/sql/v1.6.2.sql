ALTER TABLE `ey_admin` ADD COLUMN `desc`  varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '工作内容' AFTER `syn_users_id`;
ALTER TABLE `ey_archives` MODIFY COLUMN `origin`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '来源' AFTER `is_diyattr`;
ALTER TABLE `ey_archives` MODIFY COLUMN `sales_num`  int(10) NOT NULL DEFAULT 0 COMMENT '总销售量' AFTER `old_price`;
ALTER TABLE `ey_arctype` ADD COLUMN `empty_logic`  tinyint(1) NULL DEFAULT 0 COMMENT '空内容逻辑' AFTER `typearcrank`;
UPDATE `ey_arctype` SET `empty_logic`='1' WHERE `current_channel`='6';
DELETE FROM `ey_channelfield` WHERE `name` = 'empty_logic' AND `channel_id` = '-99';
INSERT INTO `ey_channelfield` (`name`, `channel_id`, `title`, `dtype`, `define`, `maxlength`, `dfvalue`, `dfvalue_unit`, `remark`, `is_screening`, `is_release`, `ifeditable`, `ifrequire`, `ifsystem`, `ifmain`, `ifcontrol`, `sort_order`, `status`, `add_time`, `update_time`) VALUES ('empty_logic', '-99', '空内容逻辑', 'switch', 'tinyint(1)', '1', '0', '', '', '0', '0', '1', '0', '1', '1', '1', '100', '1', '1533524780', '1533524780');
ALTER TABLE `ey_users_score` MODIFY COLUMN `type`  tinyint(1) NULL DEFAULT 1 COMMENT '类型:1-提问,2-回答,3-最佳答案4-悬赏退回,5-每日签到,6-管理员编辑,7-问题悬赏/获得悬赏,8-消费赠送积分,9-积分兑换/退回' AFTER `id`;
DELETE FROM `ey_admin_menu` WHERE `menu_id` = '2004018';
INSERT INTO `ey_admin_menu` (`menu_id`, `title`, `controller_name`, `action_name`, `param`, `icon`, `is_menu`, `is_switch`, `sort_order`, `status`, `lang`, `add_time`, `update_time`) VALUES ('2004018', '留言管理', 'Form', 'index', '', 'iconfont e-biaodanguanli', '0', '1', '100', '1', 'cn', '1677037793', '1677146423');
UPDATE `ey_admin_menu` SET `title`='搜索管理' WHERE `menu_id` = '2004022';
UPDATE `ey_admin_menu` SET `title`='待审文档', `param`='|menu|1' WHERE `menu_id` = '1004';
UPDATE `ey_admin_menu` SET `param`='|mt20|1|menu|1' WHERE `menu_id` = '2004006';
UPDATE `ey_quickentry` SET `controller`='Form', `action`='index', `vars`='', `laytext`='留言管理' WHERE `controller`='Guestbook';
ALTER TABLE `ey_users_money` MODIFY COLUMN `pay_method`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '' COMMENT '支付方式，wechat为微信支付，alipay为支付宝支付，balance为余额支付' AFTER `status`;
ALTER TABLE `ey_guestbook` MODIFY COLUMN `typeid`  int(11) NULL DEFAULT 0 COMMENT '栏目ID/表单ID' AFTER `aid`;
ALTER TABLE `ey_guestbook` ADD COLUMN `form_type`  tinyint(1) NULL DEFAULT 0 COMMENT '数据分类：0=留言模型，1=自由表单' AFTER `aid`;
ALTER TABLE `ey_guestbook` ADD COLUMN `is_star`  tinyint(1) NULL DEFAULT 0 COMMENT '标记星号' AFTER `is_read`;
ALTER TABLE `ey_guestbook` ADD COLUMN `source`  tinyint(1) NULL DEFAULT 0 COMMENT '提交来源：1=电脑端，2=手机端' AFTER `is_star`;
ALTER TABLE `ey_guestbook_attr` ADD COLUMN `form_type`  tinyint(1) NULL DEFAULT 0 COMMENT '数据分类：0=留言模型，1=自由表单' AFTER `aid`;
ALTER TABLE `ey_guestbook_attribute` MODIFY COLUMN `typeid`  int(11) UNSIGNED NULL DEFAULT 0 COMMENT '栏目ID/表单ID' AFTER `attr_name`;
ALTER TABLE `ey_guestbook_attribute` ADD COLUMN `form_type`  tinyint(1) NULL DEFAULT 0 COMMENT '数据分类：0=留言模型，1=自由表单' AFTER `typeid`;
UPDATE `ey_guestbook` SET `source`='1';
DROP TABLE IF EXISTS `ey_form_field`;
DROP TABLE IF EXISTS `ey_form_list`;
DROP TABLE IF EXISTS `ey_form_value`;

DROP TABLE IF EXISTS `ey_form`;
CREATE TABLE `ey_form` (
  `form_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增表单ID',
  `form_name` varchar(255) NOT NULL DEFAULT '' COMMENT '表单名称',
  `intro` text NOT NULL COMMENT '表单描述，预留',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '表单状态，0关闭，1开启',
  `attr_auto` tinyint(1) DEFAULT '0' COMMENT '自动标签：0=否，1=是',
  `lang` varchar(10) NOT NULL DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='表单管理表';

CREATE TABLE IF NOT EXISTS `ey_search_locking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT '0' COMMENT '用户ID',
  `ip` varchar(20) DEFAULT '' COMMENT 'ip',
  `locking_time` int(11) DEFAULT '0' COMMENT '锁定时间',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='搜索记录锁定表';

CREATE TABLE IF NOT EXISTS `ey_users_forward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT '0',
  `aid` int(10) DEFAULT '0' COMMENT '文档id',
  `channel` int(10) DEFAULT '0' COMMENT '模型',
  `typeid` int(10) DEFAULT '0' COMMENT '栏目',
  `title` varchar(200) DEFAULT '' COMMENT '网站标题',
  `litpic` varchar(255) DEFAULT '' COMMENT '缩略图',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='转发记录';

CREATE TABLE IF NOT EXISTS `ey_users_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT '0',
  `aid` int(10) DEFAULT '0' COMMENT '文档id',
  `channel` int(10) DEFAULT '0' COMMENT '模型',
  `typeid` int(10) DEFAULT '0' COMMENT '栏目',
  `title` varchar(200) DEFAULT '' COMMENT '网站标题',
  `litpic` varchar(255) DEFAULT '' COMMENT '缩略图',
  `lang` varchar(50) DEFAULT 'cn' COMMENT '语言标识',
  `add_time` int(11) DEFAULT '0' COMMENT '新增时间',
  `update_time` int(11) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='我喜欢的';