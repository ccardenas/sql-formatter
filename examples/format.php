<?php  

//root sql formatter
require_once(__DIR__.'/../lib/SqlFormatter.php');

$file = __DIR__.'\..\queries\query.sql';

// Check the existence of file
if(file_exists($file)){
    // Reading the entire file into a string
    $content = file_get_contents($file) or die("ERROR: Cannot open the file.");
    // Display the file content 
    echo SqlFormatter::format($content);
} else{
    echo "ERROR: File does not exist.";
}

?>