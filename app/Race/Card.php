<?php

declare(strict_types=1);

namespace Race;

abstract class Card
{
    /**
     * @var Card
     */
    private $next = null;

    /**
     * @var bool
     */
    private $processed = false;

    /**
     * @param Card $card
     * @return void
     */
    final public function append(Card $card): void
    {
        if (is_null($this->next)) {
            $this->next = $card;
        } else {
            $this->next->append($card);
        }
    }

    /**
     * @param int $diceThrowResult
     * @return int|false
     */
    final public function handle(int $diceThrowResult)
    {
        // If this card is already processed, skip to next
        if ($this->processed) {
            if ($this->next !== null) {
                return $this->next->handle($diceThrowResult);
            }
            return false;
        }
        
        // Process this card
        $result = $this->process($diceThrowResult);
        
        // If this card returns a non-zero result, mark it as processed and return the result
        if ($result !== 0) {
            $this->processed = true;
            return $result;
        }
        
        // If this card doesn't apply (returns 0), try the next card
        if ($this->next !== null) {
            return $this->next->handle($diceThrowResult);
        }
        
        return false;
    }

    /**
     * @return Card|null
     */
    final public function getNext(): ?Card
    {
        return $this->next;
    }

    /**
     * @param int $diceThrowResult
     * @return int
     */
    abstract protected function process(int $diceThrowResult): int;
}
