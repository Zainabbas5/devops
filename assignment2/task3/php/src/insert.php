
<?php

$host = 'db';
$user = 'user';
$pass = 'test';
$database = 'myDb';

$conn = new mysqli($host, $user, $pass, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = (int)($_POST['id'] ?? 0);
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';

$stmt = $conn->prepare(
    "INSERT INTO users (id, username, password) VALUES (?, ?, ?)"
);
$stmt->bind_param("iss", $id, $fname, $lname);

if (!$stmt->execute()) {
    die("Error inserting record: " . $stmt->error);
}

echo "1 record added<br><br>";
echo "TABLE DATA: id name pass<br>";

$result = $conn->query("SELECT * FROM users");

while ($data = $result->fetch_object()) {
    echo htmlspecialchars((string)$data->id) . " ";
    echo htmlspecialchars($data->username) . " ";
    echo htmlspecialchars($data->password) . "<br>";
}

echo "<br>Go back to insert more data";
$stmt->close();
$conn->close();
?>


