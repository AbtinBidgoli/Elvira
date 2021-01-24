<?php
$errorMSG = "";

if (empty($_POST["pname"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["pname"];
}

if (empty($_POST["pemail"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["pemail"];
}

if (empty($_POST["pselect"])) {
    $errorMSG = "Select is required ";
} else {
    $select = $_POST["pselect"];
}

if (empty($_POST["pterms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["pterms"];
}

$EmailTo = "mateo@elvira.media";
$Subject = "New privacy request from Elvira Media ~ Privacy Form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Request: ";
$Body .= $select;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>
