CREATE INDEX idDeUsers
ON Users USING btree (idUser);
ALTER TABLE users CLUSTER ON idDeUsers;

CREATE INDEX idDeProjeto
ON Projeto USING btree (idProjeto);
ALTER TABLE Projeto CLUSTER ON idDeProjeto;

CREATE INDEX idDeProjeto
ON Projeto USING btree (Dcriacao);

CREATE INDEX idDeCategoria
ON Categoria USING btree (idcat);
ALTER TABLE Categoria CLUSTER ON iddeCategoria;

CREATE INDEX idDeCategoria
ON Categoria USING btree (idcat);
ALTER TABLE Categoria CLUSTER ON iddeCategoria;

CREATE INDEX idDeTarefa
ON Tarefa USING btree (idTarefa);
ALTER TABLE Tarefa CLUSTER ON idDeTarefa;

CREATE INDEX idDeTarefa
ON Tarefa USING btree (DCriacao);

CREATE INDEX idUserDeAlocado
ON userAlocadoTarefa USING btree (iduser);
ALTER TABLE UserAlocadoTarefa CLUSTER ON idUserDeAlocado;

CREATE INDEX idProjetoDePapel
ON Papel USING btree (idProjeto);
ALTER TABLE Papel CLUSTER ON idProjetoDePapel;

CREATE INDEX idUserDeContactos
ON Contactos USING btree (iduser);
ALTER TABLE Contactos CLUSTER ON idUserDeContactos;

CREATE INDEX idDeTopico
ON Topico USING btree (idTopico);
ALTER TABLE Topico CLUSTER ON idDeTopico;

CREATE INDEX idDeResposta
ON Resposta USING btree (idresposta);
ALTER TABLE Resposta CLUSTER ON idDeResposta;