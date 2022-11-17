<?php

namespace App\Models\Interfaces;

/**
 * Интерфейс родительского класса собаки
 */
interface IDog
{
	public function makeSound(): string;

	public function hunt(): string;
}