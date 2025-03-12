create database inspiraTalks;
use inspiraTalks;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha TEXT NOT NULL,
    role ENUM('organizador', 'palestrante', 'participante') NOT NULL,
    created_by INT NULL,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE enderecoEvento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(50) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    rua VARCHAR(150) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    nome_local VARCHAR(100) NOT NULL
);
CREATE TABLE eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    visibilidade ENUM('Publicado', 'Agendado', 'Escondido') NOT NULL DEFAULT 'Agendado',
    status ENUM('Finalizado', 'Em andamento', 'Cancelado') NOT NULL DEFAULT 'Em andamento',
    banner VARCHAR(255) NOT NULL,
    horario VARCHAR(10),
    periodo_data date,
    endereco_evento_id INT NOT NULL,
    FOREIGN KEY (endereco_evento_id) REFERENCES enderecoEvento(id)
);


CREATE TABLE sliderHome (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    arquivo VARCHAR(255) NOT NULL
);