CREATE TABLE cliente 
( 
 nome_cliente VARCHAR(100) NOT NULL,  
 cliente_login VARCHAR(50) NOT NULL,    
 codigo_carro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,  
 UNIQUE (cliente_login,codigo_carro: PK)
); 

CREATE TABLE carro 
( 
 codigo_carro INT PRIMARY KEY NOT NULL AUTO_INCREMENT,  
 descricao VARCHAR(200) NOT NULL,  
 marca VARCHAR(50) NOT NULL,  
 modelo VARCHAR(20) NOT NULL,  
 ano INT NOT NULL,  
 UNIQUE (codigo_carro: PK)
); 

CREATE TABLE admin 
( 
 codigo_admin INT PRIMARY KEY NOT NULL AUTO_INCREMENT,  
 admin_login VARCHAR(100) NOT NULL AUTO_INCREMENT,   
 nome_admin VARCHAR(50) NOT NULL,  
 UNIQUE (codigo_admin: PK,login)
); 

CREATE TABLE aluguel 
( 
 codigo_cliente INT PRIMARY KEY,  
 codigo_carro INT,  
 data DATE NOT NULL AUTO_INCREMENT,  
); 

CREATE TABLE mantem 
( 
 codigo_admin INT PRIMARY KEY,  
 codigo_carro INT,  
); 

CREATE TABLE login 
( 
 nome_completo_login VARCHAR(100) NOT NULL,  
 codigo_login INT NOT NULL AUTO_INCREMENT,  
 nome_login VARCHAR(50) NOT NULL,  
 senha_login VARCHAR(32) NOT NULL,  
 tipo login INT NOT NULL AUTO_INCREMENT,  
 codigo_cliente INT,  
 codigo_admin INT,  
 UNIQUE (codigo_login,nome_login,tipo login)
); 

ALTER TABLE aluguel ADD FOREIGN KEY(codigo_cliente) REFERENCES cliente (codigo_cliente)
ALTER TABLE aluguel ADD FOREIGN KEY(codigo_carro) REFERENCES carro (codigo_carro)
ALTER TABLE mantem ADD FOREIGN KEY(codigo_admin) REFERENCES admin (codigo_admin)
ALTER TABLE mantem ADD FOREIGN KEY(codigo_carro) REFERENCES carro (codigo_carro)
ALTER TABLE login ADD FOREIGN KEY(codigo_cliente) REFERENCES cliente (codigo_cliente)
ALTER TABLE login ADD FOREIGN KEY(codigo_admin) REFERENCES admin (codigo_admin)
