<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Php</title>
</head>
<body>
<?php
function test_input($data){
    $data= trim($data);             
    $data = stripslashes($data);     
    $data = htmlspecialchars($data);  
    return $data;
}

$name = $email = $phone = $formLabel = $formCheckInput = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["formLabel"]) && isset($_POST["formCheckInput"])) {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $formLabel = test_input($_POST["formLabel"]); 
    $formCheckInput = test_input($_POST["formCheckInput"]);

    echo  "Name : $name <br>";
    echo  "Email : $email <br>";
    echo  "Phone : $phone <br>";
    echo  "Enquiry : $formLabel <br>"; 
    echo  "From label : $formCheckInput <br>"; 
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "One or more required fields are missing.";
}
?>
</body>
</html>