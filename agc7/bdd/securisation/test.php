<?php

namespace GC7;

?>
<div class="jumbotron">

  <h3 class="meaDo pb10">Exo final (6)</h3>

  <p class="lead"><a
      href="http://exercices.openclassrooms.com/assessment/223?login=441267&tk=31e3340fac83f036e28bc0016e777dc0&sbd=2016-02-01&sbdtk=fa78d6dd3126b956265a25af9b322d55"
      target="_blank">Mission</a></p>

  <p>(8/11/2017 - Env. 5 jours pour corr)</p>

  <p class="lead">1/ Page Accueil: Nb de commentaires (Stockés et automatiquement mise à jour)</p>

  <p class="lead">2/ </p>

</div>


<div class="maingc7">

  <?php

  $pdo = pdo( 'ocr2' );

  $sql = "select * from article";
  // affLign( $sql );
  // $pdo->query( $sql );

  
  $req( $sql, $pdo );

  ?>

</div>
