

<?php
$a = "a";
$dsn = 'mysql:host=localhost;dbname=registro';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
}
$query = $pdo->query('SELECT * FROM usuarios');


$rows = $query->fetchAll(PDO::FETCH_ASSOC);

// var_dump($rows);
// print_r("<ul>");
// var_dump($rows[0]);

$ultimo2 = array_search(max($rows),$rows);
print_r("Ya tenemos registrados ");
print_r($ultimo2);
print_r(" fanaticos del fútbol!");
// print_r("<ul>");
// foreach ($rows as $row) {
//   print_r("<li>");
//     print_r ($row['Id']);
//     print_r("</li>");
// }
// print_r("</ul>");


?>
