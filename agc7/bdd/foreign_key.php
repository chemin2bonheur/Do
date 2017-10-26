<?php
namespace GC7;
?>
<div class="jumbotron">
    <h3>Clés étrangères</h3>
    <p class="lead">
        Pour automatiser cohérences des opérations update et delete entre 2 tables
    </p>
</div>
<?php

$req = function ( $sql ) {
  $cnx = new \PDO( 'mysql:host=localhost;dbname=laravel;charset=utf8', 'root', '' );

  $rep = $cnx->query( $sql )
    ->fetchAll( \PDO::FETCH_OBJ );
//  aff($rep);
  if ( $rep ) affR( $rep );
};

$nbr = function ( $table ) {
  $cnx = new \PDO( 'mysql:host=localhost;dbname=laravel;charset=utf8', 'root', '' );

  return $cnx->query( 'select count(*) from ' . $table )->fetch()[ 0 ];
};


//echo '<h3>UNION ALL</h3>Sinon, dédoublonnage automatique (DISTINCT induit)';
$sql='select * from pets limit 3';
aff($sql);
$req($sql);


?>
<div class="jumbotron">
  <p class="h3-responsive">Les tables de référence</p>
  <?php
  $sql = 'select id, clt_id, nom, espece, sexe from pets limit 4';
  aff( 'Pets (Les 4 premiers ' . '/' . $nbr( 'pets' ) . ')' );
  $req( $sql );

  aff( 'Animaux (Les 3 premiers ' . '/' . $nbr( 'animaux' ) . ' qui ont un propriétaire)' );
  $sql = 'select id, clt_id, nom, espece, sexe, commentaires from animaux where clt_id > ""
 limit 3';
  $req( $sql );

  aff( 'Users (Les 3 premiers ' . '/' . $nbr( 'users' ) . ')' );
  $sql = 'select id, name as pseudo, email, role from users where id in (1,15,16)';
  $req( $sql );
  ?>
</div>
