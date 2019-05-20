<?php

declare(strict_types=1);

namespace App\Task3;

use App\Task1\FightArena;

class FightArenaHtmlPresenter
{
    public function present(FightArena $arena): string
    {
        $arenaToStr = '';
        $fighters = $arena->all();
        if (!empty($fighters)) {
            foreach ($fighters as $fighter) {
                $arenaToStr .= '<p><img src="'.$fighter->fImage.'">'.$fighter->fName.': '.$fighter->fHealth.', '.$fighter->fAttack.'</p>';
            }
        } else {
            $arenaToStr = 'Arena is empty!';
        }
        return $arenaToStr;
    }
}
