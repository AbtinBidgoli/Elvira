<?php
$errorMSG = "";

if (empty($_POST['companyname'])) {
    $errorMSG = "Company is required ";
} else {
    $compname = $_POST['companyname'];
}

if (empty($_POST['cname'])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST['cname'];
}

if (empty($_POST['cemail'])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST['cemail'];
}

if (empty($_POST['cphone'])) {
    $errorMSG = "Phone is required ";
} else {
    $phone = $_POST['cphone'];
}

if (empty($_POST['csize'])) {
    $errorMSG = "Approximate Size of Business is required ";
} else {
    $size = $_POST['csize'];
}

if (empty($_POST['cbudget'])) {
    $errorMSG = "Annual Marketing Budget is required ";
} else {
    $budget = $_POST['cbudget'];
}

if (empty($_POST['curl'])) {
    $errorMSG = "URL is prefered ";
} else {
    $url = $_POST['curl'];
}

if (empty($_POST['cmessage'])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST['cmessage'];
}

if (empty($_POST['cterms'])) {
    $errorMSG = "Privacy Policy & Terms & Conditions are required ";
} else {
    $terms = $_POST['cterms'];
}

$EmailTo = "mateo@elvira.media";
$Subject = "New message from Elvira Media, LLC ~ Contact Form";

// prepare email body text
$Body = "";
$Body .= "Company Name: ";
$Body .= $compname;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Approximate Company size: ";
$Body .= $size;
$Body .= "\n";
$Body .= "Annual Marketing Budget: ";
$Body .= $budget;
$Body .= "\n";
$Body .= "URL: ";
$Body .= $url;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo <script> alert('Message Sent');
       window.location.href='index.html';</script>
       "success";
}else{
    if($errorMSG == ""){
        echo <script> alert('Something went wrong :(');
       window.location.href='index.html';</script>
           "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>
