<?php

require "data/page.php";
require "lib/snippet.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/style.css">
	<title>Document</title>
</head>

<body>
	<main>
		<h1><?= $page["word"] ?></h1>
		<?php foreach ($page["defs_roman"] as $def_roman) : ?>
			<?php snippet("def-roman", ["def_roman" => $def_roman, "lvl" => 2]) ?>
		<?php endforeach ?>
	</main>
</body>

</html>