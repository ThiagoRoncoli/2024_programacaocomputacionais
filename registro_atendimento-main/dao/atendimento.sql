CREATE TABLE atendimento (
  idAtendimento int(11) NOT NULL,
  idFormaAtendimento int(11) NOT NULL,
  idPerguntaPublico int(11) NOT NULL,
  idUsuario int(11) NOT NULL,
  dataCadastro datetime NOT NULL,
  ativo('S','N') enum('S','N') NOT NULL DEFAULT 'S',
  respostaAtendimento text NOT NULL
);

INSERT INTO atendimento(idAtendimento, idFormaAtendimento, idPerguntaPublico, idUsuario, dataCadastro, ativo
respostaAtendimento) VALUES();

