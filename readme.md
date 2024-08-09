# CRUD - Biblioteca

Este é um projeto PHP simples usando Docker, com Apache e MySQL.

## Como rodar o projeto

1. Clone o repositório
    
    git clone https://github.com/DMSJR/IDS-prova.git
    cd IDS-prova
    

2. Execute o Docker Compose
   
    sudo docker compose up --build -d
   

3. Acesse o site no navegador
    - [httplocalhost](httplocalhost)

## Estrutura do Projeto

- `src` Contém os arquivos PHP do site.
- `db_init` Contém os scripts SQL para criar o banco de dados e as tabelas.
- `docker-compose.yml` Arquivo de configuração do Docker Compose.
