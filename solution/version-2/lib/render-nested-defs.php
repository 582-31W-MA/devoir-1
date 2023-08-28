<?php

/**
 * Affiche récursivement toutes les définitions et sous-définitions
 * d'un mot, ainsi que leurs informations.
 *
 * @param array $array Tableau multi-dimensionnel contenant des
 * définitions et des sous-définitions.
 * @param string $array_type Le type du tableau (roman, letter,
 * examples, etc.). Voir les données.
 */
function renderNestedDefs($array, $array_type = "")
{
	 // Cas de base
	
	 // Si le présent élément n'est pas un tableau (nous sommes donc
	 // rendus au dernier niveau du tableau multi-dimensionnel),
	 // affiche l'information et stop la fonction.
	if (!is_array($array)) {
		// L'élément reçoit comme classe le nom du tableau parent
		// (roman, dash, exemples, etc.).
		echo "<li class='$array_type'>$array</li> ";
		return;
	}

	foreach ($array as $nested_array_key => $nested_array) {
		// Si le tableau parent est une liste (si ses clés sont des
		// nombres consécutifs), le présent tableau est soit une
		// définition, soit un exemple.
		if (array_is_list($array)) {
			echo "<li><ol class='$array_type'>";
			renderNestedDefs($nested_array, $nested_array_key);
			echo "</li></ol>";
		}
		// Sinon, nous sommes au « premier niveau » d'une définition.
		// Appel la fonction récursive sans rien afficher. 
		else {
			renderNestedDefs($nested_array, $nested_array_key);
		}
	}
}
