<?php
echo "Docker My custom site working";
echo "<br /><br />";

// Connect to database
try {
    if($pdo = new \PDO(
        'mysql:host=mydatabase;dbname=my_database',
        'myuser',
        'pass'
    )) {
        echo "Database connection successfull";
    }
} catch (PDOException $e) {
    echo "Error: " .$e->getMessage();
}
