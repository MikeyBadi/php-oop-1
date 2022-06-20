
<?php
class Movie{
  private $name;
  private $year;
  public $length;
  public $director;

  public function __construct($_length, $_director){
    $this->director = $_director;
    $this->length = $_length;
  }

  //SETTER
  public function setName($name){
    $this->name = $name;
  }
  public function setYear($year){
    $this->year = $year;
  }

  // GETTER
  public function getName(){
    return $this-> name;
  }
  public function getYear(){
    return $this-> year;
  }
}
