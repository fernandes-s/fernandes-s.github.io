<?php include 'includes/header.php'; ?>


<h1 class="text-center my-4">Submit Your Testimonial</h1>

<div class="container">
    <?php
    // Process the form when it is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = htmlspecialchars($_POST['name']);
        $testimonial = htmlspecialchars($_POST['testimonial']);

        // Handle file upload
        $image_path = 'uploads/default.jpg';  // Default image if none is uploaded

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            // Set upload directory
            $target_dir = "uploads/";
            // Set unique file name
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            // Allow only specific image types
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

            // Check if the file is an allowed image type
            if (in_array($imageFileType, $allowed_types)) {
                // Upload the file
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image_path = $target_file;  // Update with the uploaded file path
                } else {
                    echo "<div class='alert alert-danger'>Sorry, there was an error uploading your file.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Only JPG, JPEG, PNG & GIF files are allowed.</div>";
            }
        }

        // Insert data into the database
        $sql = "INSERT INTO testimonials (name, testimonial, image_path) VALUES ('$name', '$testimonial', '$image_path')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Thank you for your testimonial!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</div>



<div class="container">
	<form action="submit_testimonial.php" method="POST" enctype="multipart/form-data" class="mb-4">
		<div class="mb-3">
			<label for="name" class="form-label">Your Name:</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
		<div class="mb-3">
			<label for="testimonial" class="form-label">Your Testimonial:</label>
			<textarea class="form-control" id="testimonial" name="testimonial" rows="4" required></textarea>
		</div>
		<div class="mb-3">
			<label for="image" class="form-label">Upload a Picture (Optional):</label>
			<input type="file" class="form-control" id="image" name="image" accept="image/*">
		</div>
		<button type="submit" class="btn btn-primary">Submit Testimonial</button>
	</form>
</div>



<?php include 'includes/footer.php'; ?>