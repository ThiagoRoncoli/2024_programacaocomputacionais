CREATE TABLE atendimento(
id INT PRIMARY KEY AUTO_INCREMENT,
id_solicitante INT ,
tipo VARCHAR(255) ,
informacao VARCHAR(255) DEFAULT '',
data_registro DATETIME ,
   
);

INSERT INTO atendimento(tipo, informacao, data_registro) VALUES();

