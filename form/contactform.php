<?php
$EmailFrom = "joao.riboli@outlook.com";
$EmailTo = "joao.riboli@outlook.com";
$Subject = "Nova Mensagem do teu Site.";
$Name = Trim(stripslashes($_POST['InputName'])); 
$Phone = Trim(stripslashes($_POST['InputPhone'])); 
$Email = Trim(stripslashes($_POST['InputEmail']));
$Subject = Trim(stripslashes($_POST['InputSubject'])); 
$Message = Trim(stripslashes($_POST['InputMessage'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Fone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>