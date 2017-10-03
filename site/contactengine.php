<?php

// if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {

//   $secret = "6LcWBiAUAAAAAIZddw94ku9lWNAkQLOR7hc-m14U"; 
//   $ip = $_SERVER['REMOTE_ADDR']; 
//   $captcha = $_POST['g-recaptcha-response']; 
//   $res = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
//   $arr = json_decode($res,TRUE); 

//   if ($arr['success']) {
    $EmailTo = "devchrisgallup@gmail.com";
    $Subject = "Submit Form";
    $FirstName = Trim(stripslashes($_POST['FirstName'])); 
    $LastName = Trim(stripslashes($_POST['LastName'])); 
    $Email = Trim(stripslashes($_POST['Email'])); 
    $Comments = Trim(stripslashes($_POST['Comments'])); 
    $Telephone = Trim(stripslashes($_POST['Telephone'])); 
    $City = Trim(stripslashes($_POST['City']));

    // prepare email body text
    $Body = "";
    $Body .= "First Name: ";
    $Body .= $FirstName;
    $Body .= "\n";
    $Body .= "Last Name: ";
    $Body .= $LastName;
    $Body .= "\n";
    $Body .= "E-mail: ";
    $Body .= $Email;
    $Body .= "\n";
    $Body .= "Telephone: ";
    $Body .= $Telephone;
    $Body .= "\n";
    $Body .= "Comments: ";
    $Body .= $Comments;
    $Body .= "\n";

    // send email 
    $success = mail($EmailTo, $Subject, $Body);

    // redirect to success page 
    if ($success){
      print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
    }
//   } 
// } else {
//   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">"; 
// }
?>