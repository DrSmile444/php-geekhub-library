<?php namespace Transfer;

require_once 'addSymbol.php';

class toBinary
{
  public function __construct($number, $method = "")
  {
    echo $this->calc_number_to_binary($number, $method);
  }

  private function calc_number_to_binary($number, $method) {
    $system = 2;
    $resultString = "";
    $result = [];
    $lineBreak = "<br>";

    $numberLen = strlen((string)$number);
    $resultString .= $number."|".$system.$lineBreak;

    while (0 < $number) 
    {
      $remainder = $number % $system;
      $number = ($number - $remainder) / $system;

      if ($method == "advanced") 
      {
        $resultString .= addSymbol($number, $numberLen, " ")."|".$remainder.$lineBreak;
      } 

      array_push($result, $remainder);
    }

    $formattedResult = join('', array_reverse($result));

    if ($method == "advanced") {
      return $this->stylize_string_to_pre($resultString.$lineBreak.$formattedResult);
    }

    return $this->stylize_string_to_pre($formattedResult);
  }

  private function stylize_string_to_pre($string) 
  {
    return "<pre>".$string."</pre>";
  }
}
