# Teste Pleno Audaz

So teste solicitado pelos recrutadores da Audaz

Para que a instalação possa ser feita, baixe o repositório com o comando

``
composer require adiliogobira/testeaudaz
``

Após baixar o repositório puxe todas as dependências do projeto com o comando

``
composer update
``

Logo após todas as dependências baixadas, crie um banco de dados, configure ele em seu arquivo de ambientação ".env"
Tudo configurado no .env, use o comando abaixo.

``
php artisan migrate:refresh --seed
``

para poder acessar, pode usar o comando abaixo

``
php artisan serve
``

## O sistema já alimenta o banco com 6 Operadores
Os valores das Tarifas a serem preenchidas pode ser no padrão brasileiro ou Americano, que funciona do mesmo jeito.


