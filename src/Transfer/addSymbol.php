<?php namespace Transfer;

function addSymbol($data, $length, $symbol) {
  $newString = (string)$data;
  $strLength = strlen($newString);

  for ($i = 0, $n = $length - $strLength; $i < $n; $i++) { 
    $newString = $symbol.$newString;
  }

  return $newString;
}