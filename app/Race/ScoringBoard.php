<?php

declare(strict_types=1);

namespace Race;

class ScoringBoard implements \SplObserver
{
    /**
     * @var array
     */
    private $results = [];

    /**
     * Returns top N results from the board as array in format:
     * key: player nick
     * value: player current position
     *
     * Result is sorted descending by value.
     *
     * @param $length
     * @return array
     * @throws \InvalidArgumentException
     */
    public function getTopPlayers(int $length = 3): array
    {
        if ($length < 1) {
            throw new \InvalidArgumentException();
        }

        return array_slice($this->results, 0, $length);
    }

    /**
     * @param \SplSubject $subject
     * @return void
     */
    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof RaceGame) {
            // Clear current results
            $this->results = [];
            
            // Get all players and their positions
            $players = $subject->getPlayers()->getPlayers();
            $board = $subject->getBoard();
            
            foreach ($players as $player) {
                $position = $board->getPosition($player);
                $this->results[$player->getNick()] = $position;
            }
            
            // Sort by position (descending - highest position first)
            arsort($this->results);
        }
    }
}
