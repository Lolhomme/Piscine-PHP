#!/usr/bin/php
<?php
function ft_is_sort($array)
{
  $sorted = $array;
  sort($sorted);
  foreach ($sorted as $element)
  {
    if ($element !== $array)
    {
    return false;  # code...
    }  # code...
  }
  return true;
}
 ?>
