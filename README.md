# CRUD de Veículos em CodeIgniter 3

> **Aviso de Contexto**: Projeto desenvolvido entre **2019 e 2021** com foco em aprendizado e prática do framework PHP CodeIgniter 3, arquitetura MVC, gerenciamento de sessões, rotas e operações de banco de dados (Query Builder).

Sistema web simples em CodeIgniter 3 com operações de CRUD (Create, Read, Update, Delete) para cadastro e listagem de veículos, controle de clientes e produtos.

## 🛠️ Tecnologias Utilizadas
* **CodeIgniter 3** (Framework PHP MVC)
* **PHP** (Compatibilizado para PHP 8+)
* **MySQL** (com Driver mysqli e Query Builder)
* **Bootstrap 4** e **FontAwesome**
* **jQuery**

## 📂 Estrutura do Projeto
* `application/controllers/`: Controladores (`Home.php`, `Veiculos.php`, `Clientes.php`, `Produtos.php`)
* `application/views/`: Telas e templates da aplicação (`view_principal.php`, `veiculos/`, `clientes/`)
* `application/config/`: Configurações de rotas, autoload e banco de dados (`database.php`)
* `database.sql`: Script para criação do banco `3A` e suas tabelas (`veiculos`, `produtos`, `usuarios`)

## 🚀 Como Executar
1. Clone ou posicione a pasta no servidor web (ex: `wamp64/www/projeto`).
2. Crie a base de dados importando o script `database.sql` no seu servidor MySQL.
3. Configure os acessos ao banco em `application/config/database.php` conforme seu ambiente local.
4. Acesse no navegador: `http://localhost/projeto/`.
