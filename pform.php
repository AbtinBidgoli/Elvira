<?PHP
$email = $_POST["pemail"];
$to = "mateo@elvira.media";
$subject = "New privacy request from Elvira Media ~ Privacy Form";
$headers = "From: $email\n";
$message = "New privacy request from Elvira Media ~ Privacy Form\n;
$name = $_POST["pname"];
$select = $_POST["pselect"];
$terms = $_POST["pterms"];

// prepare email body text

$message .= "Name: ";
$message .= $name;
$message .= "\n";
$message .= "Email: ";
$message .= $email;
$message .= "\n";
$message .= "Request: ";
$message .= $select;
$message .= "\n";
$message .= "Terms: ";
$message .= $terms;
$message .= "\n";

Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: mateo@elvira.media\n";
$usermessage = "Thank you for privacy request, Elvira Media, LLC will respond shortly with your request.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>

