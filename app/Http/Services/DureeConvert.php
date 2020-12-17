<?php


namespace App\Http\Services;


class DureeConvert
{
    public function convertir($secondes){
        $chaine = 'Il y a ';
        $minutes=$secondes/60;
        if ($minutes ==0)
            return '$chaine $duree secondes.';
        $heures=$minutes/60;
        if ($heures ==0)
            return '$chaine $duree minutes.';
        $jours=$heures/24;
        if ($heures ==0)
            return '$chaine $duree heures.';
        $semaines =$jours/7;
        if ($semaines ==0)
            return '$chaine $duree jours.';
        $mois =$jours/30;
        if ($mois ==0)
            return '$chaine $duree semaines.';
        $ans =$mois/12;
        return '$chaine $duree ans.';
    }
}
