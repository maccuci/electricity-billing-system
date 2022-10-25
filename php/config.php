<?php

define('db_name', 'cebra');
define('db_username', 'root');
define('db_password', '');
define('db_server', 'localhost');

$link = mysqli_connect(db_server, db_username, db_password, db_name);

if($link === false) {
    die('Could not connect.');
} else {
    print('Connected in mysql.');
}
?>