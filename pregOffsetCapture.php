<?php
$pattern = "or";
$string = "Hello, world! or or";

if (preg_match("/$pattern/i", $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Match found at position " . $matches[0][1];
} else {
    echo "No match found.";
}
?>
