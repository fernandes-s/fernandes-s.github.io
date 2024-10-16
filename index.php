<?php include 'includes/header.php'; ?> <!-- Include the header with navigation -->

<!-- Hero Section -->
<div class="hero bg-dark text-white text-center py-5">
    <h1>Daniel Fernandes Moreira Neto</h1>
    <p class="lead">BSc Computing Student | Data Analytics & Big Data | Data Science Enthusiast</p>
    <p><em>Dublin, Ireland - Stamp 4 | Available for Internship Opportunities</em></p>
    <a href="#contact" class="btn btn-primary">Contact Me</a>
</div>

<!-- About Section -->
<div class="container my-5">
    <h2>About Me</h2>
    <p>
        I am a third-year BSc Computing student specializing in Data Analytics and Big Data at Dublin Business School. With hands-on experience in real-world data science projects, I am proficient in Python, SQL, and machine learning. I am seeking internship opportunities where I can leverage my skills to make data-driven decisions and solve complex problems.
    </p>
    <p><strong>Phone:</strong> +353 85 268 1884 | <strong>Email:</strong> dfm.neto.dn@gmail.com</p>
    <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/fernandesss-s/" target="_blank">linkedin.com/in/fernandesss-s/</a> | <strong>GitHub:</strong> <a href="https://github.com/fernandes-s" target="_blank">github.com/fernandes-s</a></p>
</div>

<!-- Skills Section -->
<div class="container my-5">
    <h2>Key Skills</h2>
    <div class="row">
        <div class="col-md-4">
            <h4>Programming Languages</h4>
            <ul>
                <li>Python</li>
                <li>SQL</li>
                <li>C#</li>
                <li>HTML, PHP, Bootstrap</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Data Science Tools</h4>
            <ul>
                <li>Pandas, NumPy</li>
                <li>Scikit-learn</li>
                <li>Matplotlib, Seaborn</li>
                <li>Power BI, Dash</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Other Skills</h4>
            <ul>
                <li>Git, CI/CD, Agile</li>
                <li>MS SQL Server, MariaDB</li>
                <li>Data Extraction (BeautifulSoup, APIs)</li>
                <li>Advanced Excel, Automation</li>
            </ul>
        </div>
    </div>
</div>

<!-- Featured Projects Section -->
<div class="container my-5">
    <h2>Featured Projects</h2>
    <div class="row">
        <div class="col-md-6">
            <h4>Daft.ie House Price Prediction</h4>
            <p>Developed predictive models to estimate house prices using real estate data from Daft.ie. <a href="https://github.com/fernandes-s/Daft_ie">View Project</a></p>
        </div>
        <div class="col-md-6">
            <h4>Insurance Cost Analysis</h4>
            <p>Performed exploratory data analysis and built predictive models to analyze insurance costs. <a href="https://github.com/fernandes-s/insurance_cost_analysis">View Project</a></p>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="container my-5">
    <h2>Testimonials</h2>
    <?php
    // Fetch and display testimonials from the database
    $sql = "SELECT name, testimonial, image_path FROM testimonials ORDER BY date_submitted DESC LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='row'>";
        while ($row = $result->fetch_assoc()) {
            $image_path = (!empty($row["image_path"]) && file_exists($row["image_path"])) ? $row["image_path"] : 'uploads/bot.png';
            echo "<div class='col-md-4'>";
            echo "<div class='testimonial-box p-3 border rounded mb-4'>";
            echo "<img src='" . htmlspecialchars($image_path) . "' class='img-fluid rounded-circle' style='width: 50px; height: 50px;'>";
            echo "<h5>" . htmlspecialchars($row["name"]) . "</h5>";
            echo "<p>" . htmlspecialchars($row["testimonial"]) . "</p>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<p>No testimonials found.</p>";
    }
    ?>
</div>

<!-- Contact Section -->
<div class="container my-5" id="contact">
    <h2>Contact Me</h2>
    <p>If you're interested in discussing opportunities or projects, feel free to reach out.</p>
    <p><strong>Phone:</strong> +353 85 268 1884</p>
    <p><strong>Email:</strong> dfm.neto.dn@gmail.com</p>
</div>

<?php include 'includes/footer.php'; ?>
