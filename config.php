<?php
/*  Database and other configuration information - Required!!  
 -- Configure the Variables Below --

*/

$configs = parse_ini_file('/home/us3/lims/config/.config.ini', true); 

$org_name           = 'Ultrascan Kip Development LIMS';
$org_site           = 'devel-uslims.phynix.io';

$dbusername         = 'new_us3user';  # the name of the MySQL user
$dbpasswd           = $configs['us3']['password'];  # the password for the MySQL user
$dbname             = 'newus3';  # the name of the database
$dbhost             = 'localhost'; # the host on which MySQL runs, generally localhost
?>
