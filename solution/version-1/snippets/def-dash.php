<section class="def-dash">
	<?php snippet("def-title", ["def" => $def_dash, "lvl" => 4]) ?>

	<?php
	if (isset($def_dash["examples"])) {
		snippet("examples", ["examples" => $def_dash["examples"]]);
	}
	?>

	<?php
	if (isset($def_dash["defs_diamond"])) {
		foreach ($def_dash["defs_diamond"] as $def_diamond) {
			snippet("def-diamond", ["def_diamond" => $def_diamond]);
		}
	}
	?>
</section>