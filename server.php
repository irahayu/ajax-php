<?php
// Function to handle AJAX requests
function greetUser($name) {
    return "Hello, " . htmlspecialchars($name) . "! Welcome to the AJAX-PHP example.";
}

// Check if the request is an AJAX POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    // Handle the requested action
    if ($action === 'greet' && isset($_POST['name'])) {
        $name = $_POST['name'];
        echo greetUser($name);
    } else {
        echo "Invalid action or missing parameters.";
    }
    exit;
}
