<?php

namespace App\Models;

/**
 * Дочерний класс плюшевой собаки
 */
class PlushDog extends ToyDog
{
	/** Звуки плюшевой собаки */
	protected string $sound = '*молчит*';

	/**
	 * Конструктор класса плюшевой собаки
	 */
	public function __construct(string $breedName)
	{
		$this->breedName = 'плюшевый(-ая) ' . $breedName;
	}
}