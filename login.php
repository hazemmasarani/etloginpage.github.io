<?php
// Define the predefined Email and password for validation
$validEmail = "hazem@gmail.com";
$validPassword = "123";

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the posted Email and password from the request
    $postedEmail = $_POST["Email"];
    $postedPassword = $_POST["password"];

    // Validate the Email and password
    if ($postedEmail === $validEmail && $postedPassword === $validPassword) {
        // Email and password are valid
        $response = array("status" => "success", "message" => "Login successful");
    } else {
        // Email and/or password are invalid
        $response = array("status" => "error", "message" => "Invalid Email or password");
    }
} else {
    // If the request is not a POST request, return an error
    $response = array("status" => "error", "message" => "Invalid request method");
}

// Set the response content type to JSON
header("Content-Type: application/json");

// Encode the response as JSON and output it
echo json_encode($response);
?>