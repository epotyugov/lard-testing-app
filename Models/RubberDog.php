<?php

namespace App\Models;

/**
 * Дочерний класс резиновой собаки с пищалкой
 */
class RubberDog extends ToyDog
{
	/** Звуки резиновой собаки (примерно) */
	protected string $sound = 'пиииииииииииииииск';

	/**
	 * Конструктор класса резиновой собаки
	 */
	public function __construct(string $breedName)
	{
		$this->breedName = 'резиновый(-ая) ' . $breedName;
	}
}