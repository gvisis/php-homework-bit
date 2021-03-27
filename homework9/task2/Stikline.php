<!-- Sukurti klasę Stiklinė.

 Sukurti privačią savybę tūris ir kiekis. 

 Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 

 Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. 

 Parašyti metodą ispilti(), kuris grąžiną kiekį. 
 Sukurti tris stiklines objektus su tūriais: 200, 150, 100. 

 Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, o mažesnę į dar mažesnę. -->
  
  <?php
  class Stikline {
    private $turis;
    private $kiekis;
    
    public function __construct(int $turis) {
      $this->turis = $turis;
    }

    public function ipilti($kiek) {

        $visoKiekis = $kiek + $this->yra;
        $this->yra = min($this->turis,$visoKiekis)

      $this->kiekis += $kiek;

      if ($this->turis < $this->kiekis) {
        $this->kiekis = $this->turis;
      }


    }

    public function ispilti() {
      $likutis = $this->kiekis;
      $this->kiekis = 0;
      return $likutis;
    }


  }
  ?>