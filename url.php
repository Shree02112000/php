<?php
$url = "https://www.example.com/path/file.php?id=123&name=John%20Doe#section";

// Parse the URL
$parsedUrl = parse_url($url);

// Display the components of the URL
echo "Scheme: " . $parsedUrl['scheme'] . "\n";
echo "Host: " . $parsedUrl['host'] . "\n";
echo "Path: " . $parsedUrl['path'] . "\n";
echo "Query string: " . $parsedUrl['query'] . "\n";
echo "Fragment: " . $parsedUrl['fragment'] . "\n";
?>