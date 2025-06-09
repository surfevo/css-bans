<?php
echo "cURL extension status: ";
if (extension_loaded('curl')) {
    echo "Enabled";
    echo "<br><br>";
    echo "cURL Version Info:<br>";
    print_r(curl_version());
} else {
    echo "Disabled";
}
?>
