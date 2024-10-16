<?php include 'includes/header.php'; ?>

<?php
// SQL query to get all projects from the database
$sql = "SELECT id, title, description, technologies, url, date_completed FROM projects";
$result = $conn->query($sql);
?>

<h1 class="text-center my-4">My Projects</h1>

<div class="container">
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='project mb-4 p-3 border rounded'>";
            echo "<h2 class='text-primary'>" . htmlspecialchars($row["title"]) . "</h2>";
            echo "<p><strong>Description:</strong> " . htmlspecialchars($row["description"]) . "</p>";
            echo "<p><strong>Technologies Used:</strong> " . htmlspecialchars($row["technologies"]) . "</p>";

            // Display project URL if it exists
            if (!empty($row["url"])) {
                echo "<p><strong>Project URL:</strong> <a href='" . htmlspecialchars($row["url"]) . "' target='_blank'>" . htmlspecialchars($row["url"]) . "</a></p>";
            }

            // Display date completed if available
            if (!empty($row["date_completed"])) {
                echo "<p><strong>Date Completed:</strong> " . htmlspecialchars($row["date_completed"]) . "</p>";
            }

            echo "</div><hr>";
        }
    } else {
        echo "<p>No projects found</p>";
    }
    ?>
</div>

<?php include 'includes/footer.php'; ?>
