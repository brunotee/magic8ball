<?php

$data = ["C’est certain"
, "C’est complètement ça"
, "Sans aucun doute"
, "Oui, vraiment"
, "Tu peux compter dessus"
, "Augure favorable"
, "Très probablement"
, "Ça m’a l’air de bien se présenter"
, "Oui"
, "Les signes indiquent que oui"
, "La réponse est flou, essaye encore"
, "Redemande plus tard"
, "Il ne vaut mieux pas que je réponde tout de suite"
, "Impossible à prévoir pour l’instant"
, "Concentre toi et redemande"
, "Ne compte pas dessus"
, "Ma réponse est non"
, "Mes sources disent non"
, "Ça ne se présente pas bien"
, "Très peu probable",
];
// si pas de Session  remplir les possibles
if (! $_SESSION['possibles']){
  $_SESSION['possibles']=array_keys($data);
}
/** si il y a une reponse de user */
if ($_REQUEST && $_GET['question']) {
    var_dump ($_SESSION['possibles']);
    $long_tableau = count($_SESSION['possibles']);
// Si le tableau est
    if ($long_tableau > 1){
        do {
            $rep = rand(0,$long_tableau - 1);

        }while(array_key_exists($rep,$_SESSION['possibles']));

        $_SESSION['reponse'] = $_SESSION['possibles'][$rep];
        unset($_SESSION['possibles'][$rep]);
    }
        elseif ($long_tableau == 1){
            $_SESSION['reponse'] = $_SESSION['possibles'][0];

        }

    else {

        $_SESSION['reponse'] ="Je répond plus à tes questions terre à terre";
    };
}

else {






}