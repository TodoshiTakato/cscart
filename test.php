<?php
error_reporting(-1); // report all the errors
ini_set("display_errors", "on");
$page_contents = file_get_contents("http://cscart/store_closed.html");
echo '<pre>';
echo htmlspecialchars($page_contents); // output the page source code instead of the page itself
echo '</pre>';
