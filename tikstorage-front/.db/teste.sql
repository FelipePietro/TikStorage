-- Criação do banco de dados
CREATE DATABASE tikstorage;
 
-- Seleção do banco de dados para usar
USE tikstorage;
 
-- Criação da tabela de usuários (para login)
CREATE TABLE USUARIOS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    CONSTRAINT unique_usuario UNIQUE (usuario)
);
 
-- Criação da tabela de produtos
CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nm_prod VARCHAR(255) NOT NULL,
    qntd_prod INT NOT NULL,
    cat_prod VARCHAR(100) NOT NULL,
    desc_prod TEXT,
    loc_prod VARCHAR(255) NOT NULL
);
 
-- Adicionar alguns dados de exemplo na tabela USUARIOS (opcional)
INSERT INTO USUARIOS (usuario, senha) VALUES
('admin', 'senha123'),  -- Lembre-se de criptografar senhas reais antes de usá-las em produção
('user1', 'senha456');
 
-- Adicionar alguns dados de exemplo na tabela produto (opcional)
INSERT INTO produto (nm_prod, qntd_prod, cat_prod, desc_prod, loc_prod) VALUES
('Produto A', 10, 'Categoria 1', 'Descrição do Produto A', 'Localização 1'),
('Produto B', 5, 'Categoria 2', 'Descrição do Produto B', 'Localização 2');