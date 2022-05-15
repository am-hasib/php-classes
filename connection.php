<?php
$con = new mysqli("localhost", "root", "12345", "crudoperation");

if (!$con) {
    die(mysqli_error($con));
}
