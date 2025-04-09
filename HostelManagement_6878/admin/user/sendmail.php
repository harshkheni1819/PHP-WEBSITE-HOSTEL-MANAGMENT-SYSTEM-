
<?php
$to_email = "bansi0528@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi";
$headers = "From:project887799@gmail.com";

if (mail($to_email,$subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed...";
}
?>