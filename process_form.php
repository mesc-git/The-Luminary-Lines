<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "the_luminary_lines";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $company_name = $_POST['company_name'];
        $project_type = $_POST['project_type'];
        $comments = $_POST['comments'];
        
        // Validate and sanitize form data (optional)
        $first_name = htmlspecialchars($first_name);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $company_name = htmlspecialchars($company_name);
        $project_type = htmlspecialchars($project_type);
        $comments = htmlspecialchars($comments);
        
        // Insert data into the database
        $sql = "INSERT INTO contact_us (first_name, email, company_name, project_type, comments) 
            VALUES ('$first_name', '$email', '$company_name', '$project_type', '$comments')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Close database connection
        $conn->close();
    }

?>
