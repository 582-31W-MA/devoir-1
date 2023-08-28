<?php

require "data/definitions.php";
require "lib/render-nested-defs.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/style.css">
	<title>Abstraction</title>
</head>

<body>
	<main>
		<h1>abstraction</h1>
		<ol>
			<?php renderNestedDefs($definitions); ?>
		</ol>
	</main>
</body>

</html>