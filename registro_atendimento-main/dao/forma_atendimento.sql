CREATE TABLE formaatendimento (
  idFormaAtendimento int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  nomeAtendimento varchar(255) NOT NULL,
  dataCadastro datetime NOT NULL,
  ativo enum('S','N') NOT NULL DEFAULT 'S'
);

INSERT INTO(idFormaAtendimento,  idUsuario, nomeAtendimento, dataCadastro, ativo) VALUES();