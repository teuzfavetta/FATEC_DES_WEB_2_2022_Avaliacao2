CREATE DATABASE peneira;

CREATE TABLE inscritos(
	id INT(11) NOT NULL AUTO_INCREMENT primary key,
	nome VARCHAR(50) NOT NULL,
	idade INT NOT NULL,
	posicao VARCHAR(50)
	
)

INSERT INTO inscritos(nome, idade, posicao)
VALUES('Mateus', 19, 'zagueiro'),
		('Luiz', 20, 'volante')
		
SELECT * FROM inscritos