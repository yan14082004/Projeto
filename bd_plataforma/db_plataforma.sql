CREATE TABLE cliente 
( 
 codigo_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 nome_cliente VARCHAR(100) NOT NULL 
);

CREATE TABLE administrador 
( 
 codigo_administrador INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 nome_administrador VARCHAR(100) NOT NULL 
); 

CREATE TABLE login 
( 
 codigo_login INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 nome_completo_login VARCHAR(100) NOT NULL,
 nome_login VARCHAR(50) NOT NULL,
 senha_login VARCHAR(32) NOT NULL UNIQUE,
 tipo_login INT(11) NOT NULL DEFAuLT 0
);

CREATE TABLE carro 
( 
 codigo_carro INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
 descricao_carro VARCHAR(150) NOT NULL,
 marca_carro VARCHAR(20) NOT NULL,
 modelo_carro VARCHAR(20) NOT NULL,
 ano_carro INT(4) NOT NULL
);  

CREATE TABLE aluguel 
( 
 codigo_aluguel INT NOT NULL AUTO_INCREMENT PRIMARY KEY,      
 descricao VARCHAR(200) NOT NULL,
 codigoCarro INT NOT NULL,
 codigoCliente INT NOT NULL,
 FOREIGN KEY (codigoCarro)
 REFERENCES carro(codigo_carro),
 FOREIGN KEY (codigoCliente)
 REFERENCES login(codigo_login)
);


INSERT INTO login (nome_completo_login, nome_login, senha_login, tipo_login)
VALUES('administrador', 'admin123', 'banana', 0);
