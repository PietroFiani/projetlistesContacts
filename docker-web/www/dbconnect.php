<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root",""))
{
	die('Connexion impossible ! --> '.mysql_error());
}
if(!mysql_select_db("laverie"))
{
	die('Problème de connexion à la base de données ! --> '.mysql_error());
}
?>