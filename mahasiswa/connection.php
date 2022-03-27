<?php
class Connection
{
	public function get_connection()
{
	$host 	="localhost";
	$db	="mahasiswa";
	$username	="root";
	$password = "";
	$connect = new mysqli($host, $username, $password, $db);
	return $connect;
}
}
