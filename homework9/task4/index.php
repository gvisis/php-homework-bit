<!-- Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai - popierinių pinigų skaičiavimui. -->
<?php

require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine();

$pinigine->ideti(13);
$pinigine->ideti(142);
$pinigine->ideti(1);
$pinigine->ideti(0.5);
$pinigine->ideti(0.3);

echo '<pre>';
var_dump($pinigine);

var_dump(
  $pinigine->skaiciuoti(),
$pinigine->getMetaliniai(),
$pinigine->getPopieriniai(),)

?>