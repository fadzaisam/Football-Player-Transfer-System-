<?php

// MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "player_transfer_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from dynamos table
$sql = "SELECT * FROM dynamos";

// Execute query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["no"] . "<br>";
        echo "Name: " . $row["name"] . " " . $row["surname"] . "<br>";
        echo "Position: " . $row["position"] . "<br>";
        echo "Description: " . $row["description"] . "<br>";
        echo "Status: " . $row["status"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Image: <img src='" . $row["image"] . "' alt='Player Image'><br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dynamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h2>" . $row["name"] . " " . $row["surname"] . "</h2>";
    echo "<p>Position: " . $row["position"] . "</p>";
    echo "<p>Description: " . $row["description"] . "</p>";
    echo "<p>Status: " . $row["status"] . "</p>";
    echo "<p>Age: " . $row["age"] . "</p>";
    echo "<img src='" . $row["image"] . "' alt='Image' width='100'>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dynamos LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of the first row
  $row = $result->fetch_assoc();
?>
<article class="course">
  <div class="course__image">
    <img src="<?php echo $row["image"]; ?>">
  </div>
  <div class="course__info">
    <h4><?php echo $row["name"] . " " . $row["surname"]; ?></h4>
    <p><?php echo $row["description"]; ?></p>
    <p>Position: <?php echo $row["position"]; ?></p>
    <p>Status: <?php echo $row["status"]; ?></p>
    <p>Age: <?php echo $row["age"]; ?></p>
    <a href="courses.html" class="btn btn-primary">Learn More</a>
  </div> 
</article>
<?php
} else {
  echo "0 results";
}
$conn->close();
?>




<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Specify the column you want to display
$column = "name";

$sql = "SELECT $column FROM dynamos LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of the first row
  $row = $result->fetch_assoc();
?>
<article class="course">
  <div class="course__info">
    <h4><?php echo $row[$column]; ?></h4>
    <a href="courses.html" class="btn btn-primary">Learn More</a>
  </div> 
</article>
<?php
} else {
  echo "0 results";
}
$conn->close();
?>






<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "player_transfer_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dynamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
<article class="course">
  <div class="course__image">
    <img src="<?php echo $row["image"]; ?>">
  </div>
  <div class="course__info">
    <h4><?php echo $row["name"] . " " . $row["surname"]; ?></h4>
    <p><?php echo $row["description"]; ?></p>
    <p>Position: <?php echo $row["position"]; ?></p>
    <p>Status: <?php echo $row["status"]; ?></p>
    <p>Age: <?php echo $row["age"]; ?></p>
    <a href="courses.html" class="btn btn-primary">Learn More</a>
  </div> 
</article>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>