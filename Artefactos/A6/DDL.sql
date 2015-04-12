DROP TABLE Administrador CASCADE
;
DROP TABLE alocado CASCADE
;
DROP TABLE Aprovada CASCADE
;
DROP TABLE Categoria CASCADE
;
DROP TABLE criar CASCADE
;
DROP TABLE Execu��o CASCADE
;
DROP TABLE F�rum CASCADE
;
DROP TABLE JoinCategoriaToProjeto CASCADE
;
DROP TABLE JoinExecu��oToCategoria CASCADE
;
DROP TABLE Lista Contactos CASCADE
;
DROP TABLE Outros CASCADE
;
DROP TABLE Papel CASCADE
;
DROP TABLE Projeto CASCADE
;
DROP TABLE Rejeitada CASCADE
;
DROP TABLE Resposta CASCADE
;
DROP TABLE Tarefa CASCADE
;
DROP TABLE Tarefa Sugerida CASCADE
;
DROP TABLE T�pico CASCADE
;
DROP TABLE User CASCADE
;

CREATE TABLE Administrador ( 
	  ,
	administradorID integer NOT NULL
)
;

CREATE TABLE alocado ( 
	execu��oID integer,
	outrosID integer
)
;

CREATE TABLE Aprovada ( 
	  ,
	aprovadaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE Categoria ( 
	Nome varchar(50),
	Descri��o int,
	categoriaID integer NOT NULL
)
;

CREATE TABLE criar ( 
	execu��oID integer,
	papelID integer
)
;

CREATE TABLE Execu��o ( 
	  ,
	execu��oID integer NOT NULL
)
;

CREATE TABLE F�rum ( 
	  ,
	f�rumID integer NOT NULL,
	projetoID integer NOT NULL
)
;

CREATE TABLE JoinCategoriaToProjeto ( 
	projetoID integer,
	categoriaID integer
)
;

CREATE TABLE JoinExecu��oToCategoria ( 
	categoriaID integer,
	execu��oID integer
)
;

CREATE TABLE Lista Contactos ( 
	  ,
	lista ContactosID integer NOT NULL
)
;

CREATE TABLE Outros ( 
	Nome varchar(50),
	Data Nascimento date,
	Genero varchar(50),
	Morada varchar(50),
	Telefone int,
	Email varchar(50),
	outrosID integer NOT NULL,
	lista ContactosID integer NOT NULL
)
;

CREATE TABLE Papel ( 
	  ,
	papelID integer NOT NULL
)
;

CREATE TABLE Projeto ( 
	Nome varchar(50),
	Observa��es varchar(50),
	Data Fim date,
	Estado varchar(50),
	projetoID integer NOT NULL,
	outrosID integer
)
;

CREATE TABLE Rejeitada ( 
	  ,
	rejeitadaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE Resposta ( 
	Texto varchar(50),
	Data Registo date,
	respostaID integer NOT NULL,
	outrosID integer,
	t�picoID integer
)
;

CREATE TABLE Tarefa ( 
	Nome varchar(50),
	Descri��o varchar(50),
	Data Fim date,
	Estado varchar(50),
	tarefaID integer NOT NULL
)
;

CREATE TABLE Tarefa Sugerida ( 
	  ,
	tarefa SugeridaID integer NOT NULL,
	papelID integer
)
;

CREATE TABLE T�pico ( 
	Nome varchar(50),
	Descri��o varchar(50),
	Data Cria��o date,
	Estado varchar(50),
	t�picoID integer NOT NULL,
	f�rumID integer,
	outrosID integer
)
;

CREATE TABLE User ( 
	UserName varchar(50),
	Password hashed string,
	userID integer NOT NULL
)
;


ALTER TABLE Administrador ADD CONSTRAINT PK_Administrador 
	PRIMARY KEY (administradorID)
;


ALTER TABLE Aprovada ADD CONSTRAINT PK_Aprovada 
	PRIMARY KEY (aprovadaID)
;


ALTER TABLE Categoria ADD CONSTRAINT PK_Categoria 
	PRIMARY KEY (categoriaID)
;


ALTER TABLE Execu��o ADD CONSTRAINT PK_Execu��o 
	PRIMARY KEY (execu��oID)
;


ALTER TABLE F�rum ADD CONSTRAINT PK_F�rum 
	PRIMARY KEY (f�rumID)
;


ALTER TABLE Lista Contactos ADD CONSTRAINT PK_Lista Contactos 
	PRIMARY KEY (lista ContactosID)
;


ALTER TABLE Outros ADD CONSTRAINT PK_Outros 
	PRIMARY KEY (outrosID)
;


ALTER TABLE Papel ADD CONSTRAINT PK_Papel 
	PRIMARY KEY (papelID)
;


ALTER TABLE Projeto ADD CONSTRAINT PK_Projeto 
	PRIMARY KEY (projetoID)
;


ALTER TABLE Rejeitada ADD CONSTRAINT PK_Rejeitada 
	PRIMARY KEY (rejeitadaID)
;


ALTER TABLE Resposta ADD CONSTRAINT PK_Resposta 
	PRIMARY KEY (respostaID)
;


ALTER TABLE Tarefa ADD CONSTRAINT PK_Tarefa 
	PRIMARY KEY (tarefaID)
;


ALTER TABLE Tarefa Sugerida ADD CONSTRAINT PK_Tarefa Sugerida 
	PRIMARY KEY (tarefa SugeridaID)
;


ALTER TABLE T�pico ADD CONSTRAINT PK_T�pico 
	PRIMARY KEY (t�picoID)
;


ALTER TABLE User ADD CONSTRAINT PK_User 
	PRIMARY KEY (userID)
;




ALTER TABLE Administrador ADD CONSTRAINT FK_Administrador_User 
	FOREIGN KEY (administradorID) REFERENCES User (userID)
;

ALTER TABLE alocado ADD CONSTRAINT Execu��o 
	FOREIGN KEY (execu��oID) REFERENCES Execu��o (execu��oID)
;

ALTER TABLE alocado ADD CONSTRAINT Outros 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Aprovada ADD CONSTRAINT FK_Aprovada_Tarefa Sugerida 
	FOREIGN KEY (aprovadaID) REFERENCES Tarefa Sugerida (tarefa SugeridaID)
;

ALTER TABLE Aprovada ADD CONSTRAINT aprova 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE criar ADD CONSTRAINT Execu��o 
	FOREIGN KEY (execu��oID) REFERENCES Execu��o (execu��oID)
;

ALTER TABLE criar ADD CONSTRAINT Papel 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Execu��o ADD CONSTRAINT FK_Execu��o_Tarefa 
	FOREIGN KEY (execu��oID) REFERENCES Tarefa (tarefaID)
;

ALTER TABLE F�rum ADD CONSTRAINT tem um 
	FOREIGN KEY (projetoID) REFERENCES Projeto (projetoID)
;

ALTER TABLE JoinCategoriaToProjeto ADD CONSTRAINT Projeto 
	FOREIGN KEY (projetoID) REFERENCES Projeto (projetoID)
;

ALTER TABLE JoinCategoriaToProjeto ADD CONSTRAINT Categoria 
	FOREIGN KEY (categoriaID) REFERENCES Categoria (categoriaID)
;

ALTER TABLE JoinExecu��oToCategoria ADD CONSTRAINT Categoria 
	FOREIGN KEY (categoriaID) REFERENCES Categoria (categoriaID)
;

ALTER TABLE JoinExecu��oToCategoria ADD CONSTRAINT Execu��o 
	FOREIGN KEY (execu��oID) REFERENCES Execu��o (execu��oID)
;

ALTER TABLE Outros ADD CONSTRAINT possui 
	FOREIGN KEY (lista ContactosID) REFERENCES Lista Contactos (lista ContactosID)
;

ALTER TABLE Outros ADD CONSTRAINT agregado a uma 
	FOREIGN KEY (lista ContactosID) REFERENCES Lista Contactos (lista ContactosID)
;

ALTER TABLE Outros ADD CONSTRAINT FK_Outros_User 
	FOREIGN KEY (outrosID) REFERENCES User (userID)
;

ALTER TABLE Projeto ADD CONSTRAINT master dum  
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Rejeitada ADD CONSTRAINT rejeita 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Rejeitada ADD CONSTRAINT FK_Rejeitada_Tarefa Sugerida 
	FOREIGN KEY (rejeitadaID) REFERENCES Tarefa Sugerida (tarefa SugeridaID)
;

ALTER TABLE Resposta ADD CONSTRAINT responde com uma 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;

ALTER TABLE Resposta ADD CONSTRAINT FK_Resposta_T�pico 
	FOREIGN KEY (t�picoID) REFERENCES T�pico (t�picoID)
;

ALTER TABLE Tarefa Sugerida ADD CONSTRAINT FK_Tarefa Sugerida_Papel 
	FOREIGN KEY (papelID) REFERENCES Papel (papelID)
;

ALTER TABLE Tarefa Sugerida ADD CONSTRAINT FK_Tarefa Sugerida_Tarefa 
	FOREIGN KEY (tarefa SugeridaID) REFERENCES Tarefa (tarefaID)
;

ALTER TABLE T�pico ADD CONSTRAINT FK_T�pico_F�rum 
	FOREIGN KEY (f�rumID) REFERENCES F�rum (f�rumID)
;

ALTER TABLE T�pico ADD CONSTRAINT FK_T�pico_Outros 
	FOREIGN KEY (outrosID) REFERENCES Outros (outrosID)
;
