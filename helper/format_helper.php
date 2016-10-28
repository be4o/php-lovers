<?php
/*
*Date Format
*/
function dateFormat($date){
  return date("F j, Y g:i a",strtotime($date));
}
/*
*Shorten a text
*/
function shortenText($txt,$chars = 450){
$txt = $txt." ";
$txt = substr($txt, 0, $chars);
$txt = substr($txt, 0, strrpos($txt, ' '));
$txt .= " ...";
return $txt;
}
