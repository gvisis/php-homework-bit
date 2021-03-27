<!-- Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai - popierinių pinigų skaičiavimui. -->

 <?php
 // prisiklijuoja prie visu klasiu 
  namespace Miskas\Didelis;
// pasako, kad naudotu miskas, mazas grybas namespace
  use Miskas\Mazas\Grybas;

 class Krepsys {
  private $yra;
  const TALPA = 500;

  public $itemsInside = 0;

  public function addToBasket(Grybas $grybas) : bool {
    if (!$grybas->sukirmijes && $grybas->valgomas){
      $this->yra += $grybas->svoris;
    }
    // reikia, kad grazintu true visada, kai yra dar vietos
    return self::TALPA >= $this->yra;
  }
 }

 ?>