<?php
$dbhost='sql12.freemysqlhosting.net';
$dbuser='sql12290730';
$dbpass='ynCnGuDI4V';
$dbname='sql12290730';
$db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}