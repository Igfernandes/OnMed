/**
* TABLE PROFESSORES
**/

CREATE TABLE professores(
    id              INT NOT NULL AUTO_INCREMENT,
    nome            VARCHAR(50),
    matricula       INT,
    materia         VARCHAR(50),
    horario         VARCHAR(50),
    data_criacao    TIMESTAMP default current_timestamp    
)