<?php
// Traiter le formulaire de calcul
// Remplacer les variables [NB1], [NB2], [OPERATION], [RESULTAT] par les vrais valeurs
if(!empty($_GET['nb1']) && !empty($_GET['nb2'])){
    $nb1 = strip_tags($_GET['nb1']);
    $nb2 = strip_tags($_GET['nb2']);
    $operation = strip_tags($_GET['operation']);
    $resultat;


    switch ($operation) {
        case '+':
            $resultat = $nb1 + $nb2;
            break;
        case '-':
            $resultat = $nb1 - $nb2;
            break;
        case '*':
            $resultat = $nb1 * $nb2;
            break;
        case '/':
            $resultat = $nb1 / $nb2;
            break;
        default:
            $resultat = 'Opération non valide';
            break;
    }
}

$html = file_get_contents('formulaire.html');
$html = str_replace('[NB1]',$nb1,$html);
$html = str_replace('[NB2]',$nb2,$html);
$html = str_replace('[OPERATION]',$operation,$html);
$html = str_replace('[RESULTAT]',$resultat,$html);

echo $html;

?>