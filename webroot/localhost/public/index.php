<?php

// If the Composer autoloader is found
if (is_file(__DIR__.'/../vendor/autoload.php'))
{
    // Load the Composer autoloader
    require_once __DIR__.'/../vendor/autoload.php';
}

// ****************************************************************************
// Remove everything below this line, it is just for testing
// ****************************************************************************

// ****************************************************************************
// If you can read this from your web browser, PHP is not working correctly :-(
// ****************************************************************************

echo 'PHP is working'.nl2br(PHP_EOL);

// Attempt to connect to MySQL
$mysqli = @new mysqli('127.0.0.1', 'root', '');

// If the MySQL connection failed
if ($mysqli->connect_error)
{
	// Output failed
	echo 'MySQL connection is NOT working with current credentials'.nl2br(PHP_EOL);
}
// Else the MySQL connection was successful
else
{
	// Output success
	echo 'MySQL connection is successful'.nl2br(PHP_EOL);
}

try
{
    // Attempt to connect to MongoDB
    $connection = @new MongoClient('mongodb://127.0.0.1:27017');
    
    // Output success
    echo 'MongoDB connection is successful'.nl2br(PHP_EOL);
}
catch (MongoConnectionException $e)
{
    // Output failed
    echo 'MongoDB connection is NOT working'.nl2br(PHP_EOL);
}

echo nl2br(PHP_EOL);
echo '<a href="/adminer.php">Click here to open Adminer for MySQL and MongoDB.</a>'.nl2br(PHP_EOL);

?>