<?php
require('includes/connection.php');


// Define file path
$file = 'testrun.html';

// Read the edited content from the file
$editedContent = file_get_contents($file);
if ($editedContent === false) {
    die("Failed to read content from $file");
}

// Escape the content for safe database insertion
$escapedContent = $mysqli->real_escape_string($editedContent);

// Update the database with the edited content$stmt = $conn->prepare($sql);
$updateQuery = "UPDATE blog SET content='$escapedContent' WHERE id=4";
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($content);
$stmt->fetch();
$stmt->close();

if (!$mysqli->query($updateQuery)) {
    die("Database update failed: " . $mysqli->error);
}

// Close the database connection
$mysqli->close();

echo "Database has been updated with the new content.";
?>



<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    
    // Read the updated content from the file
    $file = 'temp_content.html';
    $content = file_get_contents($file);
    
    // Update the content in the database
    $sql = "UPDATE content_table SET content = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $content, $id);
    $stmt->execute();
    $stmt->close();
    
    // Optionally, delete the temporary file
    unlink($file);

    echo "Content updated successfully.";
} else {
    echo "Invalid request method.";
}
?>

