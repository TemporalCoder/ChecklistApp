# File name: C:/Users/rober/Desktop/database.sql
# Creation date: 05/13/2020
# Created by SQLite to MySQL 2.3 [Demo]
# --------------------------------------------------
# More conversion tools at http://www.convert-in.com

SET NAMES utf8;

#
# Table structure for table 'droid_user'
#

DROP TABLE IF EXISTS `droid_user` CASCADE;
CREATE TABLE `droid_user` (
  `id` INT NOT NULL,
  `droid_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'droid_user'
#

LOCK TABLES `droid_user` WRITE;
INSERT IGNORE INTO `droid_user`(`id`, `droid_id`, `user_id`, `created_at`, `updated_at`) VALUES(1, 1, 1, NULL, NULL), (2, 2, 1, NULL, NULL), (3, 3, 1, NULL, NULL);
UNLOCK TABLES;

#
# Table structure for table 'droids'
#

DROP TABLE IF EXISTS `droids` CASCADE;
CREATE TABLE `droids` (
  `id` INT NOT NULL,
  `class` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `path` LONGTEXT CHARACTER SET utf8,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'droids'
#

LOCK TABLES `droids` WRITE;
INSERT IGNORE INTO `droids`(`id`, `class`, `path`, `created_at`, `updated_at`) VALUES(1, 'R2', NULL, '2020-04-27 21:19:28', '2020-04-27 21:19:28'), (2, 'R4', NULL, '2020-04-27 21:57:13', '2020-04-27 21:57:13'), (3, 'R5', NULL, '2020-04-27 21:57:51', '2020-04-27 21:57:51'), (6, 'R9', NULL, '2020-04-27 21:56:08', '2020-04-27 21:56:29'), (7, 'R6', NULL, '2020-04-27 21:59:22', '2020-04-27 21:59:22'), (8, 'R7', NULL, '2020-04-27 22:04:52', '2020-04-27 22:04:52'), (9, 'R9', NULL, '2020-04-27 22:05:13', '2020-04-27 22:05:13'), (10, 'Chopper', NULL, '2020-04-27 22:35:14', '2020-04-27 22:35:14'), (11, 'BD-1', NULL, '2020-04-27 22:35:24', '2020-04-27 22:35:24'), (12, 'T3-M4', NULL, '2020-05-12 22:53:29', '2020-05-12 22:53:29');
UNLOCK TABLES;

#
# Table structure for table 'failed_jobs'
#

DROP TABLE IF EXISTS `failed_jobs` CASCADE;
CREATE TABLE `failed_jobs` (
  `id` INT NOT NULL,
  `connection` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `queue` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `payload` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `exception` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `failed_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'failed_jobs'
#

LOCK TABLES `failed_jobs` WRITE;
UNLOCK TABLES;

#
# Table structure for table 'migrations'
#

DROP TABLE IF EXISTS `migrations` CASCADE;
CREATE TABLE `migrations` (
  `id` INT NOT NULL,
  `migration` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `batch` INT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'migrations'
#

LOCK TABLES `migrations` WRITE;
INSERT IGNORE INTO `migrations`(`id`, `migration`, `batch`) VALUES(1, '2014_10_12_100000_create_password_resets_table', 1), (2, '2019_08_19_000000_create_failed_jobs_table', 1), (3, '2020_04_18_142139_create_tasks_table', 1), (4, '2020_04_23_213304_create_roles_table', 1), (5, '2020_04_23_213421_create_role_user_table', 1), (6, '2020_04_23_235815_create_foreign_keys_for_role_user_table', 1), (7, '2020_04_24_192558_create_users_table', 1), (8, '2020_04_24_192723_create_userlink_table', 1), (9, '2020_04_24_192741_create_droids_table', 1), (10, '2020_05_08_182854_create__droid__user_table', 2);
UNLOCK TABLES;

#
# Table structure for table 'password_resets'
#

DROP TABLE IF EXISTS `password_resets` CASCADE;
CREATE TABLE `password_resets` (
  `email` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `token` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `created_at` DATETIME
) ENGINE=InnoDB;

#
# Dumping data for table 'password_resets'
#

LOCK TABLES `password_resets` WRITE;
UNLOCK TABLES;

#
# Table structure for table 'role_user'
#

DROP TABLE IF EXISTS `role_user` CASCADE;
CREATE TABLE `role_user` (
  `id` INT NOT NULL,
  `role_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'role_user'
#

LOCK TABLES `role_user` WRITE;
INSERT IGNORE INTO `role_user`(`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES(1, 1, 1, NULL, NULL), (3, 3, 3, NULL, NULL), (5, 1, 4, NULL, NULL), (6, 3, 5, NULL, NULL), (7, 1, 5, NULL, NULL);
UNLOCK TABLES;

#
# Table structure for table 'roles'
#

DROP TABLE IF EXISTS `roles` CASCADE;
CREATE TABLE `roles` (
  `id` INT NOT NULL,
  `name` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'roles'
#

LOCK TABLES `roles` WRITE;
INSERT IGNORE INTO `roles`(`id`, `name`, `created_at`, `updated_at`) VALUES(1, 'admin', '2020-04-27 20:44:37', '2020-04-27 20:44:37'), (2, 'designer', '2020-04-27 20:44:37', '2020-04-27 20:44:37'), (3, 'user', '2020-04-27 20:44:37', '2020-04-27 20:44:37');
UNLOCK TABLES;

#
# Table structure for table 'sqlite_sequence'
#

DROP TABLE IF EXISTS `sqlite_sequence` CASCADE;
CREATE TABLE `sqlite_sequence` (
  `name` LONGTEXT CHARACTER SET utf8,
  `seq` LONGTEXT CHARACTER SET utf8
) ENGINE=InnoDB;

#
# Dumping data for table 'sqlite_sequence'
#

LOCK TABLES `sqlite_sequence` WRITE;
INSERT IGNORE INTO `sqlite_sequence`(`name`, `seq`) VALUES('migrations', 10), ('roles', 3), ('users', 5), ('role_user', 7), ('droids', 12), ('droid_user', 9);
UNLOCK TABLES;

#
# Table structure for table 'tasks'
#

DROP TABLE IF EXISTS `tasks` CASCADE;
CREATE TABLE `tasks` (
  `id` INT NOT NULL,
  `description` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`),
  INDEX `tasks_user_id_index` (`user_id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'tasks'
#

LOCK TABLES `tasks` WRITE;
UNLOCK TABLES;

#
# Table structure for table 'users'
#

DROP TABLE IF EXISTS `users` CASCADE;
CREATE TABLE `users` (
  `id` INT NOT NULL,
  `name` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `email` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `email_verified_at` DATETIME,
  `password` LONGTEXT CHARACTER SET utf8 NOT NULL,
  `remember_token` LONGTEXT CHARACTER SET utf8,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#
# Dumping data for table 'users'
#

LOCK TABLES `users` WRITE;
INSERT IGNORE INTO `users`(`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(1, 'Admin User', 'admin@admin.com', NULL, '$2y$10$QuBRGNaY/HScFCQf4yfJOe5lRS9QTaMHqpSQTAK.ZtP9en3fwpNFG', NULL, '2020-04-27 20:44:37', '2020-04-27 20:44:37'), (3, 'User', 'user@user.com', NULL, '$2y$10$VYnex7iDwYomblGJEFxqGudgM2fQN3T2TxNd.oPnsrNwsDpMPz2v.', NULL, '2020-04-27 20:44:37', '2020-04-27 20:44:37'), (4, 'Rob Howdle', 'robhowdle94@gmail.com', NULL, '$2y$10$iAJGnC06ofK2yy7W20uCuegu5eRQ1mNRFAG.ye2mp7KEXKK2pBOf2', NULL, '2020-05-08 20:24:07', '2020-05-08 20:24:07'), (5, 'Admin', 'admin@email.com', NULL, '$2y$10$EuGkeXmh41UDpiMAvQywaOQAdiiic5x8nHPvxU5K81tadgj/tslkW', NULL, '2020-05-11 22:05:08', '2020-05-11 22:05:08');
UNLOCK TABLES;
