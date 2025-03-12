create database inspiraTalks;
use inspiraTalks;

CREATE TABLE sliderHome (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    arquivo VARCHAR(255) NOT NULL
);

INSERT INTO sliderHome (name, arquivo) VALUES ('img1', 'img1.png');
INSERT INTO sliderHome (name, arquivo) VALUES ('img2', 'img2.png');
