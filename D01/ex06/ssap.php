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

$fused = array();
$i = 1;
while ($i < $argc)
{
  $splitted = split_it($argv[$i]);
  $fused = array_merge($fused, $splitted);
  $i++;  # code...
}
asort($fused);
foreach ($fused as $element)
{
  echo $element."\n";  # code...
}
?>
