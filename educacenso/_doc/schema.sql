    drop database if exists educacenso;

    create database educacenso;
    USE educacenso;

    create table cursos(
        id int not null auto_increment,
        nome  varchar(200) NOT NULL,
        nome_reduzido varchar(100) NOT NULL,
        primary key (id)
    );

    create table turmas(
        id int not null auto_increment,
        nome  varchar(200) NOT NULL,
        curso_id int NOT NULL,
        primary key (id),
        FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
    );

    create table periodos(
        id int not null auto_increment,
        ano  int(4) NOT NULL,
        dt_inicio date NOT NULL,
        dt_fim date NOT NULL,
        primary key (id)
    );

    create table respostas(
        id int not null auto_increment,
        periodo_id int not null,
        nome_aluno varchar(200) not null,
        cpf varchar(200) not null,
        turma_id int not null, -- ideal seria guardar só nome da turma - 😡😡😡
        cidade varchar(200) not null,
        cidade_id int not null,
        transporte enum('onibus', 'van', 'microonibus') not null,
        poder_publico_responsavel enum('municipio', 'estado') not null,
        diferenca_paga float not null,
        uf varchar(200) not null,
        uf_id varchar(2) not null,
        paga_diferenca varchar(10),

        primary key (id),
        FOREIGN KEY (periodo_id) REFERENCES periodos(id),
        FOREIGN KEY (turma_id) REFERENCES turmas(id)
    )
