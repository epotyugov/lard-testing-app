<?php
	$controller = new App\Controllers\DogsController();
	$dogsData = $controller->getDogViewData();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Пёсели</title>
	</head>

	<body>
		<h1>Все собаки:</h1>
		<?php foreach ($dogsData as $dog): ?>
			<ul>
				<li>Собаку зовут <?=$dog->getBreedName() ?></li>
				<li>Эта собака делает <?=$dog->makeSound() ?></li>
				<li>Собака охотится? <?=$dog->hunt() ?></li>
			</ul>
		<?php endforeach ?>
	</body>
</html>