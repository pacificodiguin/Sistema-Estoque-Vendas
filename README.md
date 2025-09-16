# Sistema de Controle de Estoque e Vendas

![Status](https://img.shields.io/badge/status-em%20desenvolvimento-yellow)
![License](https://img.shields.io/badge/license-MIT-blue.svg)

Um sistema web completo para gerenciar o estoque, cadastrar produtos, clientes e registrar vendas. Este é um projeto pessoal focado em aplicar e aprimorar conhecimentos em desenvolvimento web, seguindo a arquitetura MVC (Model-View-Controller).

---

## ⚠️ Status do Projeto

**Em Desenvolvimento.** O projeto ainda está em fase de construção. Novas funcionalidades estão sendo implementadas e aprimoradas continuamente.

---

## ✨ Funcionalidades

Aqui estão as funcionalidades já implementadas e as que estão planejadas para o futuro.

#### ✅ Implementadas
* **CRUD de Produtos:** Gerenciamento completo de produtos (Criar, Ler, Atualizar, Deletar).
* **CRUD de Clientes:** Gerenciamento completo de clientes (Criar, Ler, Atualizar, Deletar).
* Estrutura base do projeto no padrão MVC.

#### 🚧 Planejadas
* **Módulo de Vendas:** Lançamento de vendas associadas a clientes e produtos.
* **Controle de Estoque:** Atualização automática do estoque após uma venda.
* **Autenticação de Usuários:** Sistema de Login/Cadastro com diferentes níveis de permissão.
* **Dashboard e Relatórios:** Painel com indicadores chave e geração de relatórios simples.

---

## 🛠️ Tecnologias Utilizadas

*(**Observação:** Preencha com as tecnologias que você está usando! Abaixo estão alguns exemplos comuns.)*

| Categoria      | Tecnologia(s)                                   |
| -------------- | ----------------------------------------------- |
| **Backend** | **(Ex: PHP 8, Laravel, Node.js, Express.js)** |
| **Frontend** | **(Ex: HTML5, CSS3, JavaScript, Bootstrap)** |
| **Banco de Dados** | **(Ex: MySQL, PostgreSQL)** |
| **Servidor** | **(Ex: Apache, Nginx)** |

---

## 🚀 Instalação e Execução

Siga os passos abaixo para executar o projeto em seu ambiente local.

*(**Observação:** Adapte os comandos de acordo com as tecnologias do seu projeto!)*

**1. Pré-requisitos**

* Você vai precisar ter o Git, **[sua linguagem, ex: PHP 8.1+]**, **[seu gerenciador de pacotes, ex: Composer]** e o **[seu banco de dados, ex: MySQL]** instalados.

**2. Clone o repositório**
```bash
git clone [https://github.com/pacificodiguin/Sistema-Estoque-Vendas.git](https://github.com/pacificodiguin/Sistema-Estoque-Vendas.git)
```

**3. Instale as dependências**
```bash
# Navegue até a pasta do projeto
cd Sistema-Estoque-Vendas

# Instale as dependências do backend (exemplo para PHP/Composer)
composer install

# Instale as dependências do frontend (se houver, exemplo para Node.js/NPM)
npm install
```

**4. Configure o Ambiente**
* Copie o arquivo de ambiente de exemplo: `cp .env.example .env`
* Abra o arquivo `.env` e configure as variáveis do banco de dados (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

**5. Configure o Banco de Dados**
* Crie um banco de dados com o nome que você definiu no arquivo `.env`.
* Execute as migrações para criar as tabelas: `(Ex: php artisan migrate)`

**6. Execute a aplicação**
```bash
# Exemplo para Laravel
php artisan serve

# Exemplo para Node.js
npm start
```

---

## 📂 Estrutura de Pastas

O projeto utiliza a arquitetura MVC, com a seguinte estrutura de pastas principal:

-   `**/assets**: Contém arquivos de frontend não compilados (ex: arquivos SASS, JavaScript ES6).`
-   `**/config**: Arquivos de configuração da aplicação (banco de dados, rotas, etc.).`
-   `**/controllers**: Responsáveis por receber as requisições, processar a lógica de negócio e retornar uma resposta (geralmente uma view).`
-   `**/models**: Representam as tabelas do banco de dados e são responsáveis pela interação com os dados.`
-   `**/public**: Pasta raiz que o servidor web acessa. Contém o `index.php` e os arquivos compilados (CSS, JS).`
-   `**/views**: Contém os templates e a parte visual da aplicação (arquivos HTML, Blade, etc.).`

---

## 👨‍💻 Autor

**João Henrique Pacifico Maia**

-   **GitHub:** [@pacificodiguin](https://github.com/pacificodiguin)
