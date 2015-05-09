<?php
    require_once('./class-bd.php'); $bd = new bd();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Subscribe</title>
</head>

<body>

<?php
$email_to       = "mc2.ions@gmail.com"; //info@revirtualis.com";
$email          = $_POST["input-email"];
$text           = "Email: $email";
$headers        = "MIME-Version: 1.0" . "\r\n"; 
$headers        .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers        .= "From: <$email>" . "\r\n";
#echo mail($email_to, "Message", $text, $headers);

//Insert into db
$data["email"]            = $bd->clean($_POST["input-email"]);
$bd->dbInsert("release_subscription", $data);



?>

</body>
</html>
