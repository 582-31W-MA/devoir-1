<?php if (isset($examples)) : ?>
	<ol class="examples">
		<?php foreach ($examples as $example) : ?>
			<li class="example">
				<?php snippet("example", ["example" => $example]) ?>
			</li>
		<?php endforeach ?>
	</ol>
<?php endif ?>