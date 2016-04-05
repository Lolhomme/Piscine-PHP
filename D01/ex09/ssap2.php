#!/usr/bin/php
<?php
if ($argv)
{
   $argv = array_splice($argv, 1);
   $ret = array();
   foreach ($argv as $a)
   {
       $a = preg_replace('/\s+/', ' ', trim($a));
       $a = explode(' ', $a);
       $ret = array_merge($ret, $a);
   }
   sort($ret, SORT_STRING | SORT_FLAG_CASE);
   foreach ($ret as $k => $a)
       if (ctype_alpha($a))
       {
           echo $a.PHP_EOL;
           $ret[$k] = NULL;
       }


   foreach ($ret as $k => $a)
       if ($a && is_numeric($a))
       {
           echo $a.PHP_EOL;
           $ret[$k] = NULL;
       }

   foreach ($ret as $a)
       if ($a)
           echo $a.PHP_EOL;

}
?>
