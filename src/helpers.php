<?php
/////////////////////////////////////////////
// fonctions et tableaux pour le jeux
/////////////////////////////////////////////

// fonction battle qui prends 2 objets comme paramètres
function battle(object $guerrier, object $orc): void
{
    // le combat ne pourra se lancer uniquement si l'un des 2 adversaires est vivant
    if ($guerrier->getHealth() > 0 && $orc->getHealth() > 0) {

        // on créé une variable qui va contenir nos étapes de combat
        $battleLog = "";

        // QUAND LE GUERRIER COMMENCE !!!
        /////////////////////////////////
        if (isset($_SESSION['starter']) && $_SESSION['starter'] == "Le Guerrier commence") {
            // Le guerrier va attaquer
            // on fait perdre de la vie à l'Orc avec la méthode getDamage()
            $orc->getDamage($guerrier->attack());
            // on inscrit le log de notre premiere attaque
            $battleLog = "Le guerrier attaque de " . $guerrier->attack() . " points. <br>";

            // on regarde si l'orc meurt, s'il est encore envie : il attaque !!!
            if ($orc->getHealth() > 0) {
                // on fait une ligne sur notre log de combat
                $battleLog .= "L'orc reçoit de plein fouet son attaque et il lui reste " . $orc->getHealth() . " points de vie. <br>";

                // l'Orc va attaquer
                // on stock la valeur de l'attaque de l'orc
                $orcAttack = $orc->attack();
                // on fait perdre de la vie au Guerrier avec la méthode getDamage()
                $guerrier->getDamage($orcAttack);
                // si la vie du guerrier tombe à 0, on le fait mourir
                $battleLog .= "L'orc effectue une contre-attaque de " . $orcAttack . " points. <br>";
                $battleLog .= "Le bouclier du guerrier absorbe " . $guerrier->getShieldValue() . " points de dégats. <br>";
                $battleLog .= ($orcAttack - $guerrier->getShieldValue()) > 0 ? "Le guerrier ne reçoit que " . $orcAttack - $guerrier->getShieldValue() . " points de dégat. <br> " : "Le guerrier ne réçoit aucun dégât .<br>";
                $battleLog .= $guerrier->getHealth() == 0 ? "Le guerrier meurt" : "Le guerrier a encore " . $guerrier->getHealth() . " de vie. ";
            } else {
                $battleLog .= "L'orc meurt";
            }
            // je créé les logs du combat que je stock dans une variable de session
            $_SESSION["battle_log"][] = $battleLog;
        } else {
            // QUAND L'ORC COMMENCE !!!
            ////////////////////////////////

            // l'Orc va attaquer
            // on stock la valeur de l'attaque de l'orc
            $orcAttack = $orc->attack();
            // on fait perdre de la vie au Guerrier avec la méthode getDamage()
            $guerrier->getDamage($orcAttack);
            // on inscrit le log de notre premiere attaque
            $battleLog .= "L'orc effectue une attaque  de " . $orcAttack . " points. <br>";
            $battleLog .= "Le bouclier du guerrier absorbe " . $guerrier->getShieldValue() . " points de dégats. <br>";
            $battleLog .= ($orcAttack - $guerrier->getShieldValue()) > 0 ? "Le guerrier reçoit " . ($orcAttack - $guerrier->getShieldValue()) . " points de dégât. <br>" : "Le guerrier rigole car 0 dégat reçu. <br>";

            // on regarde si le guerrier meurt, s'il est encore envie : il attaque !!!
            if ($guerrier->getHealth() > 0) {
                // on fait une ligne sur notre log de combat
                $battleLog .= "Le guerrier a encore " . $guerrier->getHealth() . " points de vie. <br>";

                // le guerrier va contre-attaquer
                // on fait perdre de la vie à l'Orc avec la méthode getDamage()
                $orc->getDamage($guerrier->attack());
                // on inscrit le log de notre premiere attaque
                $battleLog .= "Le guerrier lance une contre-attaque de " . $guerrier->attack() . " points. <br>";
                $battleLog .= $guerrier->getHealth() == 0 ? "L'orc meurt" : "L'orc n'a plus que " . $orc->getHealth() . " de vie. ";
            } else {
                $battleLog .= "Le guerrier meurt";
            }
            // je créé les logs du combat que je stock dans une variable de session
            $_SESSION["battle_log"][] = $battleLog;
        }
    }
}

// tableau de nom pour l'Orc
$orcNames = ['Shreky', 'Hulcq', 'Géant Vert', 'Zac'];

// tableau de nom pour le Guerrier
$guerrierNames = ['Conan', 'Barbarian', 'Uldrick', 'Storm', 'Stomp'];
