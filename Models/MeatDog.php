<?php

namespace App\Models;

/**
 * Класс живой собаки
 */
class MeatDog extends Dog
{
	public function __construct(string $breedName, bool $isHunter, string $sound)
	{
		$this->breedName = $breedName;
		$this->isHunter = $isHunter;
		$this->sound = $sound;
	}
}