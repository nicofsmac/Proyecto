<?php
$a = "a";
$dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3307';
$username = 'root';
$password = 'root';
try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
}
$query = $pdo->query('SELECT * from fixture2');
/* Prueba de tipos de PDOStatement::fetch */
print("PDO::FETCH_ASSOC: ");
print("Devolver la siguiente fila como un array indexado por nombre de colunmna\n");
$results = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($results);
print("\n");
?>
