<?php
//importe mainigos no masiva
extract($_POST);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "portfolio_contacts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
} 
else {
    echo "Connected successfully";
}
//  datu bāzes tabulā "contacts" kolonnās name, email, comment ievietos mainīgos $name, $email, $comment, kas iegūti no formas, kas ir index failā
$sql = "INSERT INTO contacts (name, email, comment)
VALUES ('".$name."', '".$email."', '".$comment."')";

//taisa vaicajumu datubazei
if ($conn->query($sql) === TRUE) {
echo "<br>Jauns ieraksts pievienots!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
// -> tekosa objekta operators
?>