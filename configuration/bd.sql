CREATE DATABASE inspiraTalks;
USE inspiraTalks;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    cpf CHAR(11) UNIQUE,
    genero ENUM('Feminino', 'Masculino', 'Não-Binário', 'Outro', 'Prefiro não informar') NOT NULL,
    role ENUM('organizador', 'palestrante', 'participante') NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(256) NOT NULL,
    biografia TEXT,
    foto TEXT
);

CREATE TABLE endereco_evento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(2) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    rua VARCHAR(150) NOT NULL,
    numero VARCHAR(10) NOT NULL,
    nome_local VARCHAR(100) NOT NULL
);
CREATE TABLE evento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    visibilidade ENUM('Publicado', 'Privado') NOT NULL,
    status ENUM('Em andamento', 'Encerrado', 'Cancelado') NOT NULL,
    banner TEXT NOT NULL,
    data_inicio DATE NOT NULL,
    data_fim DATE NOT NULL,
    endereco_evento_id INT NOT NULL,
    FOREIGN KEY (endereco_evento_id) REFERENCES endereco_evento(id) ON DELETE CASCADE
);
CREATE TABLE foto_evento (
    id INT AUTO_INCREMENT PRIMARY KEY,
    arquivo VARCHAR(255) NOT NULL,
    evento_id INT NOT NULL,
    FOREIGN KEY (evento_id) REFERENCES evento(id) ON DELETE CASCADE
);

CREATE TABLE palestra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    visibilidade ENUM('Publicado', 'Privado') NOT NULL,
    status ENUM('Em andamento', 'Encerrado', 'Cancelado') NOT NULL,
    banner TEXT NOT NULL,
    data DATE NOT NULL,
    horario_inicio TIME NOT NULL,
    horario_fim TIME NOT NULL,
    local VARCHAR(255) NOT NULL,
    evento_id INT NOT NULL,
    FOREIGN KEY (evento_id) REFERENCES evento(id) ON DELETE CASCADE
);
CREATE TABLE foto_palestra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    arquivo VARCHAR(255) NOT NULL,
    palestra_id INT NOT NULL,
    FOREIGN KEY (palestra_id) REFERENCES palestra(id) ON DELETE CASCADE
);

CREATE TABLE inscricao_palestra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    palestra_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (palestra_id) REFERENCES palestra(id) ON DELETE CASCADE
);