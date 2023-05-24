<form action="search.php" method="GET">
  <input type="text" name="query" placeholder="Search..." />
  <input type="submit" value="Search" />
</form>
<?php
// Establish the database connection
include_once("includes/connection.php");
include_once("includes/navbar.php");


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Retrieve the search query
$query = $_GET["shoe_name"];

// Sanitize and validate the input
$query = mysqli_real_escape_string($con, $query);

// Perform the database query
$select = "SELECT * FROM product WHERE shoe_name LIKE '%$shoe_name%'";
$result = $con->query($select);

// Display the search results
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Display relevant information from each row
    echo "shoe_name: " . $row["shoe_name"] . "<hr>";
    echo "price: " . $row["price"] . "<hr>";
    // echo "Email: " . $row["email"] . "<br>";
    // ...
    echo "<br>";
  }
} else {
  echo "No results found.";
}

// Close the database connection
$con->close();
?>
