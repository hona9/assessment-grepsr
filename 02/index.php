<?php
function floorNumbers(float $float, int $precision)
{
  $split = explode(".", $float);
  $split[1] = substr_replace($split[1], ".", $precision, 0);

  if ($split[0] >= 0) {
    $split[1] = floor($split[1]);
  } else {
    $split[1] = ceil($split[1]);
  }
  $output = $split[0] . "." . $split[1];
  return $output;
}
echo floorNumbers(-1.45499, 4) . "</br>";
echo floorNumbers(-20.21456, 3);
