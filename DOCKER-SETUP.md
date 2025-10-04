# Docker Setup for Racing Game Board Project

Este projeto PHP agora inclui configuração Docker para facilitar o desenvolvimento e execução.

## Pré-requisitos

- Docker
- Docker Compose

## Estrutura Docker

- **Dockerfile**: Configuração base do PHP 8.1 com extensões necessárias
- **docker-compose.yml**: Orquestração de serviços Docker

## Como usar

### 1. Construir e executar o ambiente

```bash
# Construir a imagem Docker
docker-compose build

# Executar o container principal
docker-compose up php-racing-game
```

### 2. Executar testes

```bash
# Executar todos os testes
docker-compose run --rm php-test

# Ou executar testes interativamente
docker-compose run --rm php-dev composer test
```

### 3. Desenvolvimento interativo

```bash
# Iniciar container em modo desenvolvimento (shell interativo)
docker-compose up -d php-dev

# Acessar o shell do container
docker-compose exec php-dev bash

# Dentro do container, você pode executar:
composer install
composer test
php vendor/bin/phpunit
```

### 4. Comandos úteis

```bash
# Verificar versão do PHP
docker-compose run --rm php-racing-game php -v

# Instalar dependências
docker-compose run --rm php-dev composer install

# Executar PHPUnit diretamente
docker-compose run --rm php-dev vendor/bin/phpunit

# Verificar sintaxe PHP de um arquivo
docker-compose run --rm php-dev php -l app/Race/RaceGame.php

# Limpar containers
docker-compose down

# Limpar containers e volumes
docker-compose down -v
```

### 5. Estrutura dos serviços

- **php-racing-game**: Serviço principal para execução do projeto
- **php-dev**: Serviço para desenvolvimento com shell interativo
- **php-test**: Serviço específico para execução de testes

## Resolução de problemas

### Permissões de arquivo
Se houver problemas de permissão:
```bash
sudo chown -R $USER:$USER .
```

### Rebuild da imagem
Se precisar reconstruir a imagem completamente:
```bash
docker-compose build --no-cache
```

### Logs
Para visualizar logs dos containers:
```bash
docker-compose logs php-racing-game
```

## Configuração do projeto

O projeto está configurado com:
- PHP 8.1 (compatível com requisito >= 7.2.10)
- Composer para gerenciamento de dependências
- PHPUnit 7.5.* para testes
- Extensões: json, zip
- PSR-0 autoloading configurado

## Desenvolvimento

Com o ambiente Docker, você pode:
1. Implementar os padrões Observer, Chain of Responsibility
2. Completar as interfaces em PlayersList
3. Resolver todos os @todo no código
4. Executar testes para validar as implementações

Execute `composer test` dentro do container para verificar se todas as implementações estão corretas.