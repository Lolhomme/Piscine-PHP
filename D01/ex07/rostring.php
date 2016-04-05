#!/usr/bin/php
<?php
function  split_it($string)
{
  $explode = explode(" ", $string);
  $filter = array_filter($explode);
  $slice = array_slice($filter, 0);
  return $slice;
}
if ($argc < 2)
{
  exit(1);  # code...
}
$splitted = split_it($argv[1]);
if (count($splitted))
{
    $t = array_splice($splitted, 1)
    foreach($t as $element)
    {
        echo $element." ";
    }
    echo $splitted[0]."\n";
}
?>
