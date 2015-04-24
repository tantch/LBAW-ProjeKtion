SELECT (Papel.idProjeto, Projeto.nomeproj, Papel.FuncaoProj) FROM Papel, Projeto
WHERE idUser= ?
AND Projeto.idProjeto=Papel.idProjeto
ORDER BY FuncaoProj DESC;

SELECT idprojeto FROM Projeto
WHERE EXTRACT(YEAR FROM dcriacao) = EXTRACT(YEAR FROM CURRENT_DATE)
AND EXTRACT(MONTH FROM dcriacao) = EXTRACT(MONTH FROM CURRENT_DATE);

SELECT idUser, FuncaoProj FROM Papel
WHERE idProjeto= ?;

SELECT UserAlocadoTarefa.idUser
FROM UserAlocadoTarefa, Tarefa, Categoria
WHERE Tarefa.estadotarefa='Concluida' 
AND Tarefa.idtarefa=UserAlocadoTarefa.idTarefa
AND Tarefa.idCategoria=Categoria.idcat 
AND Categoria.idprojeto=?
GROUP BY (useralocadotarefa.idUser)
ORDER BY COUNT(1) DESC
LIMIT 5

SELECT idTopico FROM Topico
WHERE idProjeto=?;

SELECT idResposta FROM Resposta
WHERE idTopico = ?;

SELECT idCat FROM Categoria
WHERE idProjeto=?;

SELECT idTarefa FROM Tarefa
WHERE idCategoria=?;

SELECT (UserAlocadoTarefa.idTarefa, Tarefa.DCriacao) FROM UserAlocadoTarefa, Tarefa
WHERE idUser=? AND UserAlocadoTarefa.idTarefa=Tarefa.idTarefa
ORDER BY DCriacao ASC

SELECT Contacto FROM Contactos
WHERE idUser=?;

SELECT idUser FROM Users
WHERE Username=?;