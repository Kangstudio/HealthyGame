<?php
echo "tvt:";
/*$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'), 
    getenv('OPENSHIFT_MYSQL_DB_HOST'), 
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);*/
/*$servername = 'mysql-kang.0ec9.hackathon.openshiftapps.com';
$username = 'cakephp';
$password = 'q3xhacvM6G6qSrg3';
$database = 'default';*/

$dbhost = getenv("OPENSHIFT_EXTMYSQL_DB_HOST");
$dbport = getenv("OPENSHIFT_EXTMYSQL_DB_PORT");
$dbuser = getenv("OPENSHIFT_EXTMYSQL_DB_USERNAME");
$dbpwd = getenv("OPENSHIFT_EXTMYSQL_DB_PASSWORD");
$dbname = getenv("OPENSHIFT_EXTMYSQL_DB_NAME");
$connection = mysql_connect($dbhost.":".$dbport, $dbuser, $dbpwd);
if (!$connection) {
  echo "Could not connect to database";
} else {
  echo "Connected to database.<br>";
}
echo "OK";
echo "tvt2";