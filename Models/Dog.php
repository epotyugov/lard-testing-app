<?php

namespace App\Models;
use App\Models\Interfaces\IDog;
use App\Data\DogData;

/**
 * Родительский класс всех собак
 */
class Dog implements IDog
{
	/** Название породы собаки */
	protected string $breedName;

	/** Охотник ли собака */
	protected bool $isHunter;

	/** Звук, который издаёт собака */
	protected string $sound;

	/**
	 * Конструктор класса собаки
	 */
	public function __construct(string $breedName)
	{
		$this->breedName = $breedName;
	}


	public function getBreedName(): string
	{
		return $this->breedName;
	}

	/**
	 * Возвращает издаваемый собакой звук
	 * 
	 * @return string
	 */
	public function makeSound(): string
	{
		return $this->sound;
	}

	/**
	 * Отправляет собаку на охоту
	 * 
	 * @return string
	 */
	public function hunt(): string
	{
		return $this->isHunter ? 'Охотится...' : 'Валяется...';
	}

	/**
	 * Возвращает всех собак
	 * 
	 * @return array
	 */
	public static function getDogModels(): array
	{
		$dogeData = DogData::getDogData();
		$dogObjects = [];
		foreach ($dogeData as $doge)
		{
			if ($doge['material'] === 'meat') {
				$dogObjects[] = new MeatDog($doge['breedName'], $doge['isHunter'], $doge['sound']);
			} else {
				$dogType = 'App\Models\\' . ucfirst($doge['material']) . 'Dog';
				$dogObjects[] = new $dogType($doge['breedName']);
			}
		}

		return $dogObjects;
	}
}