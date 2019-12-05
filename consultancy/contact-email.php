
    
<?php
         $sendto   = "selva@Exincorps.in";
  
 
$name = nl2br($_POST['name']);
$email = nl2br($_POST['email']);
$services = nl2br($_POST['services']);
$MobileNumber = nl2br($_POST['mobile']);
$Message = nl2br($_POST['message']); 

        $subject  = "Exincorp.in Contact Page";
        $headers  = "From: " . strip_tags($email) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

        $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg .= "<div style='border:1px solid grey;'> <img src='http://Exincorp.in/img/logo/logo.png'> <div style='float:right;'><a href='http://facebook.com/Exincorpstudios'><i class='fa fa-facebook' style='color:red'></i></a> </div>\r\n";
        $msg .= "<div style='width:100%;height:75px;color:white;background-color:#232222;text-align:center;padding-top:20px;'><h1>Contact Page from Exincorp.in</h1></div>\r\n"; 
        $msg .= "<div style='padding:20px;'><h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Client Requirment</h2>\r\n"; 
        $msg .= "<p><strong style='text-transform:uppercase;'> Services :</strong> ".$services."</p>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Message :</strong> ".$Message."</p>\r\n";
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Client Personal Detail</h2>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Name :</strong> ".$name."</p>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Email :</strong> ".$email."</p>\r\n";
        $msg .= "<p><strong style='text-transform:uppercase;'> Mobile :</strong> ".$MobileNumber."</p>\r\n";
        $msg .= "</div></div>";
        $msg .= "<div style='background-color:#28435F;text-align:center;text-decoration:none;color:red;width:100%; height:50px;padding-top:10px;'><p>&copy; 2016-2017 Exincorp.in. Powered By <a href='http://Exincorpstudios.in' style='text-decoration:none;color:red;'>Exincorp Studios</a></p></div>";
        $msg .= "</body></html>";
        $mails = mail ($sendto,$subject,$msg,$headers);

if($mails == true)
{
    echo ("<script language='javascript'> window.alert('Thanks For your Details!'); window.location.href='http://Exincorpconsultancy.com/contact.php'; </script>");
}
else
{
    echo "Failed";
}
       ?>
