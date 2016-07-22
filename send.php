echo $_SERVER["REQUEST_METHOD"];

$contactName    = $_POST['contactName'];
$contactEmail   = $_POST['contactEmail'];
$contactSubject = $_POST['contactSubject'];
$contactMessage = $_POST['contactMessage'];

/*if (($name == "") || ($email == "") || ($message == "")) {
  echo "All fields are required, please fill <a href=\"\">the form</a> again.";
} else {
  $from    = "From: $name<$email>\r\nReturn-path: $email";
  mail("youremail@yoursite.com", $subject, $message, $from);
  echo "Email sent!";
}*/
