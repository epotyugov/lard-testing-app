<?php

namespace App\Controllers;
use App\Models\Dog;

/**
 * Класс контроллера страницы с собаками
 */
class DogsController
{
	public function __construct() {}

	/**
	 * Возвращает подготовленных к выводу собак
	 */
	public function getDogViewData(): array
	{			
		return Dog::getDogModels();
	}
}