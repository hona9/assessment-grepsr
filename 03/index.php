<?php
function formatDate($input_date)
{
  if (str_contains($input_date, " ")) {
    $date = date_create($input_date);
    echo date_format($date, "Y-m-d");
  } else {
    $date = date_create_from_format("dmY", $input_date);
    echo date_format($date, "M-d-y");
  }
}
formatDate("Sep 20 2021");
echo "</br>";
formatDate("09092021");
