<?php

if(isset($_POST['nbAllumettes']))
$nbAllumettes=$_POST['nbAllumettes'];

if(isset($_POST['nbPris']))
$nbPris=$_POST['nbPris'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Le jeu des allumettes</title>
</head>
<body>
<?php

class partie {
    var $nbRest;
    function start() {
        $this->nbRest=13;

        for ($i=0;$i<$this->nbRest;$i++)
        {
            echo "<td width=\"50\"><img src=\"exo1/allumette.jpg\"></td>";
        }

        echo "</tr></table><br><br>";


    }


    function calculeNb()
    {
        $rest=$this->nbRest%4;

        switch($rest)
        {
            case "0":
                $choix=3;
                break;

            case "1":
                srand((double)microtime()*1000000);
                $choix=rand(1,3);
                break;
            case "2":
                $choix=1;
                break;
            case "3":
                $choix=2;
                break;
        }

        return($choix);

    }

    function joueOrdi()
    {
        switch ($this->nbRest)
        {
            case "1":
                $choixOrdi=1;
                break;

            case "2":
                $choixOrdi=1;
                break;

            case "3":
                $choixOrdi=2;
                break;

            default:
                $choixOrdi=$this->calculeNb();

                break;
        }


        $this->nbRest-=$choixOrdi;

        $this->affiche("<b>L'ordinateur a pris $choixOrdi allumette(s)</b>");


        $this->choix();
    }

    function init($nbPris,$nbAllumettes) {
        $this->nbRest=($nbAllumettes-$nbPris);

        $this->joueOrdi();
    }

    function finPartie($vainqueur)
    {

        echo "Fin de la partie<br>";
        if ($vainqueur=="humain")
        {
            echo "Vous avez gagné !<br>";
        }
        else
        {
            echo "Vous avez perdu.<br>";
        }
    }

}

?>


<form>


</form>
</body>
</html>