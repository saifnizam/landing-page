$email_to = "syed.nizam18@gmail.com"
$email = $_POST['email']
$phone = $_POST['phone']
$text = "Email: $email <br>
Phone Number: $phone";

mail($email_to, "Interested Contact", $text)