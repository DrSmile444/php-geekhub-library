<?php namespace Transfer;

class toBinary
{
  public function __construct($number)
  {
    die($this->calc_number_to_binary($number));
  }

  private function calc_number_to_binary($number) {
    $result = [];

    while (0 < $number) {
      $remainder = $number % 2;
      array_push($result, $remainder);
      $number = ($number - $remainder) / 2;
    }

    return join('', array_reverse($result));
  }
}
