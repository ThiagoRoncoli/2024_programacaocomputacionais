CREATE TABLE perguntapublico (
  idPerguntaPublico int(11) NOT NULL,
  idPublico int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  descricaoPergunta text NOT NULL,
  dataCadastro datetime NOT NULL,
  ativo enum('S','N') NOT NULL DEFAULT 'S'
);

INSERT INTO(idPerguntaPublico, idPublico, idUsuario, descricaoPergunta, dataCadastro, ativo) VALUES();
