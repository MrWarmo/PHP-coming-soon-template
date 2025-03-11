<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the domain name
$domain = $_SERVER['HTTP_HOST'];
//echo "Detected domain: " . $domain . "<br>"; // Debugging

// Define base directory
$root = __DIR__;

// Define the file to include based on the domain
if ($domain == "example.com") {
    $file = "$root/content/main-site.html";
} elseif ($domain == "sub.example.com") {
    $file = "$root/content/sub-site.html";
} elseif ($domain == "anotherdomain.com") {
    $file = "$root/content/another-site.html";
} else {
    $file = "$root/error.html"; // Default fallback
}

// Debugging output
//echo "Trying to include: " . $file . "<br>";

// Check if the file exists before including it
if (file_exists($file)) {
    include($file);
} else {
    echo "<p>PHP Error: File not found.</p>";
}
?>
