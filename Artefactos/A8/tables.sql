CREATE TABLE Users (
    idUser SERIAL PRIMARY KEY ,
    Username CHARACTER VARYING(20) NOT NULL,
    Password CHARACTER VARYING(64) NOT NULL,
    Admin INTEGER DEFAULT 0,
    Nome CHARACTER VARYING(100) NOT NULL,
    DNascimento DATE,
    Genero Genero,
    Morada CHARACTER VARYING(80),
    Telefone CHARACTER VARYING(20),
    Email CHARACTER VARYING(254) NOT NULL,
    UNIQUE (Username,Email),
    CONSTRAINT ADMINVALUE CHECK (((admin = 0) OR (admin = 1))),
    CONSTRAINT INVALIDBIRTHDATE CHECK ((DNascimento < ('now'::text)::DATE))
);


CREATE TABLE Projeto (
    idProjeto SERIAL PRIMARY KEY ,
    NomeProj CHARACTER VARYING(20) NOT NULL,
    Obs text,
    DCriacao DATE DEFAULT ('now'::text)::DATE NOT NULL,
    DFinalProjeto DATE NOT NULL,
    idMaster INTEGER NOT NULL,
    FOREIGN KEY (idMaster) REFERENCES Users (idUser) ,
    CONSTRAINT INVALIDPROJECTDATE CHECK ((DFinalProjeto > DCriacao))
);

CREATE TABLE Categoria (
    idCat SERIAL PRIMARY KEY ,
    NomeCat CHARACTER VARYING(30) NOT NULL,
    idProjeto INTEGER NOT NULL,
    FOREIGN KEY (idProjeto) REFERENCES Projeto(idProjeto) ON DELETE CASCADE
);

CREATE TABLE Tarefa (
    idTarefa SERIAL PRIMARY KEY ,
    idCategoria INTEGER NOT NULL,
    idCriador INTEGER NOT NULL,
    NomeTarefa CHARACTER VARYING(30) NOT NULL,
    DCriacao DATE NOT NULL,
    DFinal DATE,
    EstadoTarefa EstadoTarefa NOT NULL,
    TipoTarefa TipoTarefa NOT NULL,
    idAceitePor INTEGER,
    FOREIGN KEY (idCategoria) REFERENCES Categoria(idCat) ON DELETE CASCADE,
    FOREIGN KEY (idCriador) REFERENCES Users(idUser),
    CONSTRAINT InvalidTaskDate CHECK ((DFinal > DCriacao))
);

CREATE TABLE UserAlocadoTarefa (
    idUser INTEGER NOT NULL,
    idTarefa INTEGER NOT NULL,
    FOREIGN KEY (idUser) REFERENCES Users(idUser) ON DELETE CASCADE,
    FOREIGN KEY (idTarefa) REFERENCES Tarefa(idTarefa) ON DELETE CASCADE
    PRIMARY KEY (idUser, idTarefa)
 
);

CREATE TABLE Papel (
    idProjeto INTEGER NOT NULL,
    idUser INTEGER NOT NULL,
    FuncaoProj FuncaoProjeto NOT NULL,
    FOREIGN KEY (idProjeto) REFERENCES Projeto(idProjeto) ON DELETE CASCADE,
    FOREIGN KEY (idUser) REFERENCES Users(idUser) ON DELETE CASCADE,
    PRIMARY KEY (idProjeto, idUser)
);

CREATE TABLE Contactos (
    idUser INTEGER NOT NULL,
    Contacto INTEGER NOT NULL,
    FOREIGN KEY (idUser) REFERENCES Users (idUser),
    FOREIGN KEY (Contacto) REFERENCES Users (idUser),
    PRIMARY KEY (idUser, Contacto)
);

CREATE TABLE Topico (
    idTopico SERIAL PRIMARY KEY ,
    idProjeto INTEGER NOT NULL,
    DCriacao DATE DEFAULT ('now'::text)::DATE NOT NULL,
    NomeTopico CHARACTER VARYING(30) NOT NULL,
    Descricao text,
    idCriador INTEGER NOT NULL,
    FOREIGN KEY (idCriador) REFERENCES Users(idUser),
    FOREIGN KEY (idProjeto) REFERENCES Projeto(idProjeto) ON DELETE CASCADE
);

CREATE TABLE Resposta (
    idResposta SERIAL PRIMARY KEY ,
    idTopico INTEGER NOT NULL,
    Texto text NOT NULL,
    idUser INTEGER NOT NULL,
    FOREIGN KEY (idTopico) REFERENCES Topico(idTopico) ON DELETE CASCADE,
    FOREIGN KEY (idUser) REFERENCES Users(idUser),
    DCriacaoR DATE DEFAULT ('now'::text)::DATE NOT NULL
);