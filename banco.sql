CREATE TABLE tb_tarefas(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_status int NOT NULL,
    tarefa varchar(255) NOT NULL ,
    data_cadastro date NOT NULL DEFAULT CURRENT_DATE
);