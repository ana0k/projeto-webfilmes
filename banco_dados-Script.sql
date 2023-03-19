SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
CREATE SCHEMA IF NOT EXISTS `banco_vinicola` DEFAULT CHARACTER SET utf8 ;


CREATE TABLE IF NOT EXISTS `banco_vinicola`.`cadastro` (
  `idCadastro` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nome` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `Telefone` BIGINT(12) NOT NULL,
  `Senha` VARCHAR(50) NOT NULL
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

CREATE TABLE IF NOT EXISTS `banco_vinicola`.`contato` (
  `idContato` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `Nome` VARCHAR(50) NOT NULL,
  `Email` VARCHAR(50) NOT NULL,
  `Telefone` BIGINT(12) NOT NULL,
  `Senha` VARCHAR(50) NOT NULL,
  `Mensagem` VARCHAR(100) NOT NULL
)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



use banco_vinicola;

INSERT INTO cadastro (Nome, Email, Telefone, Senha)
VALUES ("Maria Silveira", "Mariasilveira@gmail.com", "51999556677","55577");

INSERT INTO contato (Nome, Email, Telefone, Senha, Mensagem)
VALUES ("Maria Silveira", "Mariasilveira@gmail.com", "51999556677","55577", "Gostaria de elogiar os vinhos de vocês e falar que amei e me tornei uma grande cliente.");


select *from cadastro;
select * from contato;