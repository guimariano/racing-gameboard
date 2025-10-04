# Introduction

You are working on a multi-player board game called "Race". Players are able to move on the board (Strategy pattern), some cards from the board are used for extra moves (Chain of responsibility pattern), all players moves are logged and actual results are presented on a score board (Observer pattern). Of course, the game has an internal state like "waiting for players", "playing", "completed" (State pattern), to avoid unexpected actions.

Moving rules:

* The board contains `N + 1` fields (numbered from `0` to `N`), the starting point is `0`
* Players move by throwing the dice and moving forward the given number of fields, first to the finish is the winner
* When the dice is thrown and the result is greater than number of fields to the finish, player stays in the same place

Cards rules:

* Each field (except the first and the last one) may contain one or more cards, which may modify where the player moves
* Some cards will move the player forward (move X fields forward, at least 1)
* Some cards will move the player backwards (move X fields back, at least 1) and may be used only when the number on the dice thrown is the same on the card
* If field contains one or more cards, only the FIRST MATCHED ONE must be used (see examples below)
* Each card may be used only once, but will stay on the board until the end of the game

See example for cards setup.

# Problem Statement

To complete this task you should:

- Implement Observer pattern in `RaceGame` and `ScoringBoard` classes
- Implement Chain of Responsibility pattern in `Card` class
- Implement specified interfaces in `PlayersList` class
- Add code to places anotated with `@todo`

# Examples

## Cards

```php
$board->addCard(new AccelerateCard(4), 8);
$board->addCard(new RetreatCard(6, 3), 8);
$board->addCard(new AccelerateCard(2), 8);
```

Remarks:

* First user in field 8 will be moved to field 12 (Forward 4 fields)
* The next user in field 8 will be moved to field 5, if and only when the number on the dice thrown shows a 6; in every other case user will be moved to field 10 (Forward 2 fields)
* When all cards are used, no extra moves will be applied

# Hints

The code contains some checks for methods parameters. Think about all logical aspects of the game, e.g. is it possible to start game without players? If not, throw an exception.

# troubleshooting

It is possible to build the project at any time by clicking the Build & run tests button below (in the build console).
You can also build the project locally by executing the following commands:

composer install && composer test # if composer.json file exists
phing -f build/build.xml # if build/build.xml file exists

---

# Implementation Status ✅

## What Has Been Implemented

This project has been successfully completed with all required design patterns implemented:

### ✅ Observer Pattern
**Files**: `RaceGame.php` and `ScoringBoard.php`

- **RaceGame** (Subject): Implements `SplSubject` interface
  - `attach(\SplObserver $observer)` - Adds unique observers
  - `detach(\SplObserver $observer)` - Removes existing observers
  - `notify()` - Notifies all attached observers
  
- **ScoringBoard** (Observer): Implements `SplObserver` interface
  - `update(\SplSubject $subject)` - Updates player rankings automatically

### ✅ Chain of Responsibility Pattern
**File**: `Card.php`

- `handle(int $diceThrowResult)` - Processes cards in chain sequence
- First applicable card is used and marked as processed
- Supports both `AccelerateCard` and `RetreatCard` types
- Returns `false` when no cards are applicable

### ✅ Iterator & Countable Interfaces
**File**: `PlayersList.php`

- **Iterator Interface**: `current()`, `next()`, `key()`, `valid()`, `rewind()`
- **Countable Interface**: `count()`
- **Additional**: `joinPlayer(Player $player)` with uniqueness validation

### ✅ All @todo Annotations Resolved
- 3 methods in `RaceGame.php` (Observer pattern)
- 1 method in `ScoringBoard.php` (Observer pattern)
- 1 method in `Card.php` (Chain of Responsibility)
- 7 methods in `PlayersList.php` (Iterator/Countable interfaces)

**Total**: 12/12 @todo items completed

## Docker Development Environment 🐳

A complete Docker setup has been added for easy development:

- **Dockerfile**: PHP 7.4 environment compatible with PHPUnit 7.5
- **docker-compose.yml**: Multi-service setup (main, dev, test)
- **DOCKER-SETUP.md**: Complete usage instructions

### How to Build, Run and Test

#### Prerequisites
- Docker
- Docker Compose

#### Build the Project
```bash
# Clone the repository
git clone <repository-url>
cd racing-gameboard

# Build the Docker environment
docker compose build
```

#### Install Dependencies
```bash
# Install PHP dependencies with Composer
docker compose run --rm php-dev composer install
```

#### Run Tests

**Test All Implemented Patterns:**
```bash
# Test Observer Pattern (RaceGame)
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/RaceGameTest.php

# Test Observer Pattern (ScoringBoard)
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/ScoringBoardTest.php

# Test Chain of Responsibility Pattern
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/CardTest.php

# Test Iterator/Countable Interfaces
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/Player/PlayersListTest.php
```

**Test All Patterns Together:**
```bash
docker compose run --rm php-dev vendor/bin/phpunit --filter="CardTest|ScoringBoardTest|PlayersListTest"
```

**Run Full Test Suite:**
```bash
docker compose run --rm php-dev vendor/bin/phpunit
```

#### Development Environment
```bash
# Start interactive development container
docker compose run --rm php-dev bash

# Inside the container, you can run:
composer install
vendor/bin/phpunit
php -l app/Race/RaceGame.php  # Check syntax
```

#### Alternative Testing (without Docker)
If you have PHP 7.4+ and Composer installed locally:
```bash
composer install
composer test
# or
vendor/bin/phpunit
```

### Quick Start with Docker:
```bash
# Build the environment
docker compose build

# Run tests for implemented patterns
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/RaceGameTest.php
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/ScoringBoardTest.php
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/CardTest.php
docker compose run --rm php-dev vendor/bin/phpunit tests/Base/Player/PlayersListTest.php

# Development shell
docker compose run --rm php-dev bash
```

## Files Added/Modified

### New Files:
- `Dockerfile`
- `docker-compose.yml`
- `DOCKER-SETUP.md`
- `IMPLEMENTACAO-PADROES.md`

### Modified Files:
- `app/Race/RaceGame.php` - Observer pattern implementation
- `app/Race/ScoringBoard.php` - Observer pattern implementation
- `app/Race/Card.php` - Chain of Responsibility implementation
- `app/Race/Player/PlayersList.php` - Iterator/Countable implementation