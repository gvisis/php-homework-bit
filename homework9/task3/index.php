<!-- Sukurti klasę Grybas. 
Sukurti klasę Krepsys. 
Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris.
 Kuriant Grybo objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. 
 Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnkta 500 svorio nesukirmijusių ir valgomų grybų. -->

 <?php
include __DIR__.'/Grybas.php'; 
include __DIR__.'/Krepsys.php'; 

echo '<pre>';

$krepsys = new Miskas\Didelis\Krepsys;

while($krepsys->addToBasket(new Miskas\Mazas\Grybas)) {}

var_dump($krepsys);


 ?>