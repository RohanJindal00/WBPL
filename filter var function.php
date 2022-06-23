<?php
echo"Rohan Jindal<br>";
$email = "username.domain.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "This is a valid email address.";
} else {
echo "This is not a valid email address.";
}
?>