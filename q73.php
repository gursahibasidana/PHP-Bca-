<?php
// Set a cookie named "user" with value "John" for 1 hour
setcookie("user", "John", time() + 3600); // 3600 seconds = 1 hour

// Access the cookie
if(isset($_COOKIE["user"])) {
    echo "Cookie 'user' is set!\n";
    echo "Value is: " . $_COOKIE["user"];
} else {
    echo "Cookie 'user' is not set!";
}

echo "\nCode by Gursahiba Kaur Sidana - 2220100267\n";
?>
