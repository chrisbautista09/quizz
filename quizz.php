<!DOCTYPE html>
<html>
<body>

<?php


$questions = [
    "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;

$NB_QUESTIONS = count($questions);
echo "###################################################################### \n";
echo "###################Qui veux gagner des millions ?!#################### \n";
echo "###################################################################### \n";
echo "\n";
echo "###################################################################### \n";
echo "score=0 \n";
echo "###################################################################### \n";
echo "\n";
echo "\n";





for($i = 0; $i < $NB_QUESTIONS; $i++)
{
    echo "Question " .($i+1). " : \n \n" .$questions[$i]."\n";
    $saisiecl= trim(fgets(STDIN));
    echo " \n";
    if ($reponses[$i]==$saisiecl) {
        echo   "Suspennnnce ! \n \n";
        echo "Bien joué ! \n \n";
        $score +=10;
        echo "*Le score augmente de : 10 *\n \n";
    }

    else  {
        echo "NON  ! \n \n";
        echo "*Le score n'augmente pas. :(* \n \n";
    }
    echo "################################################## \n";
    echo "score : $score \n";
    echo "################################################## \n \n";
    
    
    
}


echo "###########GAME OVER########### \n"; 

echo "Pourcentage de bonne réponse : ".($score*2)." % \n \n";

if (
    $score >= "25") {
    echo "Bravo tu as gagné des millions \n";
    }
    else {
    echo "Tu as perdu, recommence le quizz \n";
    }

  
    $ancienscore = (int) 0;
    $ancienscore = fopen ("ancienscore.txt","r+");
    if ($ancienscore == FALSE)  {
      $ancienscore = fopen ("ancienscore.txt","r+");  
    }
     file_get_contents ("ancienscore.txt");
     fwrite ($ancienscore,$score);
     fclose ($ancienscore);

     echo "ancienscore.txt";











?>


</body>
</html>