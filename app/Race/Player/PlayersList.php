<?php

declare(strict_types=1);

namespace Race\Player;

class PlayersList implements \Iterator, \Countable
{
    /**
     * @var Player[]
     */
    private $players = [];
    
    /**
     * @var int
     */
    private $position = 0;

    /**
     * @param Player[] $players
     * @throws \InvalidArgumentException
     */
    public function __construct($players = [])
    {
        foreach ($players as $player) {
            if (!$player instanceof Player) {
                throw new \InvalidArgumentException();
            }
        }

        $this->players = $players;
    }

    /**
     * @param Player $player
     * @return void
     * @throws \InvalidArgumentException
     */
    public function joinPlayer(Player $player): void
    {
        // Check if player already exists (by nick)
        foreach ($this->players as $existingPlayer) {
            if ($existingPlayer->getNick() === $player->getNick()) {
                throw new \InvalidArgumentException('Player already exists');
            }
        }
        
        // Add the player
        $this->players[] = $player;
    }

    /**
     * @return Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @return Player|null
     */
    public function current(): ?Player
    {
        if (isset($this->players[$this->position])) {
            return $this->players[$this->position];
        }
        return null;
    }

    /**
     * @return void
     */
    public function next(): void
    {
        $this->position++;
    }

    /**
     * @return int|null
     */
    public function key(): ?int
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->players[$this->position]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->players);
    }
}
