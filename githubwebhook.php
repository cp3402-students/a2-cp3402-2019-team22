<?php
echo "<b>Current working directory: </b>" . getcwd();
$output = shell_exec("git pull 2>&1");
echo "<h1>Git Pull</h1>" . "<pre>" . $output . "</pre>";

$output2 = shell_exec("ls -l");
echo "<h1>ls -l</h1>" . "<pre>" . $output2 . "</pre>";
