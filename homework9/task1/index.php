<?php

require __DIR__.'/Pinigine.php';

$pinigine = new Pinigine();

$pinigine->ideti(13);
$pinigine->ideti(1);

echo '<pre>';
var_dump($pinigine);

$pinigine->skaiciuoti();

?>