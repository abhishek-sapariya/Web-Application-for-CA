<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
    require 'classes/fpdf/fpdf.php';
    require 'classes/PHPMailer/PHPMailerAutoLoad.php';

    //PDF generation
    require_once __DIR__ . '/classes/vendor/autoload.php';

$_SESSION['PAN']=$_POST['PAN'];
$PAN=$_SESSION['PAN'];
$year=$_SESSION['year'];
    $file_name = "forms/".$PAN.$year.".pdf";
    // $mpdf = new \Mpdf\Mpdf();
    // $mpdf->WriteHTML('Hello');
    // $mpdf->Output('demo.pdf');
             ob_start();
             include("templatemail.php");
             $body=ob_get_clean();
             $body= iconv("UTF-8","UTF-8//IGNORE",$body);
             $mpdf = new \Mpdf\Mpdf();
             $mpdf -> WriteHTML($body);
             $mpdf -> Output($file_name,'F');
             
             //rename( $orderId, $new_name) ; 
            // //Mailler      
                      
            $mail       =   new PHPMailer();
           $mail       ->  isSMTP();
           $mail       ->  Host = 'smtp.gmail.com';
           $mail       ->  Port = 587;
           $mail       ->  SMTPAuth = true;
           $mail       ->  SMTPSecure = 'tls';
           $mail       ->  Username = 'nousername7755@gmail.com';
           $mail       ->  Password = 'whowho123';
           $mail       ->  setFrom('nousername7755@gmail.com');
           $mail       ->  addAddress($row10['email']);
           $mail       ->  isHTML(true);
           $mail       ->  Subject = 'Form-16';
           $mail       ->  Body = 'Form-16';
           $mail       ->  addAttachment($file_name);
            
               if($mail->send()){
                echo "mail sent successfully";
                unset($_SESSION['PAN']);
               }
                     
               else
               echo 'fail';
            
        
            
            
           
?>
