<?php
// Start the session to store the CAPTCHA code
session_start();

// Generate a random CAPTCHA code and store it in the session
$captcha_code = generateRandomString(6); // You can change the length as needed
$_SESSION['captcha_code'] = $captcha_code;

// Create an image with the CAPTCHA code
$image = imagecreate(120, 50);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 10, 30, 20, $captcha_code, $text_color);

// Output the image as PNG
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $char_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $char_length - 1)];
    }
    return $random_string;
}
?>