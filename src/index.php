<?php 


namespace TDD;

include("./KerstBorrel.php");

$kerstborrel = new KerstBorrel();

$aantalPersoneelsleden = 21;
$maxBudget = 5000;

?>
<div class="container" style="text-align:center;">
    <h1>Unit PHP Toets</h1>

    <h4>
    Vandaag zijn er <?php echo $aantalPersoneelsleden ?> personeelsleden aanwezig,
    het maximale budget wat gereserveerd is voor de kersborrel: 
 <?php echo $maxBudget ?> &euro; 

 <h4>Dan is het bedrag dat wij voor het kerstpakket kunnen besteden: <?php echo $kerstborrel->kostenKerstpakket($aantalPersoneelsleden, $maxBudget) ?> &euro; </h4>
    </h4>

</div>