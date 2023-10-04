<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudcode"; // Use the database you created

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a photo was uploaded
if (isset($_FILES['photo'])) {
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];

    // Read the uploaded photo into a variable
    $photoData = file_get_contents($photoTmpName);

    // Check if the same photo data already exists in the database
    $stmt = $conn->prepare("SELECT id, photo_name, photo_data FROM photo_matching_db WHERE photo_data = ?");
    $stmt->bind_param("b", $photoData);
    $stmt->execute();
    $stmt->store_result();
    $match = $stmt->num_rows > 0;

    if ($match) {
        // Display a message for matching photo
        echo "<div class='alert alert-warning mt-3'>The uploaded photo is the same as a previously uploaded photo.</div>";

        // Display the matching photo
        $stmt->bind_result($id, $matchedPhotoName, $matchedPhotoData);
        $stmt->fetch();
        echo "<div class='mt-3'><strong>Matching Photo:</strong></div>";
        echo "<img src='data:image/jpeg;base64," . base64_encode($matchedPhotoData) . "' alt='$matchedPhotoName' width='300'>";
    } else {
        // Insert the uploaded photo data into the database
        $insertSql = "INSERT INTO photo_matching_db (photo_name, photo_data) VALUES ($photo_name, $photo_data)";
        $stmt = $conn->prepare($insertSql);
        $stmt->bind_param("sb", $photoName, $photoData);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success mt-3'>Photo saved successfully.</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Failed to save the photo.</div>";
        }

        $stmt->close();
    }

    $stmt->close();
    // Close the database connection
    $conn->close();
}
?>
