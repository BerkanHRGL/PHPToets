<?php 

Namespace TDD;


class KerstBorrel {

    public function kostenKerstpakket($aantalPersoneelsleden, $maxBudget){

        $dranken = 8 * (round(0.5 * $aantalPersoneelsleden));

        $snacks = 2 * (round(6.5 * $aantalPersoneelsleden));
        
        if($aantalPersoneelsleden < 1 || $aantalPersoneelsleden > 32 ){
            echo "<br>  <br> Het aantal personeelsleden valt buiten het bereik." ;
        }

        
        if($maxBudget < 200 || $maxBudget > 8000 ){
            echo "<br> <br> Het maximale budget voor het kerstpakket valt buiten het bereik." ;
        }


         $totaalKostenKerstpakket = ($maxBudget - $dranken - $snacks) / $aantalPersoneelsleden;
        
        return round ($totaalKostenKerstpakket);
        
        if( $totaalKostenKerstpakket > 250) {
            echo " <br> Bedrag is hoger dan de toegestane 250 " ;
        }

    }


}

?>