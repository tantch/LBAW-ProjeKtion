CREATE OR REPLACE FUNCTION MasterOnCreatefunc() RETURNS TRIGGER AS $projeto_table$
    BEGIN
        INSERT INTO Papel(OLD.idProjeto,OLD.idUser, "Master");
        RETURN NEW;
    END;
$projeto_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER MasterOnCreate
 AFTER INSERT ON Projeto
 EXECUTE PROCEDURE MasterOnCreatefunc();
 
 CREATE OR REPLACE FUNCTION AproveToExecutefunc() RETURNS TRIGGER AS $task_table$
    BEGIN
        UPDATE TipoTarefa SET TipoTarefa="Execucao"
		WHERE OLD.Tarefa.idTarefa=NEW.Tarefa.idTarefa;
        RETURN NEW;
    END;
$task_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER AproveToExecute
AFTER UPDATE OF TipoTarefa ON Tarefa
WHEN (Papel.idProjeto=Projeto.idProjeto AND Papel.idUser=Users.idUser AND Papel.funcaoProj="Coordenador" AND OLD.Tarefa.TipoTarefa="Sugerida")
EXECUTE PROCEDURE AproveToExecutefunc();

CREATE OR REPLACE FUNCTION OnlyCoordenatorChangefunc() RETURNS TRIGGER AS $taskChange_table$
    BEGIN
        RAISE NOTICE 'Nao e Coordenador ou Master para poder aceitar ou recusar tarefas sugeridas ';
        RETURN NEW;
    END;
$taskChange_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER OnlyCoordenatorChange
AFTER UPDATE OF TipoTarefa ON Tarefa
WHEN (Papel.idProjeto=Projeto.idProjeto AND Papel.idUser=Users.idUser AND Papel.funcaoProj="Colaborador")
EXECUTE PROCEDURE OnlyCoordenatorChangefunc();

CREATE OR REPLACE FUNCTION NotAddMyselffunc() RETURNS TRIGGER AS $contactos_table$
    BEGIN
        RAISE NOTICE 'Nao e possivel se adicionar a sua lista de contactos';
        RETURN NEW;
    END;
$contactos_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER NotAddMysel
AFTER INSERT INTO Contactos
WHEN(Contactos.USER = Contactos.Contacto)
EXECUTE PROCEDURE NotAddMyselffunc();

CREATE OR REPLACE FUNCTION OnlyPublishYourProjectTopicfunc() RETURNS TRIGGER AS $topico_table$
    BEGIN
        RAISE NOTICE 'Nao e possivel criar topico no forum de um projeto a que nao pertence';
        RETURN NEW;
    END;
$topico_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER OnlyPublishYourTopicProject
BEFORE INSERT INTO Topico
WHEN(Papel.idProjeto = Projeto.idProjeto AND Papel.idUsername = Users.idUser)
EXECUTE PROCEDURE OnlyPublishYourProjectTopicfunc();

CREATE OR REPLACE FUNCTION OnlyPublishYourProjectAnwserfunc() RETURNS TRIGGER AS $resposta_table$
    BEGIN
         RAISE NOTICE 'Nao e possivel responder ao forum de um projeto a que nao pertence';
        RETURN NEW;
    END;
$resposta_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER OnlyPublishYourProjectAnwser
BEFORE INSERT INTO Resposta
WHEN(Papel.idProjeto = Projeto.idProjeto AND Papel.idUsername = Users.idUser)
EXECUTE PROCEDURE OnlyPublishYourProjectAnwserfunc();

CREATE OR REPLACE FUNCTION ValidTaskDatefunc(NomeTarefa CHARACTER VARYING(30)) RETURNS TRIGGER AS $taskDate_table$
	BEGIN
        RAISE NOTICE 'Tarefa (%)  tem data de criação inferior à data Criação do projeto', NomeTarefa;
        RETURN NEW;
    END;
$taskDate_table$ LANGUAGE plpgsql;
 
CREATE TRIGGER DateCheck
BEFORE INSERT ON Tarefa
WHEN (NEW.Tarefa.DCriacao < Projeto.DCriacao)
EXECUTE PROCEDURE ValidTaskDatefunc(NEW.Tarefa.NomeTarefa);

///////////////////////////Store Procedures////////////////////////

CREATE OR REPLACE FUNCTION NumberAllTasks(idProjeto INTEGER) RETURNS void AS $$
	BEGIN
	    SELECT COUNT (idTarefa) AS allTasks
	    FROM Tarefa
	    WHERE idProjeto = (SELECT idProjeto 
				FROM Projeto
				WHERE idTarefa = Tarefa.idTarefa AND Tarefa.idCategoria = Categoria.idCategoria AND Categoria.idProjeto=Projeto.idProjeto);
	    RETURN allTasks;
	END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION NumberTasksComplete(idProjeto INTEGER) RETURNS void AS $$
	BEGIN
	    SELECT COUNT (idTarefa) AS completeTasks
	    FROM Tarefa
	    WHERE idProjeto = (SELECT idProjeto 
				FROM Projeto
				WHERE Tarefa.EstadoTarefa = "Concluida" AND idTarefa = Tarefa.idTarefa AND Tarefa.idCategoria = Categoria.idCategoria AND Categoria.idProjeto=Projeto.idProjeto);
	    RETURN completeTasks;
	END;
$$ LANGUAGE plpgsql;

CREATE OR REPLACE FUNCTION CurrentProjectStatus (idProjeto INTEGER) RETURNS void AS $$
	BEGIN
	    RETURN NumberTasksComplete(idProjeto) *100 / NumberAllTasks(idProjeto);
	END;
$$ LANGUAGE plpgsql;
