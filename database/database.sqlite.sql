BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `people` (
	`id`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`name`	TEXT NOT NULL,
	`mail`	TEXT NOT NULL,
	`Field4`	INTEGER
);
INSERT INTO `people` VALUES (1,'taro','taro@yamada.jp',35);
INSERT INTO `people` VALUES (2,'hanako','hanako@flower.com',24);
INSERT INTO `people` VALUES (3,'sachiko','sachi@happy.org',47);
COMMIT;
