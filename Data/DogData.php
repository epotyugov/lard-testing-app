<?php

namespace App\Data;

/**
 * Возвращает вводные данные собак
 */
class DogData
{
	/**
	 * Массив с вводными данными собак
	 */
	const DOGE_DATA = [
		[
			'material' => 'meat',
			'breedName' => 'сиба-ину',
			'isHunter' => true,
			'sound' => 'гав',
		],
		[
			'material' => 'meat',
			'breedName' => 'мопс',
			'isHunter' => false,
			'sound' => 'бхрпгбьрбврвр',
		],
		[
			'material' => 'meat',
			'breedName' => 'такса',
			'isHunter' => true,
			'sound' => 'гав',
		],
		[
			'material' => 'plush',
			'breedName' => 'лабрадор',
			'isHunter' => null,
			'sound' => null,
		],
		[
			'material' => 'rubber',
			'breedName' => 'такса',
			'isHunter' => null,
			'sound' => null,
		],
	];

	/**
	 * Возвращает вводные данные собак
	 * 
	 * @return array
	 */
	public static function getDogData(): array
	{
		return self::DOGE_DATA;
	}
}
