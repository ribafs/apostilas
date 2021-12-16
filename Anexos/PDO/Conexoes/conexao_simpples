<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>

// ou


<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

