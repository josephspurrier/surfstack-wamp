<?php //If you can read this, PHP is not working correctly :-(

class HTMLOutput
{
	private $output;
	
	public function write($a)
	{
		$this->output .= $a;
	}
	public function writeln($a)
	{
		$this->output .= $a.PHP_EOL;
	}
	public function output()
	{
		return nl2br($this->output);
	}
} $o = new HTMLOutput;

// Define a few global variables
define('DB_HOST','127.0.0.1');
define('DB_ROOT_USERNAME','root');
define('DB_ROOT_PASSWORD','');

$o->writeln('PHP is working');

// Attempt to connect to MySQL
$mysqli = @new mysqli(DB_HOST, DB_ROOT_USERNAME, DB_ROOT_PASSWORD);

// If the MySQL connection failed
if ($mysqli->connect_error)
{
	// Output the error
	$o->writeln('MySQL connection is NOT working with current credentials');
}
// Else the MySQL connection was successful
else
{
	// Output the wonderful news
	$o->writeln('MySQL connection is successful');
}

$connection = false;
try
{
    $connection = @new MongoClient('mongodb://127.0.0.1:27017');
    $connection = true;
}
catch (MongoConnectionException $e)
{
    $connection = false;
}
if ($connection===false)
{
    // Output the error
    $o->writeln('MongoDB connection is NOT working');
}
// Else the MongoDB connection was successful
else
{
    // Output the wonderful news
    $o->writeln('MongoDB connection is successful');
}
    
if (@include_once('PEAR.php'))
{
	$o->writeln('PEAR is installed');
}
else
{
	$o->writeln('PEAR is not installed');
}

$test1 = @include_once('PHPUnit/Autoload.php');
$test2 = @include_once('PHPUnit/TextUI/TestRunner.php');

if ($test1 && $test2)
{	
	$o->writeln('PHPUnit is installed');
}
else
{
	$o->writeln('PHPUnit is not installed');
}

echo $o->output();

?>