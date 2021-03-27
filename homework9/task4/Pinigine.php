<!--Patobulinti 1 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos, kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai - popierinių pinigų skaičiavimui.-->

<?php
class Pinigine {
  private $popieriniaiPinigai;
  private $metaliniaiPinigai;
  static $countPopieriniaiPinigai;
  static $countMetaliniaiPinigai;

  public function ideti($kiekis) {
    if ($kiekis < 2) {
      $this->metaliniaiPinigai += $kiekis;
      self::$countMetaliniaiPinigai++;
    } else { 
      $this->popieriniaiPinigai += $kiekis;
      self::$countPopieriniaiPinigai++;
    }
  }

  public function skaiciuoti() {
    return $this->metaliniaiPinigai + $this->popieriniaiPinigai;
  }

  public function getPopieriniai() {
    return self::$countPopieriniaiPinigai;
  }

  public function getMetaliniai() {
    return self::$countMetaliniaiPinigai;
  }
}

?>
