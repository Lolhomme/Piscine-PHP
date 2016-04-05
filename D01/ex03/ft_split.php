#!/usr/bin/php
<?php
function  ft_split($string)
{
  $explode = explode(" ", $string);
  $filter = array_filter($explode);
  $slice = array_slice($filter, 0);
  sort($slice);
  return ($slice);
}
 ?>
