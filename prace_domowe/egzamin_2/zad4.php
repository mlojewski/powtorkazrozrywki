<?php

class MyDate{
    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy
    private $year; //Wartość większa niż 0

 function __construct()
{
  $this->day = 1;
  $this->month = 1;
  $this->year = 2000;
}
  public function getDay()
  {
    return $this->day;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function getYear()
  {
    return $this->year;
  }
  public function setDay($day)
  {
    if (is_integer($day) && $day>0 && $day < 32) {
      $this->day = $day;
    }
  }
  public function setMonth($month)
  {
    if (is_integer($month) && $month>0 && $month < 12) {
      $this->month = $month;
    }
  }
  public function setYear($year)
  {
    if (is_integer($year) && $year>0 ) {
      $this->year = $year;
    }
  }

    public function moveForwardByDays($days){
      $this->day += 1;
      if ($this->day=31) {
        $this->day = 1;
        $this->month+=1;
      }
      if ($this->month = 12) {
        $this->month = 1;
        $this->year+=1;
      }
    }
}
