<?php

$td = $_GET["td"];
//Include
require_once dirname(__FILE__).'/jdatetime.class.php';

//Just add routine html tags and encoding the settings to view Persian characters correctly.

//Init
$date = new jDateTime(true, true, 'Asia/Tehran');
if ($td == "date"){
echo $date->date("l j F Y"); // Outputs: پنجشنبه ۱۵ اردیبهشت ۱۳۹۰ ۰۰:۰۰
}elseif($td == "time"){
  echo $date->date("H:i:s");
}else{
  echo $date->date("H:i:s")."\n
".$date->date("l j F Y");
}
