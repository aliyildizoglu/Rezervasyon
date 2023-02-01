<?php
$host = 'b1pimhxnganaivrmbq0g-mysql.services.clever-cloud.com';
$dbname = 'b1pimhxnganaivrmbq0g';
$username = 'u16ckm4szngioeyv';
$password = '1lxncejGGA5IOEoBe1xf';
$port = '3306';





try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>


