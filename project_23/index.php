<?php
$filename = "example.txt";

$file = fopen($filename, "w");
if ($file) {
    $content = "This is some initial content in the file.\n";
    fwrite($file, $content);
    fclose($file);
    echo "File created and initial content written successfully.<br>";

    $file = fopen($filename, "a"); 
    if ($file) {
        $additionalContent = "This is additional content appended to the file.";
        fwrite($file, $additionalContent);
        fclose($file);
        echo "Additional content appended successfully.<br>";

        // Read the file to display its contents
        $file = fopen($filename, "r");
        if ($file) {
            echo "<br>File contents after appending:<br>";
            while (!feof($file)) {
                echo fgets($file) . "<br>";
            }
            fclose($file);
        } else {
            echo "Unable to open file for reading.";
        }
    } else {
        echo "Unable to open file for appending.";
    }
} else {
    echo "Unable to create file.";
}
?>