<?php
// $dbhost='alibobo.tech';
// $dbuser='psi_kel_2';
// $dbpass='SI@irlangg@';
// $dbname='psi_kel_2';
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='psi';
$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
