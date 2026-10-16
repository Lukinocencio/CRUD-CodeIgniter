-- Estrutura de banco de dados para o projeto CodeIgniter 3
CREATE DATABASE IF NOT EXISTS `3A`;
USE `3A`;

-- Tabela de veículos
CREATE TABLE IF NOT EXISTS `veiculos` (
    `placa` VARCHAR(10) NOT NULL PRIMARY KEY,
    `marca` VARCHAR(50) NOT NULL,
    `modelo` VARCHAR(50) NOT NULL,
    `ano` INT NOT NULL,
    `cor` VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de produtos
CREATE TABLE IF NOT EXISTS `produtos` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(100) NOT NULL,
    `valor` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    `foto` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(100) NOT NULL,
    `nome` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
