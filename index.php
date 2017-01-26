<?php

require_once("vendor/lworm/mapper.php");

use lworm\Mapper as Mapper; 

Mapper::$HOST = 'localhost';
Mapper::$USER = 'root';
Mapper::$PASS = '';
Mapper::$DB = 'lworm';

$dummy = new Mapper('dummy');

echo "<body style='margin: 0 auto; width: 80%; text-align: center'>";
echo "<h1>LWORM is a LightWeight ORM Implementation in PHP</h1>";

/*
**  Call the load method
*/
$dummy->load();

/*
**  Then you can access the values of fields of your table, just like you access a property of an object.
*/
//$dummy->name;
//$dummy->display_name;
//$dummy->description;

echo "<h3>Fetching from the table. First Row via \$obj->load() method</h3>";

echo "<dl>";
echo "<dd>".$dummy->name."</dd>";
echo "<dd>".$dummy->display_name."</dd>";
echo "<dd>".$dummy->description."</dd>";
echo "</dl>";

/*
**  Call the next method
*/
$dummy->next();

/*
**  Then you can access the values of fields of next row in your table.
*/
//$dummy->name;
//$dummy->display_name;
//$dummy->description;

echo "<h3>Fetching from the table. Second Row via \$obj->next() method</h3>";

echo "<dl>";
echo "<dd>".$dummy->name."</dd>";
echo "<dd>".$dummy->display_name."</dd>";
echo "<dd>".$dummy->description."</dd>";
echo "</dl>";

/*
**  Can also call the next method with a number as argument
*/
$dummy->next(3);

/*
**  Then the mapper would jump 3 rows and you can again access the values as properties
*/
//$dummy->name;
//$dummy->display_name;
//$dummy->description;

echo "<h3>Calling the \$obj->next(3) method i.e. with a number as argument, jumps three rows.</h3>";

echo "<dl>";
echo "<dd>".$dummy->name."</dd>";
echo "<dd>".$dummy->display_name."</dd>";
echo "<dd>".$dummy->description."</dd>";
echo "</dl>";



echo "</body>";