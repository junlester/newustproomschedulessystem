<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
       
        if ($username === 'demo' && $password === 'demo') {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Please enter both username and password.";
    }
}
?>