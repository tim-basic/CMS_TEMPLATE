<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2/09/2018
 * Time: 10:03 PM
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] ="";
$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//
//if($connection) {
//    echo "We are connected";
//}


?>