<?php
$db = new mysqli("localhost","shossain_admin","LQVFCOHA","shossain");
if ($db->connect_errno) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}