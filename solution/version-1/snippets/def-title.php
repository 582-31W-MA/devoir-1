<<?= "h$lvl" ?> class="def-title">
	<?php if (isset($def["prefix"])) : ?>
		<span class="prefix"><?= $def["prefix"] ?></span>
	<?php endif ?>

	<?php if (isset($def["bracketed_prefix"])) : ?>
		<span class="bracketed-prefix"><?= $def["bracketed_prefix"] ?></span>
	<?php endif ?>

	<?= $def["text"] ?>
</<?= "h$lvl" ?>>