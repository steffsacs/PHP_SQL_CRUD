<?php

/*Save data in this session*/
session_start();


$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'crud_sql_php'
);

/* Check connection 
if (isset($conn)){
    echo 'DB is connected ';
}

*/
?>