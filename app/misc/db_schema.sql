#####################################################################################################################
#                                                                                                                   #
# user 테이블                                                                   
#                                                                                                                   #
#####################################################################################################################

CREATE TABLE user (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL DEFAULT '',
	password VARCHAR(50) binary NOT NULL,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	email VARCHAR(100) NOT NULL,
	suburb VARCHAR(50) NOT NULL DEFAULT '',
	paid TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	user_since DATETIME NOT NULL,
	index user_index1(suburb)
);