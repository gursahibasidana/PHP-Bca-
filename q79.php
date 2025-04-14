<?php
// File name
$filename = "output.txt";

// Open the file in read mode
$file = fopen($filename, "r");

// Check if file opened successfully
if ($file) {
    // Get file size
    $filesize = filesize($filename);

    // Read the file content
    $content = fread($file, $filesize);

    // Display the content
    echo "File content:<br>" . nl2br($content);

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file for reading.";
}

echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>
