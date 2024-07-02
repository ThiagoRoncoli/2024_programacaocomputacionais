CREATE TABLE usuario (
  idUsuario int(11) NOT NULL,
  nomeUsuario varchar(255) NOT NULL,
  emailUsuario varchar(255) NOT NULL,
  loginUsuario varchar(255) NOT NULL,
  senhaUsuario varchar(255) NOT NULL,
  dataCadastro datetime DEFAULT NULL,
  telefoneCelular varchar(45) DEFAULT NULL,
  ativo enum('S','N') NOT NULL DEFAULT 'S',
)

INSERT INTO usuario (idUsuario, nomeUsuario, emailUsuario, loginUsuario, senhaUsuario, dataCadastro, 
telefoneCelular, ativo, idPerfil) VALUES ();