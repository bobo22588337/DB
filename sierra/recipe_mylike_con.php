<?php 
include "db.php";
    
#連 database
$db = db();
if(!$db){
    echo "db_con_wrong";
}

?>