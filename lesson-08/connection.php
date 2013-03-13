<?php
$dataconnection = new mysqli("localhost","shossain_admin","LQVFCOHA","shossain");
if ($dataconnection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dataconnection->connect_errno . ") " . $dataconnection->connect_error;
}