CREATE TABLE `ecommerce_brands` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `logo_media_id` int(11) unsigned DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `description` text,
  `url` varchar(250) DEFAULT NULL,
  `is_published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE `ecommerce_products` ADD `ecommerce_brand_id` INT(11)  UNSIGNED  NULL  DEFAULT NULL  AFTER `cover_media_id`;

