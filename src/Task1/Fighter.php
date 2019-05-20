<?php

declare(strict_types=1);

namespace App\Task1;

class Fighter
{

    public $ID;
    public $name;
    public $health;
    public $attack;
    public $image;

    public function __construct(int $ID, string $name, int $health, int $attack, string $image)
    {
        $this->ID = $ID;
        $this->name =$name;
        $this->health = $health;
        $this->attack = $attack;
        $this->image = $image;
    }

    public function getId(): int
    {
        return $this->ID;
    }

    public function getName(): string
    {
        $this->name;
    }

    public function getHealth(): int
    {
        $this->health;
    }

    public function getAttack(): int
    {
        $this->attack;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
