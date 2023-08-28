<section class="def-diamond">
	<?php snippet("def-title", ["def" => $def_diamond, "lvl" => 5]) ?>

	<?php
	if (isset($def_diamond["examples"])) {
		snippet("examples", ["examples" => $def_diamond["examples"]]);
	}
	?>
</section>