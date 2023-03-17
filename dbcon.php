<?php

$con = mysqli_connect("localhost", "root", "", "PHPCRUD");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
