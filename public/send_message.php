<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('../private/initialize.php');

//Load Composer's autoloader
require('../vendor/autoload.php');
include(SHARED_PATH . '/header.php');
$currentpage="contact";

ini_set('display_errors',1);
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "jtwesterkamp@gmail.com";
    $subject = isset($_GET['id']) ? $_GET['id']: '';
    if ($subject =='res'){
    $email_subject = "Residential Customer Message";
    }else{
    $email_subject = "Commercial Customer Message";
    }

    function died($error) {

          ?>
          <br><br><br>
          <div class="container">


          <div class="row">
            <div class="col-md-12">

          <h3>  <?php    echo "We are very sorry, but there were error(s) found with the form you submitted. ";?></h3>
          <h3>  <?php    echo "These errors appear below.<br /><br />";?></h3>
          <p>  <?php      echo $error."<br /><br />"; ?></p>
          <h3> <a href="<?php echo WWW_ROOT . '/contact.php';?>" > <?php    echo "Please go back and fix these errors.<br /><br />"; ?></a></h3>

            </div>
          </div>
        </div>
        <?php
            include(SHARED_PATH . '/footer.php');
            die();
        }

        ?>
    <?php


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['message']) ||
        !isset($_POST['email'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";



    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
      //  $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $email_to;                 // SMTP username
        $mail->Password = 'yeuqjrmkluumedgj';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email_from, 'Mailer');
        $mail->addAddress($email_to);     // Add a recipient
        $mail->addReplyTo($email_from, 'Information');


        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $email_subject;
        $mail->Body = "Form details below". "<br>";
        $mail->Body .= "Name: ".clean_string($first_name)."<br>";
        $mail->Body .= "Email: ".clean_string($email_from)."<br>";
        $mail->Body .= "Message: ".clean_string($comments)."<br>";
        $mail->AltBody = $first_name ."\n".$email_from . "\n". $comments;


        $mail->send();

        redirect_to(url_for('/contact.php?sent=true'));
    } catch (Exception $e) {


        redirect_to(url_for('/contact.php?sent=error'));
    }

  }
?>
