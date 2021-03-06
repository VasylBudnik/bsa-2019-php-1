<?php declare(strict_types=1);

namespace App\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $emojiArr = ['🚀', '🚃', '🚄', '🚅', '🚇'];

        foreach ($emojiArr as $emoji) {
            yield $emoji;
        }
    }
}
