# Chat-api

## Sobre
<p>Api em Laravel para realizar trocas de mensagens entre usuários em tempo real</p>

## Comandos para inicialização
Instala as dependências e pacotes do projeto
```bash
  composer install
```
Renomeie o arquivo .env.example para ``.env`` e gere uma nova chave da API
```bash
  php artisan key:generate
```
Executa as migrations, criando ou atualizando o banco e tabelas no banco de dados 
```bash
  php artisan migrate
```
Executa o projeto, tornando-o acessível
```bash
  php artisan serve
```
