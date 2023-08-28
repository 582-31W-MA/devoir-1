<section class="def-roman">
	<?php snippet("def-title", ["def" => $def_roman, "lvl" => 2]) ?>

	<?php
	if (isset($def_roman["examples"])) {
		snippet("examples", ["examples" => $def_roman["examples"]]);
	}
	?>

	<?php
	if (isset($def_roman["defs_dash"])) {
		foreach ($def_roman["defs_dash"] as $def_dash) {
			snippet("def-dash", ["def_dash" => $def_dash]);
		}
	}

	if (isset($def_roman["defs_letter"])) {
		foreach ($def_roman["defs_letter"] as $def_letter) {
			snippet("def-letter", ["def_letter" => $def_letter]);
		}
	}
	?>
</section>