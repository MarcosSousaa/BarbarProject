create database mvc_tutorial;
 use mvc_tutorial;
CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(50) NOT NULL,
`email` varchar(50) NOT NULL,
`senha` varchar(40) NOT NULL,
PRIMARY KEY (`id`)
) ;

 
insert into usuario (email,senha) values ('marcos@mcglorb.com','14011995');