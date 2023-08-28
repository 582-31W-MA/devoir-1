<?php

function snippet($name, $variables)
{
	extract($variables);

	include "snippets/$name.php";
}
