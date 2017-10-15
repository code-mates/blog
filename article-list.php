<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT article_id, author_user_id, title, body, publish_date FROM cm_blog.article ORDER BY publish_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
echo "<td>" .$row['article_id']. "</td>"; echo "<td>" .$row['author_user_id']. "</td>"; echo "<td>" .$row['title']. "</td>"; echo "<td>" .$row['body']. "</td>"; echo "<td>" .$row['publish_date']. "</td>";  echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
