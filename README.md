# Hotel Management API

Este projeto é uma API para gerenciamento de hotel, desenvolvida em Laravel.
Construido com repository pattern.
A aplicação gerencia informações de clientes, quartos, reservas, funcionários, serviços adicionais e pagamentos.


## Requisitos

- PHP >= 7.4
- Composer
- MySQL ou outro banco de dados suportado pelo Laravel

## Instalação

1. Clone o repositório:

   ```sh
   git clone https://github.com/seu-usuario/hotel-management.git
   cd hotel-management
   ```
2. Instale as dependências do projeto:
    ```sh
    composer install
    ```

3. Copie o arquivo de exemplo .env e configure as informações do banco de dados:
    ```sh
    cp .env.example .env
    ```
   
4. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```
   
5. Execute as migrações para criar as tabelas no banco de dados:
    ```sh
    php artisan migrate
    ```
