<?php

$q = mysql_connect("localhost","root","");

if(!q)
    die("Connection to the MYSQL couldn't be established");

mysql_query("CREATE DATABASE lworm");