CREATE TABLE publico (
  idPublico int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  nomePublico varchar(255) NOT NULL,
  dataCadastro datetime NOT NULL,
  ativo enum('S','N') NOT NULL DEFAULT 'S'
);

INSERT INTO(idPublico, idUsuario, nomePublico, dataCadastro, ativo) VALUES();