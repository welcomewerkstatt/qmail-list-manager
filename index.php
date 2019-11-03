<?php
// Change to home directory, where .qmail files are stored
chdir('/home/welcome/');

$file = '.qmail-test';
// Open the file to get existing content
$current = file_get_contents($file);
$success = false;

if (!empty($_POST))
{
  // print_r($_POST);
  $current = $_POST["receivers"];
  // Write the contents back to the file with normalized line endings
  $success = file_put_contents($file, preg_replace('~\R~u', "\n", $current));
}

include("/var/www/virtual/welcome/list.welcome-werkstatt.de/template.php");



