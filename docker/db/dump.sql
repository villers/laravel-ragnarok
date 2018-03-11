-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: RO_Play_DataBase_db
-- ------------------------------------------------------
-- Server version	5.7.21-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acc_reg_num`
--

DROP TABLE IF EXISTS `acc_reg_num`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acc_reg_num` (
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`,`key`,`index`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `acc_reg_str`
--

DROP TABLE IF EXISTS `acc_reg_str`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acc_reg_str` (
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` varchar(254) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`,`key`,`index`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `achievement`
--

DROP TABLE IF EXISTS `achievement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achievement` (
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `id` bigint(11) unsigned NOT NULL,
  `count1` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count2` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count3` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count4` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count5` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count6` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count7` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count8` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count9` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count10` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `completed` datetime DEFAULT NULL,
  `rewarded` datetime DEFAULT NULL,
  PRIMARY KEY (`char_id`,`id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `auction`
--

DROP TABLE IF EXISTS `auction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auction` (
  `auction_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) unsigned NOT NULL DEFAULT '0',
  `seller_name` varchar(30) NOT NULL DEFAULT '',
  `buyer_id` int(11) unsigned NOT NULL DEFAULT '0',
  `buyer_name` varchar(30) NOT NULL DEFAULT '',
  `price` int(11) unsigned NOT NULL DEFAULT '0',
  `buynow` int(11) unsigned NOT NULL DEFAULT '0',
  `hours` smallint(6) NOT NULL DEFAULT '0',
  `timestamp` int(11) unsigned NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `item_name` varchar(50) NOT NULL DEFAULT '',
  `type` smallint(6) NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`auction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `battlesquare`
--

DROP TABLE IF EXISTS `battlesquare`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `battlesquare` (
  `bs_char_id` int(11) NOT NULL,
  `bs_best_record` int(11) NOT NULL,
  `bs_nb_best_record` int(11) NOT NULL,
  UNIQUE KEY `bs_char_id` (`bs_char_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `bonus_script`
--

DROP TABLE IF EXISTS `bonus_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonus_script` (
  `char_id` int(11) unsigned NOT NULL,
  `script` text NOT NULL,
  `tick` int(11) unsigned NOT NULL DEFAULT '0',
  `flag` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `icon` smallint(3) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `buyingstore_items`
--

DROP TABLE IF EXISTS `buyingstore_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyingstore_items` (
  `buyingstore_id` int(10) unsigned NOT NULL,
  `index` smallint(5) unsigned NOT NULL,
  `item_id` int(10) unsigned NOT NULL,
  `amount` smallint(5) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `buyingstores`
--

DROP TABLE IF EXISTS `buyingstores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyingstores` (
  `id` int(10) unsigned NOT NULL,
  `account_id` int(11) unsigned NOT NULL,
  `char_id` int(10) unsigned NOT NULL,
  `sex` enum('F','M') NOT NULL DEFAULT 'M',
  `map` varchar(20) NOT NULL,
  `x` smallint(5) unsigned NOT NULL,
  `y` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL,
  `limit` int(10) unsigned NOT NULL,
  `body_direction` char(1) NOT NULL DEFAULT '4',
  `head_direction` char(1) NOT NULL DEFAULT '0',
  `sit` char(1) NOT NULL DEFAULT '1',
  `autotrade` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cart_inventory`
--

DROP TABLE IF EXISTS `cart_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `char_id` int(11) NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL DEFAULT '0',
  `equip` int(11) unsigned NOT NULL DEFAULT '0',
  `identify` smallint(6) NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `expire_time` int(11) unsigned NOT NULL DEFAULT '0',
  `bound` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `char`
--

DROP TABLE IF EXISTS `char`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `char` (
  `char_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `char_num` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `class` smallint(6) unsigned NOT NULL DEFAULT '0',
  `base_level` smallint(6) unsigned NOT NULL DEFAULT '1',
  `job_level` smallint(6) unsigned NOT NULL DEFAULT '1',
  `base_exp` bigint(20) unsigned NOT NULL DEFAULT '0',
  `job_exp` bigint(20) unsigned NOT NULL DEFAULT '0',
  `zeny` int(11) unsigned NOT NULL DEFAULT '0',
  `str` smallint(4) unsigned NOT NULL DEFAULT '0',
  `agi` smallint(4) unsigned NOT NULL DEFAULT '0',
  `vit` smallint(4) unsigned NOT NULL DEFAULT '0',
  `int` smallint(4) unsigned NOT NULL DEFAULT '0',
  `dex` smallint(4) unsigned NOT NULL DEFAULT '0',
  `luk` smallint(4) unsigned NOT NULL DEFAULT '0',
  `max_hp` int(11) unsigned NOT NULL DEFAULT '0',
  `hp` int(11) unsigned NOT NULL DEFAULT '0',
  `max_sp` int(11) unsigned NOT NULL DEFAULT '0',
  `sp` int(11) unsigned NOT NULL DEFAULT '0',
  `status_point` int(11) unsigned NOT NULL DEFAULT '0',
  `skill_point` int(11) unsigned NOT NULL DEFAULT '0',
  `option` int(11) NOT NULL DEFAULT '0',
  `karma` tinyint(3) NOT NULL DEFAULT '0',
  `manner` smallint(6) NOT NULL DEFAULT '0',
  `party_id` int(11) unsigned NOT NULL DEFAULT '0',
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `pet_id` int(11) unsigned NOT NULL DEFAULT '0',
  `homun_id` int(11) unsigned NOT NULL DEFAULT '0',
  `elemental_id` int(11) unsigned NOT NULL DEFAULT '0',
  `hair` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `hair_color` smallint(5) unsigned NOT NULL DEFAULT '0',
  `clothes_color` smallint(5) unsigned NOT NULL DEFAULT '0',
  `body` smallint(5) unsigned NOT NULL DEFAULT '0',
  `weapon` smallint(6) unsigned NOT NULL DEFAULT '0',
  `shield` smallint(6) unsigned NOT NULL DEFAULT '0',
  `head_top` smallint(6) unsigned NOT NULL DEFAULT '0',
  `head_mid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `head_bottom` smallint(6) unsigned NOT NULL DEFAULT '0',
  `robe` smallint(6) unsigned NOT NULL DEFAULT '0',
  `last_map` varchar(11) NOT NULL DEFAULT '',
  `last_x` smallint(4) unsigned NOT NULL DEFAULT '53',
  `last_y` smallint(4) unsigned NOT NULL DEFAULT '111',
  `save_map` varchar(11) NOT NULL DEFAULT '',
  `save_x` smallint(4) unsigned NOT NULL DEFAULT '53',
  `save_y` smallint(4) unsigned NOT NULL DEFAULT '111',
  `partner_id` int(11) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(2) NOT NULL DEFAULT '0',
  `father` int(11) unsigned NOT NULL DEFAULT '0',
  `mother` int(11) unsigned NOT NULL DEFAULT '0',
  `child` int(11) unsigned NOT NULL DEFAULT '0',
  `fame` int(11) unsigned NOT NULL DEFAULT '0',
  `rename` smallint(3) unsigned NOT NULL DEFAULT '0',
  `delete_date` int(11) unsigned NOT NULL DEFAULT '0',
  `moves` int(11) unsigned NOT NULL DEFAULT '0',
  `unban_time` int(11) unsigned NOT NULL DEFAULT '0',
  `font` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `uniqueitem_counter` int(11) unsigned NOT NULL DEFAULT '0',
  `sex` enum('M','F','U') NOT NULL DEFAULT 'U',
  `hotkey_rowshift` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `clan_id` int(11) unsigned NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `title_id` int(11) unsigned NOT NULL DEFAULT '0',
  `show_equip` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `totem` int(11) DEFAULT NULL,
  PRIMARY KEY (`char_id`),
  UNIQUE KEY `name_key` (`name`),
  KEY `account_id` (`account_id`),
  KEY `party_id` (`party_id`),
  KEY `guild_id` (`guild_id`),
  KEY `online` (`online`)
) ENGINE=MyISAM AUTO_INCREMENT=150022 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `char_reg_num`
--

DROP TABLE IF EXISTS `char_reg_num`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `char_reg_num` (
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`key`,`index`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `char_reg_str`
--

DROP TABLE IF EXISTS `char_reg_str`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `char_reg_str` (
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` varchar(254) NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`key`,`index`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `charlog`
--

DROP TABLE IF EXISTS `charlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `charlog` (
  `time` datetime NOT NULL,
  `char_msg` varchar(255) NOT NULL DEFAULT 'char select',
  `account_id` int(11) NOT NULL DEFAULT '0',
  `char_num` tinyint(4) NOT NULL DEFAULT '0',
  `name` varchar(23) NOT NULL DEFAULT '',
  `str` int(11) unsigned NOT NULL DEFAULT '0',
  `agi` int(11) unsigned NOT NULL DEFAULT '0',
  `vit` int(11) unsigned NOT NULL DEFAULT '0',
  `int` int(11) unsigned NOT NULL DEFAULT '0',
  `dex` int(11) unsigned NOT NULL DEFAULT '0',
  `luk` int(11) unsigned NOT NULL DEFAULT '0',
  `hair` tinyint(4) NOT NULL DEFAULT '0',
  `hair_color` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clan`
--

DROP TABLE IF EXISTS `clan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clan` (
  `clan_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL DEFAULT '',
  `master` varchar(24) NOT NULL DEFAULT '',
  `mapname` varchar(24) NOT NULL DEFAULT '',
  `max_member` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`clan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `clan_alliance`
--

DROP TABLE IF EXISTS `clan_alliance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clan_alliance` (
  `clan_id` int(11) unsigned NOT NULL DEFAULT '0',
  `opposition` int(11) unsigned NOT NULL DEFAULT '0',
  `alliance_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  PRIMARY KEY (`clan_id`,`alliance_id`),
  KEY `alliance_id` (`alliance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `db_roulette`
--

DROP TABLE IF EXISTS `db_roulette`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `db_roulette` (
  `index` int(11) NOT NULL DEFAULT '0',
  `level` smallint(5) unsigned NOT NULL,
  `item_id` smallint(5) unsigned NOT NULL,
  `amount` smallint(5) unsigned NOT NULL DEFAULT '1',
  `flag` smallint(5) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `elemental`
--

DROP TABLE IF EXISTS `elemental`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elemental` (
  `ele_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `char_id` int(11) NOT NULL,
  `class` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `mode` int(11) unsigned NOT NULL DEFAULT '1',
  `hp` int(11) unsigned NOT NULL DEFAULT '0',
  `sp` int(11) unsigned NOT NULL DEFAULT '0',
  `max_hp` int(11) unsigned NOT NULL DEFAULT '0',
  `max_sp` int(11) unsigned NOT NULL DEFAULT '0',
  `atk1` mediumint(6) unsigned NOT NULL DEFAULT '0',
  `atk2` mediumint(6) unsigned NOT NULL DEFAULT '0',
  `matk` mediumint(6) unsigned NOT NULL DEFAULT '0',
  `aspd` smallint(4) unsigned NOT NULL DEFAULT '0',
  `def` smallint(4) unsigned NOT NULL DEFAULT '0',
  `mdef` smallint(4) unsigned NOT NULL DEFAULT '0',
  `flee` smallint(4) unsigned NOT NULL DEFAULT '0',
  `hit` smallint(4) unsigned NOT NULL DEFAULT '0',
  `life_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ele_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `char_id` int(11) NOT NULL DEFAULT '0',
  `friend_account` int(11) NOT NULL DEFAULT '0',
  `friend_id` int(11) NOT NULL DEFAULT '0',
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `global_acc_reg_num`
--

DROP TABLE IF EXISTS `global_acc_reg_num`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `global_acc_reg_num` (
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`,`key`,`index`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `global_acc_reg_str`
--

DROP TABLE IF EXISTS `global_acc_reg_str`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `global_acc_reg_str` (
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `key` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL DEFAULT '',
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` varchar(254) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`,`key`,`index`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild`
--

DROP TABLE IF EXISTS `guild`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild` (
  `guild_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL DEFAULT '',
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `master` varchar(24) NOT NULL DEFAULT '',
  `guild_lv` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `connect_member` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `max_member` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `average_lv` smallint(6) unsigned NOT NULL DEFAULT '1',
  `exp` bigint(20) unsigned NOT NULL DEFAULT '0',
  `next_exp` int(11) unsigned NOT NULL DEFAULT '0',
  `skill_point` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `mes1` varchar(60) NOT NULL DEFAULT '',
  `mes2` varchar(120) NOT NULL DEFAULT '',
  `emblem_len` int(11) unsigned NOT NULL DEFAULT '0',
  `emblem_id` int(11) unsigned NOT NULL DEFAULT '0',
  `emblem_data` blob,
  `last_master_change` datetime DEFAULT NULL,
  `isTryNwoeDone` int(11) DEFAULT NULL,
  `IsItemGiven` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`guild_id`,`char_id`),
  UNIQUE KEY `guild_id` (`guild_id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_alliance`
--

DROP TABLE IF EXISTS `guild_alliance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_alliance` (
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `opposition` int(11) unsigned NOT NULL DEFAULT '0',
  `alliance_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  PRIMARY KEY (`guild_id`,`alliance_id`),
  KEY `alliance_id` (`alliance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_castle`
--

DROP TABLE IF EXISTS `guild_castle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_castle` (
  `castle_id` int(11) unsigned NOT NULL DEFAULT '0',
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `economy` int(11) unsigned NOT NULL DEFAULT '0',
  `defense` int(11) unsigned NOT NULL DEFAULT '0',
  `triggerE` int(11) unsigned NOT NULL DEFAULT '0',
  `triggerD` int(11) unsigned NOT NULL DEFAULT '0',
  `nextTime` int(11) unsigned NOT NULL DEFAULT '0',
  `payTime` int(11) unsigned NOT NULL DEFAULT '0',
  `createTime` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleC` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG0` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG1` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG2` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG3` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG4` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG5` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG6` int(11) unsigned NOT NULL DEFAULT '0',
  `visibleG7` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`castle_id`),
  KEY `guild_id` (`guild_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_expulsion`
--

DROP TABLE IF EXISTS `guild_expulsion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_expulsion` (
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  `mes` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`guild_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_member`
--

DROP TABLE IF EXISTS `guild_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_member` (
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `hair` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `hair_color` smallint(6) unsigned NOT NULL DEFAULT '0',
  `gender` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `class` smallint(6) unsigned NOT NULL DEFAULT '0',
  `lv` smallint(6) unsigned NOT NULL DEFAULT '0',
  `exp` bigint(20) unsigned NOT NULL DEFAULT '0',
  `exp_payper` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `position` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  PRIMARY KEY (`guild_id`,`char_id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_position`
--

DROP TABLE IF EXISTS `guild_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_position` (
  `guild_id` int(9) unsigned NOT NULL DEFAULT '0',
  `position` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  `mode` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `exp_mode` tinyint(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`guild_id`,`position`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_skill`
--

DROP TABLE IF EXISTS `guild_skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_skill` (
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `id` smallint(11) unsigned NOT NULL DEFAULT '0',
  `lv` tinyint(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`guild_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `guild_storage`
--

DROP TABLE IF EXISTS `guild_storage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guild_storage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `guild_id` int(11) unsigned NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `amount` int(11) unsigned NOT NULL DEFAULT '0',
  `equip` int(11) unsigned NOT NULL DEFAULT '0',
  `identify` smallint(6) unsigned NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `expire_time` int(11) unsigned NOT NULL DEFAULT '0',
  `bound` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `guild_id` (`guild_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `homunculus`
--

DROP TABLE IF EXISTS `homunculus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homunculus` (
  `homun_id` int(11) NOT NULL AUTO_INCREMENT,
  `char_id` int(11) NOT NULL,
  `class` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `prev_class` mediumint(9) NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  `level` smallint(4) NOT NULL DEFAULT '0',
  `exp` bigint(20) unsigned NOT NULL DEFAULT '0',
  `intimacy` int(12) NOT NULL DEFAULT '0',
  `hunger` smallint(4) NOT NULL DEFAULT '0',
  `str` smallint(4) unsigned NOT NULL DEFAULT '0',
  `agi` smallint(4) unsigned NOT NULL DEFAULT '0',
  `vit` smallint(4) unsigned NOT NULL DEFAULT '0',
  `int` smallint(4) unsigned NOT NULL DEFAULT '0',
  `dex` smallint(4) unsigned NOT NULL DEFAULT '0',
  `luk` smallint(4) unsigned NOT NULL DEFAULT '0',
  `hp` int(11) unsigned NOT NULL DEFAULT '0',
  `max_hp` int(11) unsigned NOT NULL DEFAULT '0',
  `sp` int(11) NOT NULL DEFAULT '0',
  `max_sp` int(11) NOT NULL DEFAULT '0',
  `skill_point` smallint(4) unsigned NOT NULL DEFAULT '0',
  `alive` tinyint(2) NOT NULL DEFAULT '1',
  `rename_flag` tinyint(2) NOT NULL DEFAULT '0',
  `vaporize` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`homun_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `hotkey`
--

DROP TABLE IF EXISTS `hotkey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotkey` (
  `char_id` int(11) NOT NULL,
  `hotkey` tinyint(2) unsigned NOT NULL,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `itemskill_id` int(11) unsigned NOT NULL DEFAULT '0',
  `skill_lvl` tinyint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`hotkey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `interlog`
--

DROP TABLE IF EXISTS `interlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interlog` (
  `time` datetime NOT NULL,
  `log` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `interreg`
--

DROP TABLE IF EXISTS `interreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interreg` (
  `varname` varchar(11) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`varname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `amount` int(11) unsigned NOT NULL DEFAULT '0',
  `equip` int(11) unsigned NOT NULL DEFAULT '0',
  `identify` smallint(6) NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `expire_time` int(11) unsigned NOT NULL DEFAULT '0',
  `favorite` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bound` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1012 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ipbanlist`
--

DROP TABLE IF EXISTS `ipbanlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipbanlist` (
  `list` varchar(255) NOT NULL DEFAULT '',
  `btime` datetime NOT NULL,
  `rtime` datetime NOT NULL,
  `reason` varchar(255) NOT NULL DEFAULT '',
  KEY `list` (`list`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `item_cash_db`
--

DROP TABLE IF EXISTS `item_cash_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_cash_db` (
  `tab` smallint(6) NOT NULL,
  `item_id` smallint(5) unsigned NOT NULL,
  `price` mediumint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tab`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `item_cash_db2`
--

DROP TABLE IF EXISTS `item_cash_db2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_cash_db2` (
  `tab` smallint(6) NOT NULL,
  `item_id` smallint(5) unsigned NOT NULL,
  `price` mediumint(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tab`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `item_db`
--

DROP TABLE IF EXISTS `item_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_db` (
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name_english` varchar(50) NOT NULL DEFAULT '',
  `name_japanese` varchar(50) NOT NULL DEFAULT '',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `price_buy` mediumint(8) unsigned DEFAULT NULL,
  `price_sell` mediumint(8) unsigned DEFAULT NULL,
  `weight` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attack` smallint(5) unsigned DEFAULT NULL,
  `defence` smallint(5) unsigned DEFAULT NULL,
  `range` tinyint(2) unsigned DEFAULT NULL,
  `slots` tinyint(2) unsigned DEFAULT NULL,
  `equip_jobs` bigint(20) unsigned DEFAULT NULL,
  `equip_upper` tinyint(2) unsigned DEFAULT NULL,
  `equip_genders` tinyint(1) unsigned DEFAULT NULL,
  `equip_locations` mediumint(7) unsigned DEFAULT NULL,
  `weapon_level` tinyint(1) unsigned DEFAULT NULL,
  `equip_level` tinyint(3) unsigned DEFAULT NULL,
  `refineable` tinyint(1) unsigned DEFAULT NULL,
  `view` smallint(5) unsigned DEFAULT NULL,
  `script` text,
  `equip_script` text,
  `unequip_script` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueAegisName` (`name_english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `item_db2`
--

DROP TABLE IF EXISTS `item_db2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_db2` (
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name_english` varchar(50) NOT NULL DEFAULT '',
  `name_japanese` varchar(50) NOT NULL DEFAULT '',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `price_buy` mediumint(8) unsigned DEFAULT NULL,
  `price_sell` mediumint(8) unsigned DEFAULT NULL,
  `weight` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attack` smallint(5) unsigned DEFAULT NULL,
  `defence` smallint(5) unsigned DEFAULT NULL,
  `range` tinyint(2) unsigned DEFAULT NULL,
  `slots` tinyint(2) unsigned DEFAULT NULL,
  `equip_jobs` bigint(20) unsigned DEFAULT NULL,
  `equip_upper` tinyint(2) unsigned DEFAULT NULL,
  `equip_genders` tinyint(1) unsigned DEFAULT NULL,
  `equip_locations` mediumint(7) unsigned DEFAULT NULL,
  `weapon_level` tinyint(1) unsigned DEFAULT NULL,
  `equip_level` tinyint(3) unsigned DEFAULT NULL,
  `refineable` tinyint(1) unsigned DEFAULT NULL,
  `view` smallint(5) unsigned DEFAULT NULL,
  `script` text,
  `equip_script` text,
  `unequip_script` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UniqueAegisName` (`name_english`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(23) NOT NULL DEFAULT '',
  `user_pass` varchar(32) NOT NULL DEFAULT '',
  `sex` enum('M','F','S') NOT NULL DEFAULT 'M',
  `email` varchar(39) NOT NULL DEFAULT '',
  `group_id` tinyint(3) NOT NULL DEFAULT '0',
  `state` int(11) unsigned NOT NULL DEFAULT '0',
  `unban_time` int(11) unsigned NOT NULL DEFAULT '0',
  `expiration_time` int(11) unsigned NOT NULL DEFAULT '0',
  `logincount` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `lastlogin` datetime DEFAULT NULL,
  `last_ip` varchar(100) NOT NULL DEFAULT '',
  `birthdate` date DEFAULT NULL,
  `character_slots` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pincode` varchar(4) NOT NULL DEFAULT '',
  `pincode_change` int(11) unsigned NOT NULL DEFAULT '0',
  `vip_time` int(11) unsigned NOT NULL DEFAULT '0',
  `old_group` tinyint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_id`),
  KEY `name` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2000010 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `send_name` varchar(30) NOT NULL DEFAULT '',
  `send_id` int(11) unsigned NOT NULL DEFAULT '0',
  `dest_name` varchar(30) NOT NULL DEFAULT '',
  `dest_id` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(45) NOT NULL DEFAULT '',
  `message` varchar(255) NOT NULL DEFAULT '',
  `time` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `zeny` int(11) unsigned NOT NULL DEFAULT '0',
  `type` smallint(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mail_attachments`
--

DROP TABLE IF EXISTS `mail_attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail_attachments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `index` smallint(5) unsigned NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `amount` int(11) unsigned NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `identify` smallint(6) NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `bound` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mapreg`
--

DROP TABLE IF EXISTS `mapreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapreg` (
  `varname` varchar(32) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `index` int(11) unsigned NOT NULL DEFAULT '0',
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`varname`,`index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `market`
--

DROP TABLE IF EXISTS `market`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `market` (
  `name` varchar(50) NOT NULL DEFAULT '',
  `nameid` smallint(5) unsigned NOT NULL,
  `price` int(11) unsigned NOT NULL,
  `amount` smallint(5) unsigned NOT NULL,
  `flag` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`,`nameid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `memo`
--

DROP TABLE IF EXISTS `memo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `memo` (
  `memo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `map` varchar(11) NOT NULL DEFAULT '',
  `x` smallint(4) unsigned NOT NULL DEFAULT '0',
  `y` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`memo_id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mercenary`
--

DROP TABLE IF EXISTS `mercenary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercenary` (
  `mer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `char_id` int(11) NOT NULL,
  `class` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `hp` int(11) unsigned NOT NULL DEFAULT '0',
  `sp` int(11) unsigned NOT NULL DEFAULT '0',
  `kill_counter` int(11) NOT NULL,
  `life_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mercenary_owner`
--

DROP TABLE IF EXISTS `mercenary_owner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercenary_owner` (
  `char_id` int(11) NOT NULL,
  `merc_id` int(11) NOT NULL DEFAULT '0',
  `arch_calls` int(11) NOT NULL DEFAULT '0',
  `arch_faith` int(11) NOT NULL DEFAULT '0',
  `spear_calls` int(11) NOT NULL DEFAULT '0',
  `spear_faith` int(11) NOT NULL DEFAULT '0',
  `sword_calls` int(11) NOT NULL DEFAULT '0',
  `sword_faith` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mob_db`
--

DROP TABLE IF EXISTS `mob_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mob_db` (
  `ID` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `Sprite` text NOT NULL,
  `kName` text NOT NULL,
  `iName` text NOT NULL,
  `LV` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `HP` int(9) unsigned NOT NULL DEFAULT '0',
  `SP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `EXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `JEXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `Range1` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ATK1` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ATK2` smallint(6) unsigned NOT NULL DEFAULT '0',
  `DEF` smallint(6) unsigned NOT NULL DEFAULT '0',
  `MDEF` smallint(6) unsigned NOT NULL DEFAULT '0',
  `STR` smallint(6) unsigned NOT NULL DEFAULT '0',
  `AGI` smallint(6) unsigned NOT NULL DEFAULT '0',
  `VIT` smallint(6) unsigned NOT NULL DEFAULT '0',
  `INT` smallint(6) unsigned NOT NULL DEFAULT '0',
  `DEX` smallint(6) unsigned NOT NULL DEFAULT '0',
  `LUK` smallint(6) unsigned NOT NULL DEFAULT '0',
  `Range2` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Range3` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Scale` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Race` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Element` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Mode` int(11) unsigned NOT NULL DEFAULT '0',
  `Speed` smallint(6) unsigned NOT NULL DEFAULT '0',
  `aDelay` smallint(6) unsigned NOT NULL DEFAULT '0',
  `aMotion` smallint(6) unsigned NOT NULL DEFAULT '0',
  `dMotion` smallint(6) unsigned NOT NULL DEFAULT '0',
  `MEXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `MVP1id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP1per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `MVP2id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP2per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `MVP3id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP3per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop1id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop1per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop2id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop2per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop3id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop3per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop4id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop4per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop5id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop5per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop6id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop6per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop7id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop7per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop8id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop8per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop9id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop9per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `DropCardid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `DropCardper` smallint(9) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mob_db2`
--

DROP TABLE IF EXISTS `mob_db2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mob_db2` (
  `ID` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `Sprite` text NOT NULL,
  `kName` text NOT NULL,
  `iName` text NOT NULL,
  `LV` tinyint(6) unsigned NOT NULL DEFAULT '0',
  `HP` int(9) unsigned NOT NULL DEFAULT '0',
  `SP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `EXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `JEXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `Range1` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `ATK1` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ATK2` smallint(6) unsigned NOT NULL DEFAULT '0',
  `DEF` smallint(6) unsigned NOT NULL DEFAULT '0',
  `MDEF` smallint(6) unsigned NOT NULL DEFAULT '0',
  `STR` smallint(6) unsigned NOT NULL DEFAULT '0',
  `AGI` smallint(6) unsigned NOT NULL DEFAULT '0',
  `VIT` smallint(6) unsigned NOT NULL DEFAULT '0',
  `INT` smallint(6) unsigned NOT NULL DEFAULT '0',
  `DEX` smallint(6) unsigned NOT NULL DEFAULT '0',
  `LUK` smallint(6) unsigned NOT NULL DEFAULT '0',
  `Range2` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Range3` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Scale` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Race` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Element` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Mode` int(11) unsigned NOT NULL DEFAULT '0',
  `Speed` smallint(6) unsigned NOT NULL DEFAULT '0',
  `aDelay` smallint(6) unsigned NOT NULL DEFAULT '0',
  `aMotion` smallint(6) unsigned NOT NULL DEFAULT '0',
  `dMotion` smallint(6) unsigned NOT NULL DEFAULT '0',
  `MEXP` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `MVP1id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP1per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `MVP2id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP2per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `MVP3id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `MVP3per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop1id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop1per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop2id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop2per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop3id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop3per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop4id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop4per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop5id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop5per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop6id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop6per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop7id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop7per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop8id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop8per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `Drop9id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `Drop9per` smallint(9) unsigned NOT NULL DEFAULT '0',
  `DropCardid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `DropCardper` smallint(9) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mob_skill_db`
--

DROP TABLE IF EXISTS `mob_skill_db`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mob_skill_db` (
  `MOB_ID` smallint(6) NOT NULL,
  `INFO` text NOT NULL,
  `STATE` text NOT NULL,
  `SKILL_ID` smallint(6) NOT NULL,
  `SKILL_LV` tinyint(4) NOT NULL,
  `RATE` smallint(4) NOT NULL,
  `CASTTIME` mediumint(9) NOT NULL,
  `DELAY` int(9) NOT NULL,
  `CANCELABLE` text NOT NULL,
  `TARGET` text NOT NULL,
  `CONDITION` text NOT NULL,
  `CONDITION_VALUE` text,
  `VAL1` mediumint(9) DEFAULT NULL,
  `VAL2` mediumint(9) DEFAULT NULL,
  `VAL3` mediumint(9) DEFAULT NULL,
  `VAL4` mediumint(9) DEFAULT NULL,
  `VAL5` mediumint(9) DEFAULT NULL,
  `EMOTION` text,
  `CHAT` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `mob_skill_db2`
--

DROP TABLE IF EXISTS `mob_skill_db2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mob_skill_db2` (
  `MOB_ID` smallint(6) NOT NULL,
  `INFO` text NOT NULL,
  `STATE` text NOT NULL,
  `SKILL_ID` smallint(6) NOT NULL,
  `SKILL_LV` tinyint(4) NOT NULL,
  `RATE` smallint(4) NOT NULL,
  `CASTTIME` mediumint(9) NOT NULL,
  `DELAY` int(9) NOT NULL,
  `CANCELABLE` text NOT NULL,
  `TARGET` text NOT NULL,
  `CONDITION` text NOT NULL,
  `CONDITION_VALUE` text,
  `VAL1` mediumint(9) DEFAULT NULL,
  `VAL2` mediumint(9) DEFAULT NULL,
  `VAL3` mediumint(9) DEFAULT NULL,
  `VAL4` mediumint(9) DEFAULT NULL,
  `VAL5` mediumint(9) DEFAULT NULL,
  `EMOTION` text,
  `CHAT` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `naval_woe`
--

DROP TABLE IF EXISTS `naval_woe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `naval_woe` (
  `ship_id` int(11) NOT NULL AUTO_INCREMENT,
  `guilde_proprio` text,
  `level_ship` int(11) DEFAULT NULL,
  `duree_nwoe` int(11) DEFAULT NULL,
  `nwoe_chest` int(11) DEFAULT NULL,
  `arch_ship` int(11) DEFAULT '0',
  `sword_ship` int(11) DEFAULT '0',
  `soldier_ship` int(11) NOT NULL DEFAULT '0',
  `ship_status` int(11) NOT NULL DEFAULT '0',
  `nwoe_invest` int(11) DEFAULT NULL,
  PRIMARY KEY (`ship_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_category_id_foreign` (`category_id`),
  CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `party` (
  `party_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL DEFAULT '',
  `exp` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `item` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `leader_id` int(11) unsigned NOT NULL DEFAULT '0',
  `leader_char` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`party_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pet`
--

DROP TABLE IF EXISTS `pet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pet` (
  `pet_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `class` mediumint(9) unsigned NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `level` smallint(4) unsigned NOT NULL DEFAULT '0',
  `egg_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `equip` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `intimate` smallint(9) unsigned NOT NULL DEFAULT '0',
  `hungry` smallint(9) unsigned NOT NULL DEFAULT '0',
  `rename_flag` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `incubate` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `quest`
--

DROP TABLE IF EXISTS `quest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quest` (
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `quest_id` int(10) unsigned NOT NULL,
  `state` enum('0','1','2') NOT NULL DEFAULT '0',
  `time` int(11) unsigned NOT NULL DEFAULT '0',
  `count1` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count2` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `count3` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`quest_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ragsrvinfo`
--

DROP TABLE IF EXISTS `ragsrvinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ragsrvinfo` (
  `index` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `exp` int(11) unsigned NOT NULL DEFAULT '0',
  `jexp` int(11) unsigned NOT NULL DEFAULT '0',
  `drop` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `nameid` smallint(5) unsigned NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`nameid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sc_data`
--

DROP TABLE IF EXISTS `sc_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sc_data` (
  `account_id` int(11) unsigned NOT NULL,
  `char_id` int(11) unsigned NOT NULL,
  `type` smallint(11) unsigned NOT NULL,
  `tick` int(11) NOT NULL,
  `val1` int(11) NOT NULL DEFAULT '0',
  `val2` int(11) NOT NULL DEFAULT '0',
  `val3` int(11) NOT NULL DEFAULT '0',
  `val4` int(11) NOT NULL DEFAULT '0',
  KEY `account_id` (`account_id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `site_onlinepeak`
--

DROP TABLE IF EXISTS `site_onlinepeak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_onlinepeak` (
  `id` int(11) NOT NULL,
  `players` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `char_id` int(11) unsigned NOT NULL DEFAULT '0',
  `id` smallint(11) unsigned NOT NULL DEFAULT '0',
  `lv` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `flag` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `skill_homunculus`
--

DROP TABLE IF EXISTS `skill_homunculus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill_homunculus` (
  `homun_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `lv` smallint(6) NOT NULL,
  PRIMARY KEY (`homun_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `skillcooldown`
--

DROP TABLE IF EXISTS `skillcooldown`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skillcooldown` (
  `account_id` int(11) unsigned NOT NULL,
  `char_id` int(11) unsigned NOT NULL,
  `skill` smallint(11) unsigned NOT NULL DEFAULT '0',
  `tick` int(11) NOT NULL,
  KEY `account_id` (`account_id`),
  KEY `char_id` (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `sstatus`
--

DROP TABLE IF EXISTS `sstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sstatus` (
  `index` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `user` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `storage`
--

DROP TABLE IF EXISTS `storage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(11) unsigned NOT NULL DEFAULT '0',
  `nameid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `amount` smallint(11) unsigned NOT NULL DEFAULT '0',
  `equip` int(11) unsigned NOT NULL DEFAULT '0',
  `identify` smallint(6) unsigned NOT NULL DEFAULT '0',
  `refine` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `attribute` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `card0` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `card3` smallint(5) unsigned NOT NULL DEFAULT '0',
  `option_id0` smallint(5) NOT NULL DEFAULT '0',
  `option_val0` smallint(5) NOT NULL DEFAULT '0',
  `option_parm0` tinyint(3) NOT NULL DEFAULT '0',
  `option_id1` smallint(5) NOT NULL DEFAULT '0',
  `option_val1` smallint(5) NOT NULL DEFAULT '0',
  `option_parm1` tinyint(3) NOT NULL DEFAULT '0',
  `option_id2` smallint(5) NOT NULL DEFAULT '0',
  `option_val2` smallint(5) NOT NULL DEFAULT '0',
  `option_parm2` tinyint(3) NOT NULL DEFAULT '0',
  `option_id3` smallint(5) NOT NULL DEFAULT '0',
  `option_val3` smallint(5) NOT NULL DEFAULT '0',
  `option_parm3` tinyint(3) NOT NULL DEFAULT '0',
  `option_id4` smallint(5) NOT NULL DEFAULT '0',
  `option_val4` smallint(5) NOT NULL DEFAULT '0',
  `option_parm4` tinyint(3) NOT NULL DEFAULT '0',
  `expire_time` int(11) unsigned NOT NULL DEFAULT '0',
  `bound` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `unique_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `totem`
--

DROP TABLE IF EXISTS `totem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `totem` (
  `id_map_territoire` int(11) NOT NULL,
  `region` varchar(39) CHARACTER SET utf8 NOT NULL DEFAULT 'null',
  `map_territoire` tinytext,
  `conquerant_territoire` tinytext,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id_map_territoire` (`id_map_territoire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vending_items`
--

DROP TABLE IF EXISTS `vending_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vending_items` (
  `vending_id` int(10) unsigned NOT NULL,
  `index` smallint(5) unsigned NOT NULL,
  `cartinventory_id` int(10) unsigned NOT NULL,
  `amount` smallint(5) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vendings`
--

DROP TABLE IF EXISTS `vendings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendings` (
  `id` int(10) unsigned NOT NULL,
  `account_id` int(11) unsigned NOT NULL,
  `char_id` int(10) unsigned NOT NULL,
  `sex` enum('F','M') NOT NULL DEFAULT 'M',
  `map` varchar(20) NOT NULL,
  `x` smallint(5) unsigned NOT NULL,
  `y` smallint(5) unsigned NOT NULL,
  `title` varchar(80) NOT NULL,
  `body_direction` char(1) NOT NULL DEFAULT '4',
  `head_direction` char(1) NOT NULL DEFAULT '0',
  `sit` char(1) NOT NULL DEFAULT '1',
  `autotrade` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-11 17:37:35
