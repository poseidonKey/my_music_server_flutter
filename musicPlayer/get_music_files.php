<?php
// Directory where your mp3 files are located
$musicDirectory = 'music/';

// Array to store the mp3 files
$mp3Files = array();

// Open the directory
if ($handle = opendir($musicDirectory)) {
  // Loop through the directory
  while (false !== ($file = readdir($handle))) {
    // Check if the file is an mp3 file
    if (pathinfo($file, PATHINFO_EXTENSION) === 'mp3') {
      // Add the file to the array
      $mp3Files[] = $musicDirectory . $file;
    }
  }
  // Close the directory handle
  closedir($handle);
}

// Output the mp3 files as a JSON array
echo json_encode($mp3Files);
