#!/usr/bin/php
<?php
$month = array(
	'/janvier/i',
	'/fevrier/i',
	'/mars/i',
	'/avril/i',
	'/mai/i',
	'/juin/i',
	'/juillet/i',
	'/aout/i',
	'/septembre/i',
	'/octobre/i',
	'/novembre/i',
	'/decembre/i');

$month_num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
if (isset($argv) && $argc == 2)
{
	$regex = '/^([lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche]+) ([0-9][0-9]?) ([janvier|fevrier|mars|avril|mai|juin|juillet|aout|septembre|octobre|novembre|decembre]+) ([0-9][0-9][0-9][0-9]) ?([0-9][0-9]:[0-9][0-9]:?[0-9]?[0-9]?)?$/i';

	if (preg_match($regex, $argv[1], $match))
	{
		$date = $match[2].'.'.preg_replace($month, $month_num, $match[3]).'.'.$match[4].' '.$match[5];
		date_default_timezone_set('Europe/Paris');
		echo strtotime($date);
	}
	else
		echo "Wrong Format\n";
	echo "\n";
}
?>
