<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 12/4/2019
 * Time: 8:43 AM
 */

$enlace = mysqli_connect("127.0.0.1", "root", "", "db_megacenter");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>