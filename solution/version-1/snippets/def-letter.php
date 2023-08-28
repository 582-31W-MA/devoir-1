<section class="def-letter">
	<?php snippet("def-title", ["def" => $def_letter, "lvl" => 3]) ?>

	<?php
	if (isset($def_letter["examples"])) {
		snippet("examples", ["examples" => $def_letter["examples"]]);
	}
	?>

	<?php
	if (isset($def_letter["defs_dash"])) {
		foreach ($def_letter["defs_dash"] as $def_dash) {
			snippet("def-dash", ["def_dash" => $def_dash]);
		}
	}
	?>
</section>