<?php

/** The name of the database  */
define('DB_NAME', 'al375874_ei1036_42');

/** Fatabase username */
define('DB_USER', 'al375874');

/** Database password */
define('DB_PASSWORD', 'F1Ferrari2021');

/** Database hostname */
define('DB_HOST', "db-aules.uji.es");

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/* query y valor pueden ser nulos, o sea no pasarse como parรกmetros */
function ejecutarSQL($query,$valor) {

	global $pdo;
	
	try{
		if (!isset($pdo)) $pdo = new PDO("pgsql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
		$consult = $pdo->prepare($query);
		$a=$consult->execute($valor); 
	}
	catch (PDOException $e) {
		echo "Failed to get DB handle: " . $e->getMessage() . "\n";
		echo $query."\n";
		retun -1;
	}
	return ($consult->fetchAll(PDO::FETCH_ASSOC)); 
						  
}

?>
