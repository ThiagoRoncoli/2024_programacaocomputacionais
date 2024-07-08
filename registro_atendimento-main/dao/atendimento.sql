CREATE TABLE atendimento(
id INT PRIMARY KEY,
id_solicitante INT NOT NULL,
tipo VARCHAR(255) NOT NULL,
informacao VARCHAR(255) DEFAULT '',
data_registro DATETIME NOT NULL,
FOREIGN KEY (id_solicitante) REFERENCES solicitante(id)    
);

INSERT INTO atendimento(tipo, informacao, data_registro) VALUES();

