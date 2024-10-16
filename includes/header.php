<?php include 'config/connect.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Daniel Fernandes</title>
    <!-- Bootstrap CSS with integrity and crossorigin attributes included for security purposes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .cursive-title {
            font-family: 'Courier New', Courier, monospace; /* Optional: Choose a cursive font */
            font-style: italic; /* Apply the cursive (italic) effect */
        }
    </style>
</head>

<body>
<div id="wrapper">
    <!-- Header Start -->
 
    <!-- Header End -->

    <!-- Nav Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="submit_testimonial.php">Submit Testimonial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="show_testimonials.php">Testimonials</a>
					</li>
					<li class="nav-item">
                        <a class="nav-link" href="display_projects.php"> My Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.php">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Nav End -->

    <!-- Main Start -->
    <main>
