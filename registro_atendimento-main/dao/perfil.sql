CREATE TABLE perfil (
  idPerfil int(11) NOT NULL,
  nomePerfil varchar(255) NOT NULL,
  dataCadastro datetime DEFAULT NULL,
  ativo enum('S','N') NOT NULL DEFAULT 'S'
);

INSERT INTO(idPerfil, nomePerfil, dataCadastro, ativo) VALUES();