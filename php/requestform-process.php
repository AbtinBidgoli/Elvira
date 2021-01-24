<?php
$errorMSG = "";

if (empty($_POST['rname'])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST['rname'];
}

if (empty($_POST['remail'])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST['remail'];
}

if (empty($_POST['rphone'])) {
    $errorMSG = "Phone is required ";
} else {
    $phone = $_POST['rphone'];
}

if (empty($_POST['rurl'])) {
    $errorMSG = "URL is prefered ";
} else {
    $url = $_POST['rurl'];
}

if (empty($_POST['rselect'])) {
    $errorMSG = "Selection is required ";
} else {
    $select = $_POST['rselect'];
}

if (empty($_POST['rterms'])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST['rterms'];
}

$EmailTo = "mateo@elvira.media";
$Subject = "New meeting request from Elvira Media, LLC ~ Request Form";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "URL: ";
$Body .= $url;
$Body .= "\n";
$Body .= "Package: ";
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
