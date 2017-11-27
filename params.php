<?php
/**
 * Restaure la valeur par défaut pour un input
 * @param string $pElement Nom l'élément
 */
function restore($pElement) {
    // Teste l'existence de la variable
    if (isset($_POST[$pElement]) == true) {
        echo ' value="' . htmlentities($_POST[$pElement]) . '"';
    }
}

function getInput($pElementType, $pElementName) {
    echo '<input type="' , $pElementType ,'" name="' , $pElementName , '"';
    restore($pElementType);
    echo ' />';
}

$aselectionne = array (1 => 'JEDI', 'SITH');
asort($aselectionne, SORT_NATURAL | SORT_FLAG_CASE);

