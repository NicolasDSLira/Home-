/* MER Home+: */
CREATE DATABASE homePlus DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE homePlus;

CREATE TABLE tbCliente (
    codCliente INT PRIMARY KEY AUTO_INCREMENT,
    nomeCliente VARCHAR(50),
    cpfCliente CHAR(11),
    datanascCliente DATE,
    logradouroCliente VARCHAR(50),
    numerocasaCliente INT,
    genero char,
    bairroCliente VARCHAR(50),
    senhaCliente CHAR(20),
    emailCliente VARCHAR(50),
    UNIQUE (codCliente, cpfCliente, emailCliente)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbServicos (
    codServicos INT PRIMARY KEY UNIQUE AUTO_INCREMENT, 
    nomeServico VARCHAR(50),
    descServico TEXT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbPrestador (
    codPrestador INT PRIMARY KEY AUTO_INCREMENT,
    nomePrestador VARCHAR(50),
    cpfPrestador CHAR(11),
    emailPrestador varchar(50),
    datanascPrestador DATE,
    cidadePrestadorServico VARCHAR(50),
    senhaPrestador CHAR(50),
    UNIQUE (codPrestador, cpfPrestador, emailPrestador)
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbFonePrestador (
    codFonePrestador INT PRIMARY KEY UNIQUE AUTO_INCREMENT,
    numFonePrestador CHAR(15),
    codPrestador INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbFoneCliente (
    codFoneCliente  INT PRIMARY KEY UNIQUE AUTO_INCREMENT,
    numFoneCliente CHAR(15),
    codCliente INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbContrato (
    codContrato INT PRIMARY KEY UNIQUE AUTO_INCREMENT,
    dataContrato DATE,
    codPrestador INT,
    codCliente INT,
    codStatusContrato INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbStatusContrato (
    codStatusContrato INT PRIMARY KEY AUTO_INCREMENT,
    descStatus TEXT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbServicoPrestado (
    codServicoPrestado INT PRIMARY KEY AUTO_INCREMENT,
    codServico INT,
    codPrestador INT,
    valorMinimo INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbServicoContrato (
    codServicoContrato INT PRIMARY KEY AUTO_INCREMENT,
    codContrato INT,
    codServicoPrestado INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE tbForPagamento (
    codFormPagamento INT PRIMARY KEY AUTO_INCREMENT,
    descFormpagamento VARCHAR(50),
    codContrato INT
)CHARACTER SET utf8 COLLATE utf8_general_ci;
 
 
ALTER TABLE tbFonePrestador ADD CONSTRAINT FK_tbFonePrestador_3
    FOREIGN KEY (codPrestador)
    REFERENCES tbPrestador (codPrestador);
 
ALTER TABLE tbFoneCliente ADD CONSTRAINT FK_tbFoneCliente_3
    FOREIGN KEY (codCliente)
    REFERENCES tbCliente (codCliente);
 
ALTER TABLE tbContrato ADD CONSTRAINT FK_tbContrato_3
    FOREIGN KEY (codCliente)
    REFERENCES tbCliente (codCliente);
 
ALTER TABLE tbContrato ADD CONSTRAINT FK_tbContrato_4
    FOREIGN KEY (codPrestador)
    REFERENCES tbPrestador (codPrestador);
 
ALTER TABLE tbContrato ADD CONSTRAINT FK_tbContrato_5
    FOREIGN KEY (codStatusContrato)
    REFERENCES tbStatusContrato (codStatusContrato);
 
ALTER TABLE tbServicoPrestado ADD CONSTRAINT FK_tbServicoPrestado_2
    FOREIGN KEY (codPrestador)
    REFERENCES tbPrestador (codPrestador);
 
ALTER TABLE tbServicoPrestado ADD CONSTRAINT FK_tbServicoPrestado_3
    FOREIGN KEY (codServico)
    REFERENCES tbServicos (codServicos);
 
ALTER TABLE tbServicoContrato ADD CONSTRAINT FK_tbServicoContrato_2
    FOREIGN KEY (codContrato)
    REFERENCES tbContrato (codContrato);
 
ALTER TABLE tbServicoContrato ADD CONSTRAINT FK_tbServicoContrato_3
    FOREIGN KEY (codServicoPrestado)
    REFERENCES tbServicoPrestado (codServicoPrestado);
 
ALTER TABLE tbForPagamento ADD CONSTRAINT FK_tbForPagamento_2
    FOREIGN KEY (codContrato)
    REFERENCES tbContrato (codContrato);
    
    
    
/*SELECT'S*/

SELECT * FROM `tbcliente`;
SELECT * FROM `tbcontrato` WHERE `codCliente` = '1';
SELECT * FROM `tbcontrato` WHERE `codPrestador` = '1';
SELECT * FROM `tbfonecliente` WHERE `codCliente` = 1;
SELECT * FROM `tbfoneprestador` WHERE `codPrestador` = '1';
SELECT * FROM `tbforpagamento` WHERE `codContrato` = '10';
SELECT * FROM `tbprestador` WHERE `codPrestador` = '1';
SELECT * FROM `tbservicocontrato` WHERE `codContrato`  = '1';
SELECT * FROM `tbservicoprestado` WHERE `codPrestador` = '1';
SELECT * FROM `tbservicos`;
SELECT * FROM `tbstatuscontrato`;

/*INSERT'S*/

INSERT INTO `tbcliente`
(`nomeCliente`, `cpfCliente`, `datanascCliente`, `logradouroCliente`, `numerocasaCliente`, `genero`, `bairroCliente`, `senhaCliente`, `emailCliente`) 
VALUES 
('Nome','CPF','Data Nascimento','Logradouro','Num Casa','GENERO','Bairro','Senha','email@email.com');

INSERT INTO `tbcontrato`
(`dataContrato`, `codPrestador`, `codCliente`, `codStatusContrato`)
 VALUES 
 ('Data contrato','Cod Prestador','Cod Cliente','Cod Status');
 
 INSERT INTO `tbfonecliente`
 (`numFoneCliente`, `codCliente`) 
 VALUES 
 ('Num Telefone','cod Cliente');
 
 INSERT INTO `tbfoneprestador`
 (`numFonePrestador`, `codPrestador`) 
 VALUES 
 ('Num Telefone','cod Prestador');
 
 INSERT INTO `tbforpagamento`
 (`descFormpagamento`, `codContrato`) 
 VALUES 
 ('Descrição Forma de Pagamento','cod Contrato');
 
 INSERT INTO `tbprestador`
 (`nomePrestador`, `cpfPrestador`, `emailPrestador`, `datanascPrestador`, `cidadePrestadorServico`, `senhaPrestador`) 
 VALUES 
 ('Nome Prestador','CPF','email Prestador','Data','Cidade','pass');
 
 INSERT INTO `tbservicocontrato`
 (`codContrato`, `codServicoPrestado`) 
 VALUES 
 ('Cod Contrato','Cod Serciço Prestado');
 
 INSERT INTO `tbservicoprestado`
 (`codServico`, `codPrestador`, `valorMinimo`) 
 VALUES 
 ('cod Serviço','cod Prestador','Valor');
 
 INSERT INTO `tbservicos`
 (`nomeServico`, `descServico`) 
 VALUES 
 ('Nome','Descrição do Serviço');
 
 INSERT INTO `tbstatuscontrato`
 (`descStatus`) 
 VALUES 
 ('Descrição Status');
 
 UPDATE `tbcliente` 
	SET
`nomeCliente`='Nome'],
`cpfCliente`='CPF',
`datanascCliente`='Data',
`logradouroCliente`='Logradouro',
`numerocasaCliente`='num Casa',
`genero`= 'M',
`bairroCliente`='Bairro',
`senhaCliente`= '12345',
`emailCliente`='email' 
WHERE `codCliente` = '1';
	
UPDATE `tbfonecliente` 
	SET
`numFoneCliente`='Numero',
`codCliente`= '1' 
WHERE `codFoneCliente` = '1';

UPDATE `tbfoneprestador` 
	SET 
`numFonePrestador`='Numero',
`codPrestador`='1' 
WHERE `codFonePrestador`='1';

UPDATE `tbprestador` 
	SET 
`nomePrestador`='Nome',
`cpfPrestador`='CPF',
`emailPrestador`='email@teste.com',
`datanascPrestador`='data',
`cidadePrestadorServico`='Cidade',
`senhaPrestador`='pass' 
WHERE `codPrestador`='1';

UPDATE `tbstatuscontrato` 
	SET 
`descStatus`='Completo'
 WHERE `codStatusContrato`='10';
;


	