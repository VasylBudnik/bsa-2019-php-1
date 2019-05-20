<?php

declare(strict_types=1);

namespace App\Task1;

class FightArena
{
    public $arena = [];

    public function add(Fighter $fighter): void
    {
        $this->arena[] = $fighter;
    }

    public function mostPowerful(): Fighter
    {
        $fighter = null;

        if (count($this->arena) == 0) {
            return null;
        }
        $arena = $this->arena;
        usort($arena, function ($first, $second){
           return ($first->attack < $second->attack and $first->health > $second->health);
        });
        $fighter = current($arena);
        return $fighter;

    }

    public function mostHealthy(): Fighter
    {
        $fighter = null;

        if (count($this->arena) == 0) {
            return null;
        }
        $arena = $this->arena;
        usort($arena, function ($first, $second){
            return ($first->health < $second->health and $first->attack > $second->attack);
        });
        $fighter = current($arena);
        return $fighter;
    }

    public function all(): array
    {
        return $this->arena;
    }
}
