<?
  session_start();
	
  $dbname = 'chitsmalibay';
  $dbname2 = 'chitsquery';
  $_SESSION["query"] = $dbname2;
  $dbuser = $_SESSION["dbuser"];
  $dbpwd = $_SESSION["dbpass"];

  $dbconn = mysql_connect("localhost",$dbuser,$dbpwd) or die(mysql_error());
  mysql_select_db($dbname,$dbconn);
?>
