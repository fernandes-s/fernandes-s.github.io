<?php include 'includes/header.php'; ?> <!-- The database connection is included via the header -->

<h1 class="text-center my-4">Customer Testimonials</h1>

<div class="container">
    <?php
    // SQL query to get all testimonials from the database
    $sql = "SELECT name, testimonial, image_path, date_submitted FROM testimonials ORDER BY date_submitted DESC";
    $result = $conn->query($sql);  // Use $conn here to match your database connection variable

    if ($result->num_rows > 0) {
        // Loop through each testimonial and display it
        while ($row = $result->fetch_assoc()) {
            // Check if the user uploaded an image, otherwise use the bot image for all entries without an uploaded image
            $image_path = (!empty($row["image_path"]) && file_exists($row["image_path"])) ? $row["image_path"] : 'uploads/bot.png';  // Use default bot image if none uploaded

            echo "<div class='row mb-4 p-3 border rounded'>";
            echo "<div class='col-md-2'>";
            echo "<img src='" . htmlspecialchars($image_path) . "' alt='User Image' class='img-fluid rounded' style='width: 100px; height: 100px;'>";
            echo "</div>";
            echo "<div class='col-md-10'>";
            echo "<h5 class='text-primary'>" . htmlspecialchars($row["name"]) . "</h5>";
            echo "<p class='mb-0'>" . htmlspecialchars($row["testimonial"]) . "</p>";
            echo "<small class='text-muted'>Submitted on: " . htmlspecialchars($row["date_submitted"]) . "</small>";
            echo "</div>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No testimonials found</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

<?php include 'includes/footer.php'; ?>
