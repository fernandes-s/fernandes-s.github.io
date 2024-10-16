<?php include 'includes/header.php'; ?>
<!-- php connection -->
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Or your username
$password = ""; // Your MySQL password
$dbname = "portfolio"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$title = $_POST['title'];
$description = $_POST['description'];
$technologies = $_POST['technologies'];
$url = $_POST['url'];
$date_completed = $_POST['date'];

// SQL query to insert data
$sql = "INSERT INTO projects (title, description, technologies, url, date_completed) 
        VALUES ('$title', '$description', '$technologies', '$url', '$date_completed')";

if ($conn->query($sql) === TRUE) {
    echo "Project submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!-- display project -->
<form action="submit_project.php" method="post">
    <label for="title">Project Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Project Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <label for="technologies">Technologies Used:</label><br>
    <input type="text" id="technologies" name="technologies" required><br><br>

    <label for="url">Project URL:</label><br>
    <input type="url" id="url" name="url"><br><br>

    <label for="date">Date Completed:</label><br>
    <input type="date" id="date" name="date"><br><br>

    <input type="submit" value="Submit Project">
</form>


<?php include 'includes/footer.php'; ?>