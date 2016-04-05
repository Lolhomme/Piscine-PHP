#!/usr/bin/php
<?php
$handle=fopen("php://stdin","r");
while (1) {
  echo "Entrez le nombre: ";
  $gotten = fgets($handle);
  if($gotten == false)
  {
    echo "\n";
    break;
  }
  $line = substr($gotten, 0, -1);
  if (strlen($line) > 0 && is_numeric($line))
  {
    echo "Le chiffre " .$line." est ";
    if ((int)substr($line, -1) % 2)
    {
      echo "impair";
    }
    else
    {
    echo "pair";
    }
  }
  else
  {
    echo "'$line' n'est pas un chiffre";  # code...
  }
  echo "\n";
}
 ?>
