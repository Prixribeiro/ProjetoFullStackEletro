CREATE DATABASE ` fullstackeletro `;
USE ` fullstackeletro `;

-- Host: localhost    Database: fullstackeletro


--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `precoantigo` decimal(8,2) NOT NULL,
  `precoatual` decimal(8,2) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
;



INSERT INTO `produto` VALUES 
(1,'geladeira','Geladeira Brastemp Frost Free 2 portas 540 litros',6389.00,5019.00,'IMAGENS/geladeira-brastemp-2postas.jpeg'),
(2,'geladeira','Geladeira Samsung Black Inox 400 litros',5389.00,4389.00,'IMAGENS/geladeirasamsung.jpeg'),
(3,'geladeira','Geladeira Frost Free Electrolux 433 litros',5089.00,4830.00,'IMAGENS/geladeira-inox.jpeg'),
(4,'fogao','Fogão Electrolux 4 bocas',689.00,530.00,'IMAGENS/fogaoeletrolux.jpeg'),
(5,'fogao','Fogão Brastemp Grill Inox 4 bocas',729.00,670.00,'IMAGENS/fogao-brastemp.png'),
(6,'lavaloucas',' Lava Louças Eletrolux 4 funções',1729.00,1670.00,'IMAGENS/lavalouca-eletrolux.jpeg'),
(7,'lavaroupas','Lava Roupas Brastemp 15kg',1729.00,1430.00,'IMAGENS/maquinadelavar.jpeg'),
(8,'lavaroupas','Lava & Seca Panasonic 15kg',3729.00,3130.00,'IMAGENS/lavadora-panasonic.png'),
(9,'microondas','Microondas Panasonic Inox com função Grill',789.00,630.00,'IMAGENS/microondas-panasonic.jpg'),
(10,'microondas','Microondas Philco Vidro Espelhado',989.00,730.00,'IMAGENS/microondas-philco.png'),
(11,'microondas','Microondas Panasonic Preto Vidro Temperado',689.00,590.00,'IMAGENS/microondas_panasonic_preto.jpeg'),
(12,'lavaloucas',' Lava Louça Electrolux 14 serviços',4349.00,4000.00,'IMAGENS/lava-louca-electrolux-14 servicos.jpeg');

