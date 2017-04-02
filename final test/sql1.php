# comment

CREATE TABLE `comment` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`user_id` int(11) NULL DEFAULT NULL,
`product_id` int(11) NULL DEFAULT NULL,
`text` text NULL COLLATE utf8_czech_ci DEFAULT NULL,
`is_banned` tinyint(1) NOT NULL DEFAULT 0,
`created_at` datetime NULL DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

select first 10 comments that were created before '2016-12-12 00:00:00' and order them by created_at column.

    SELECT * FROM `comment` WHERE `created_at` < '2016-12-12 00:00:00' LIMIT 10;