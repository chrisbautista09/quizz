<!DOCTYPE html>
<html>
<body>

<?php

// Tableau contenant les questions du quiz 
$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];

// Tableau des bonnes réponses 
$reponses = [1, 2, 3, 1, 3];

// Initialisation du score à 0
$score = 0;

// Nombre total de questions
$NB_QUESTIONS = count($questions);

// Introduction
echo "###################################################################### \n";
echo "###################Qui veux gagner des millions ?!#################### \n";
echo "###################################################################### \n";
echo "\n";
echo "###################################################################### \n";
echo "score=0 \n";
echo "###################################################################### \n";
echo "\n";
echo "\n";

// Boucle principale pour poser chaque question
for($i = 0; $i < $NB_QUESTIONS; $i++)
{
    // Affiche la question 
    echo "Question " .($i+1). " : \n \n" .$questions[$i]."\n";

    // Récupèration de  la réponse
    $saisiecl= trim(fgets(STDIN));
    echo " \n";

    // Vérification de  la réponse 
    if ($reponses[$i] == $saisiecl) {
        echo "Suspennnnce ! \n \n";
        echo "Bien joué ! \n \n";
        $score += 10; // Incrémentation  du score
        echo "*Le score augmente de : 10 *\n \n";
    } else {
        // Réponse incorrecte
        echo "NON  ! \n \n";
        echo "*Le score n'augmente pas. :(* \n \n";
    }

    // Affiche le score après chaque question
    echo "################################################## \n";
    echo "score : $score \n";
    echo "################################################## \n \n";
}

// Fin du quiz
echo "###########GAME OVER########### \n"; 

// Affiche le pourcentage de bonnes réponses
echo "Pourcentage de bonne réponse : ".($score*2)." % \n \n";

// Affichage du résultat si  le score est atteint ou pas
if ($score >= 25) {
    echo "Bravo tu as gagné des millions  \n \n";
} else {
    echo "Tu as perdu, recommence le quizz \n \n";
}

// === Enregistrement du score dans un fichier ===

// Tentative d'ouverture du fichier en lecture/écriture
$fichierscore = fopen("ancienscore.txt", "r+");

// Si le fichier n'existe pas, on le crée en écriture/lecture
if ($fichierscore == FALSE) {
    $fichierscore = fopen("ancienscore.txt", "w+");
}

// Écrit le score dans le fichier
fwrite($fichierscore, $score);
fclose($fichierscore);
file_get_contents("ancienscore.txt");

echo " \n \n";

echo "$score". "\n \n";

if ($score < $fichierscore) {
    echo " tu t'es amélioré, ce coup-ci !!!";
}


?>

</body>
</html>













